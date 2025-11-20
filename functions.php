<?php
// 🔁 Réinitialiser le flag du seed "Works"
/**add_action('admin_init', function () {
    delete_option('cheno_seed_works_done');
});*/


/** ========================
 *  STYLES (CSS / JS)
 *  ======================== */
add_action('wp_enqueue_scripts', function () {
  // on charge d’abord le style du thème parent (Twenty Twenty-Four)
  $parent_style = 'twentytwentyfour-style';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

  // puis le style du thème enfant (style.css de cheno-child)
  wp_enqueue_style(
    'child-style',
    get_stylesheet_uri(),
    [$parent_style],
    wp_get_theme()->get('Version')
  );
});

/** ========================
 *  THUMBNAILS + MENUS
 *  ======================== */
add_action('after_setup_theme', function () {
  // Active les images mises en avant pour les articles, pages et CPT "work"
  add_theme_support('post-thumbnails', ['post','page','work']);

  // Déclare le menu principal "primary" utilisé dans le header
  register_nav_menus([
    'primary' => __('Primary Menu', 'cheno'),
  ]);
});

/** ========================
 *  CPT WORK + TAXONOMIE
 *  ======================== */
add_action('init', function () {
  // Déclaration du Custom Post Type "work"
  register_post_type('work', [
    'label'         => 'Works',
    'labels'        => [
      'name'          => 'Works',
      'singular_name' => 'Work',
      'add_new_item'  => 'Ajouter un Work',
      'edit_item'     => 'Modifier le Work',
      'all_items'     => 'Tous les Works',
    ],
    'public'        => true,                        // visible en front
    'has_archive'   => true,                        // archive /works
    'rewrite'       => ['slug' => 'works'],         // slug dans l’URL
    'menu_position' => 6,                           // position dans le menu admin
    'menu_icon'     => 'dashicons-portfolio',       // icône dans le back-office
    'supports'      => ['title','thumbnail','editor','excerpt','page-attributes'],
    'show_in_rest'  => true,                        // compatible Gutenberg / API REST
  ]);

  // Taxonomie "work_tag" pour catégoriser les Works (tags non hiérarchiques)
  register_taxonomy('work_tag', ['work'], [
    'label'        => 'Work tags',
    'public'       => true,
    'hierarchical' => false,                        // comportement de tags, pas de catégories
    'rewrite'      => ['slug' => 'work-tag'],
    'show_in_rest' => true,
  ]);

  // Taille d’image spécifique pour les cartes de Works
  add_image_size('work_card', 1200, 1200, true);    // 1200x1200 recadrée
});

/** ========================
 *  WALKER : MÉGA-MENU EXPERTISES
 *  ======================== */
if (!class_exists('Cheno_Mega_Walker')) {
  // Classe custom qui étend le walker de menu natif
  class Cheno_Mega_Walker extends Walker_Nav_Menu {
    // Indique si on est dans l’item "expertises" qui déclenche le méga-menu
    private $inside_mega = false;

    // Ouverture d’un niveau de sous-menu (<ul>)
    public function start_lvl(&$output, $depth = 0, $args = []) {
      $classes = 'sub-menu';
      // Au premier niveau sous l’item principal "expertises" on ajoute les classes méga-menu
      if ($depth === 0 && $this->inside_mega) $classes .= ' mega mega--expertises';
      $output .= "\n<ul class=\"$classes\">\n";
    }

    // Fermeture du <ul> du sous-menu
    public function end_lvl(&$output, $depth = 0, $args = []) { 
      $output .= "</ul>\n"; 
    }

    // Ouverture d’un <li> (un item de menu)
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
      // Niveau 0 : on regarde si l’item possède la classe "mega-expertises"
      // pour activer le rendu méga-menu sur ses enfants
      if ($depth === 0) {
        $this->inside_mega = in_array('mega-expertises', (array) $item->classes, true);
      }

      $classes = empty($item->classes) ? [] : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      // Niveau 1 du méga-menu : on affiche texte + vignette
      if ($depth === 1 && $this->inside_mega) {
        $src = '';

        // Seulement si l’item pointe vers une page
        if ($item->object === 'page' && $item->object_id) {
          // 1) Essayer d’abord l’image mise en avant de la page
          $src = get_the_post_thumbnail_url((int) $item->object_id, 'thumbnail');

          // 2) Si pas d’image, fallback via un mapping slug -> fichier image
          if (empty($src)) {
            $slug = get_post_field('post_name', (int) $item->object_id);
            $thumb_map = [
              'developpement-web'               => 'dev-web.png',
              'developpement-mobile'            => 'dev-mobile.png',
              'design-experience-utilisateur'   => 'ux-ui.png',
              'referencement-seo'               => 'seo.png',
              'controle-qualite-tests'          => 'qa.png',
              'maintenance-evolutions-tma'      => 'tma.png',
              'e-learning'                      => 'elearning.png',
            ];
            // Si le slug existe dans le tableau, on construit l’URL de l’image dans /assets/img/
            if (isset($thumb_map[$slug])) {
              $src = trailingslashit(get_stylesheet_directory_uri()) . 'assets/img/' . $thumb_map[$slug];
            }
          }
        }

        // HTML de la vignette si on a une image
        $thumb = $src ? '<img class="mega-thumb" src="'. esc_url($src) .'" alt="">' : '';

        // Construction du <li> spécifique pour un item du méga-menu
        $output .= '<li class="mega-li"><a class="mega-link" href="'. esc_url($item->url) .'">' .
                   $thumb . '<span class="mega-text">'. esc_html($item->title) .'</span></a>';
        return;
      }

      // Rendu standard pour tous les autres niveaux / items
      $class_names = implode(' ', array_map('esc_attr', $classes));
      $output .= '<li class="'. $class_names .'"><a href="'. esc_url($item->url) .'">'. esc_html($item->title) .'</a>';
    }

    // Fermeture du <li>
    public function end_el(&$output, $item, $depth = 0, $args = []) {
      $output .= "</li>\n";
      // À la fin d’un item de niveau 0, on réinitialise le flag méga-menu
      if ($depth === 0) $this->inside_mega = false;
    }
  }
}

/** ========================
 *  AUTO-ASSIGN : FEATURED IMAGES POUR LES PAGES EXPERTISES
 *  ======================== */
/* 
 * Ce script tourne dans l’admin une seule fois.
 * Il pose automatiquement une image mise en avant sur chaque page d’expertise
 * (FR + EN) en se basant sur le slug.
 */
add_action('admin_init', function () {
  // Si l’option existe déjà, on ne refait pas le travail
  if (get_option('cheno_set_page_thumbs_done')) return;

  // Mapping slug de page -> nom de fichier image dans /assets/img/
  $map = [
    // FR
    'developpement-web'               => 'dev-web.png',
    'developpement-mobile'            => 'dev-mobile.png',
    'design-experience-utilisateur'   => 'ux-ui.png',
    'referencement-seo'               => 'seo.png',
    'controle-qualite-tests'          => 'qa.png',
    'maintenance-evolutions-tma'      => 'tma.png',
    'e-learning'                      => 'elearning.png',

    // EN (mêmes fichiers images utilisés)
    'web-development'                 => 'dev-web.png',
    'mobile-development'              => 'dev-mobile.png',
    'ui-ux-design'                    => 'ux-ui.png',
    'seo-optimization'                => 'seo.png',
    'quality-control-testing'         => 'qa.png',
    'maintenance-evolutions-tma-en'   => 'tma.png',
    'e-learning-en'                   => 'elearning.png',
  ];

  // Répertoire physique où se trouvent les images de mapping
  $base_dir = trailingslashit(get_stylesheet_directory() . '/assets/img');

  // Pour chaque slug configuré…
  foreach ($map as $slug => $file) {
    // On essaie de récupérer la page correspondante
    $page = get_page_by_path($slug);
    // Si la page n’existe pas ou a déjà une image à la une, on passe
    if (!$page || has_post_thumbnail($page->ID)) continue;

    // Chemin complet du fichier image
    $path = $base_dir . $file;
    if (!file_exists($path)) continue; // si le fichier n’existe pas, on saute

    // On importe l’image dans la médiathèque et on récupère son ID
    $attachment_id = cheno_import_image_as_attachment($path, basename($path));
    if ($attachment_id && !is_wp_error($attachment_id)) {
      // On définit l’image comme image mise en avant de la page
      set_post_thumbnail($page->ID, $attachment_id);
    }
  }

  // On marque l’option comme faite pour ne pas rerun le script
  update_option('cheno_set_page_thumbs_done', 1);
});

/** ========================
 *  FONCTION UTILITAIRE : IMPORTER UN FICHIER LOCAL EN MÉDIA WP
 *  ======================== */
/**
 * @param string $file_path Chemin absolu vers le fichier sur le serveur (dans le thème enfant)
 * @param string|null $filename Nom du fichier dans la médiathèque 
 * @return int|WP_Error ID de l’attachement ou erreur
 */
function cheno_import_image_as_attachment($file_path, $filename = null) {
  // Détecte le type  du fichier
  $filetype = wp_check_filetype(basename($file_path), null);
  $filename = $filename ?: basename($file_path);

  // Infos sur le répertoire /uploads/ courant
  $upload_dir = wp_upload_dir();
  $new_path = trailingslashit($upload_dir['path']) . $filename;

  // Crée le dossier si nécessaire
  if (!file_exists($upload_dir['path'])) wp_mkdir_p($upload_dir['path']);

  // Copie le fichier depuis le thème vers le répertoire uploads
  if (!@copy($file_path, $new_path)) return new WP_Error('copy_failed');

  // Prépare les données de l’attachement
  $attachment = [
    'guid'           => trailingslashit($upload_dir['url']) . $filename,
    'post_mime_type' => $filetype['type'],
    'post_title'     => preg_replace('/\.[^.]+$/', '', $filename),
    'post_content'   => '',
    'post_status'    => 'inherit',
  ];

  // Crée l’attachement dans la base de données
  $attach_id = wp_insert_attachment($attachment, $new_path);

  // Génère les métadonnées
  require_once ABSPATH . 'wp-admin/includes/image.php';
  $attach_data = wp_generate_attachment_metadata($attach_id, $new_path);
  wp_update_attachment_metadata($attach_id, $attach_data);

  return $attach_id;
}

/** ========================
 *  ENQUEUE FRONT.JS (JS FRONT)
 *  ======================== */
add_action('wp_enqueue_scripts', function() {
    // On (re)charge le style du thème enfant
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // On charge le JS front principal du thème enfant
    wp_enqueue_script(
        'cheno-front',
        get_stylesheet_directory_uri() . '/assets/js/front.js',
        [],
        wp_get_theme()->get('Version'),
        true // charge en footer
    );
});

/** ========================
 *  HELPERS MULTILINGUES
 *  ======================== */

// Retourne l’URL de la home pour la langue courante 
function cheno_home_url($lang = null) {
  return function_exists('pll_home_url') ? pll_home_url($lang) : home_url('/');
}

// Retourne l’URL d’une page par slug traduite si Polylang est actif
function cheno_page_url($slug, $lang = null) {
  // URL brute (fallback)
  $url  = home_url('/' . trim($slug, '/') . '/');
  // On cherche la page par son slug
  $page = get_page_by_path($slug);
  if ($page) {
    // Si Polylang existe, on cherche la traduction
    if (function_exists('pll_get_post')) {
      $tr = $lang ? pll_get_post($page->ID, $lang) : pll_get_post($page->ID);
      if ($tr) return get_permalink($tr); // URL de la page traduite
    }
    // Sinon, URL de la page originale
    return get_permalink($page->ID);
  }
  return $url;
}

// Génère le switcher de langues avec tes classes CSS existantes
function cheno_lang_switcher() {
  if (!function_exists('pll_the_languages')) return;

  // Récupère les langues au format tableau
  $langs   = pll_the_languages(['raw'=>true, 'hide_if_empty'=>0]);
  if (!$langs) return;

  // Détermine la langue courante
  $current = array_values(array_filter($langs, fn($L)=>!empty($L['current_lang'])))[0] ?? reset($langs);

  echo '<div class="lang-switch" data-component="lang-switch">';
  echo '  <button class="lang-btn" aria-haspopup="true" aria-expanded="false" aria-controls="langMenu">';
  echo        $current['flag']; // drapeau de la langue active
  echo '    <svg viewBox="0 0 24 24" width="14" height="14" aria-hidden="true"><path fill="currentColor" d="M7 10l5 5 5-5z"/></svg>';
  echo '  </button>';
  echo '  <ul id="langMenu" class="lang-menu" role="menu">';
  foreach ($langs as $code => $L) {
    $cls = !empty($L['current_lang']) ? ' class="is-active"' : '';
    echo '    <li role="none"'.$cls.'>';
    echo '      <a role="menuitem" href="'.esc_url($L['url']).'" hreflang="'.esc_attr($code).'">';
    echo            $L['flag'].'<span>'.esc_html($L['name']).'</span>';
    echo '      </a>';
    echo '    </li>';
  }
  echo '  </ul>';
  echo '</div>';
}

/** ========================
 *  TEMPLATES SPÉCIAUX (HOME + À PROPOS)
 *  ======================== */

// Choisit automatiquement le bon template d’accueil selon la langue Polylang
add_filter('frontpage_template', function($template) {
    // Si Polylang est actif
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language('slug'); // ex: 'fr' ou 'en'

        // Si FR -> front-page-fr.php dans le thème enfant
        if ($lang === 'fr') {
            $fr_tpl = get_stylesheet_directory() . '/front-page-fr.php';
            if (file_exists($fr_tpl)) {
                return $fr_tpl;
            }
        }

        // Sinon EN  -> front-page.php
        $en_tpl = get_stylesheet_directory() . '/front-page.php';
        if (file_exists($en_tpl)) {
            return $en_tpl;
        }
    }

    // Fallback : laisse WordPress décider
    return $template;
});

// Choisit le bon template pour les pages "À propos" FR et EN
add_filter('template_include', function($template) {

    // Page FR "qui-sommes-nous" => utilise Apropos.php
    if (is_page('qui-sommes-nous')) {
        $fr_tpl = get_stylesheet_directory() . '/Apropos.php';
        if (file_exists($fr_tpl)) {
            return $fr_tpl;
        }
    }

    // Page EN "about-us" => utilise about.php
    if (is_page('about-us')) {
        $en_tpl = get_stylesheet_directory() . '/about.php';
        if (file_exists($en_tpl)) {
            return $en_tpl;
        }
    }
    // Page FR "qui-sommes-nous" => utilise Apropos.php
    if (is_page('agence-web-maroc')) {
        $fr_tpl = get_stylesheet_directory() . '/agence-web-maroc.php';
        if (file_exists($fr_tpl)) {
            return $fr_tpl;
        }
    }

     // Page FR "qui-sommes-nous" => utilise Apropos.php
    if (is_page('morocco-web-agency')) {
        $fr_tpl = get_stylesheet_directory() . '/morocco-web-agency.php';
        if (file_exists($fr_tpl)) {
            return $fr_tpl;
        }
    }
     if (is_page('agence-web-offshore')) {
        $fr_tpl = get_stylesheet_directory() . '/agence-web-offshore.php';
        if (file_exists($fr_tpl)) {
            return $fr_tpl;
        }
    }
    
    return $template;
});

/** ========================
 *  SEED AUTOMATIQUE DES WORKS
 *  ======================== */
/*
 * Ce script crée automatiquement quelques entrées de type "work"
 * avec leurs tags + image à la une à partir des fichiers dans /assets/img/.
 * Il ne s’exécute qu’une seule fois grâce à l’option cheno_seed_works_done.
 */
add_action('admin_init', function () {
  // ne pas exécuter deux fois
  if (get_option('cheno_seed_works_done')) return;

  // Langue par défaut pour les Works (Polylang)
  $lang = 'fr';
  if (function_exists('pll_default_language')) {
    $lang = pll_default_language('slug') ?: 'fr';
  }

  // 1) Créer les tags s'ils n'existent pas et les associer à la langue par défaut
  $tag_names = ['Branding','UI/UX Design','Strategy','Building','Logo'];
  foreach ($tag_names as $t) {
    $term = term_exists($t, 'work_tag');
    if (!$term) {
      $term = wp_insert_term($t, 'work_tag');
    }
    if (!is_wp_error($term) && function_exists('pll_set_term_language')) {
      $term_id = is_array($term) ? (int)$term['term_id'] : (int)$term['term_id'];
      pll_set_term_language($term_id, $lang);
    }
  }

  // 2) Définition des projets à injecter
  $seed = [
    [
      'title'   => 'Elegant Morocco',
      'slug'    => 'elegant morocco',
      'image'   => 'elegant-morocco.png',
      'tags'    => ['Branding','UI/UX Design','Strategy','Building'],
      'order'   => 1,
      'excerpt' => 'Branding & UI/UX pour Elegant Morocco.',
      'content' => 'Présentation du projet Elegant Morocco…',
    ],
    [
      'title'   => 'Opaleon',
      'slug'    => 'opaleon',
      'image'   => 'opaleon.png',
      'tags'    => ['UI/UX Design','Building','Logo'],
      'order'   => 2,
      'excerpt' => 'Design produit et identité pour Opaleon.',
      'content' => 'Présentation du projet Opaleon…',
    ],
    [
      'title'   => 'Pinarello App',
      'slug'    => 'pinarello-app',
      'image'   => 'our-expertises.png',
      'tags'    => ['UI/UX Design','Building'],
      'order'   => 3,
      'excerpt' => 'Application mobile Pinarello.',
      'content' => 'Présentation du projet Pinarello…',
    ],
    [
      'title'   => 'Cadenza',
      'slug'    => 'cadenza',
      'image'   => 'cadenza.png',
      'tags'    => ['UI/UX Design','Strategy','Logo'],
      'order'   => 4,
      'excerpt' => 'Refonte UX/UI pour Cadenza.',
      'content' => 'Présentation du projet Cadenza…',
    ],
  ];

  // Répertoire des images utilisées pour les Works
  $base_dir = trailingslashit(get_stylesheet_directory() . '/assets/img');

  foreach ($seed as $item) {
    // Vérifie si un Work avec ce slug existe déjà
    $existing = get_page_by_path($item['slug'], OBJECT, 'work');

    if ($existing && !is_wp_error($existing)) {
      // Si oui : mettre à jour l’ordre + les tags
      wp_update_post([
        'ID'         => $existing->ID,
        'menu_order' => (int)$item['order']
      ]);

      if (!empty($item['tags'])) {
        wp_set_object_terms($existing->ID, $item['tags'], 'work_tag', false);
      }

      // S’assurer que la langue Polylang est bien posée
      if (function_exists('pll_set_post_language') && !pll_get_post_language($existing->ID)) {
        pll_set_post_language($existing->ID, $lang);
      }
      continue; // passer au suivant
    }

    // Si le Work n’existe pas : création
    $post_id = wp_insert_post([
      'post_type'    => 'work',
      'post_status'  => 'publish',
      'post_title'   => $item['title'],
      'post_name'    => $item['slug'],
      'post_excerpt' => $item['excerpt'] ?? '',
      'post_content' => $item['content'] ?? '',
      'menu_order'   => (int)$item['order'],
    ]);
    if (is_wp_error($post_id) || !$post_id) continue;

    // Assigner la langue Polylang au Work créé
    if (function_exists('pll_set_post_language')) {
      pll_set_post_language($post_id, $lang);
    }

    // Poser les tags
    if (!empty($item['tags'])) {
      wp_set_object_terms($post_id, $item['tags'], 'work_tag', false);
    }

    // Image à la une depuis /assets/img/
    $path = $base_dir . $item['image'];
    if (file_exists($path)) {
      $att_id = cheno_import_image_as_attachment($path, basename($path));
      if (!is_wp_error($att_id) && $att_id) {
        set_post_thumbnail($post_id, $att_id);
      }
    }
  }

  // On marque comme fait pour ne plus reseeder
  update_option('cheno_seed_works_done', 1);
});
