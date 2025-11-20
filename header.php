<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Encodage du site défini par WordPress -->
  <meta charset="<?php bloginfo('charset'); ?>"> 
  <!-- Responsive sur mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <!-- scripts injectés par WP et les plugins -->
  <?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>
<!-- Ajoute automatiquement des classes selon le contexte -->
<body <?php body_class(); ?>>
  <!-- Hook moderne juste après <body> -->
<?php if ( function_exists('wp_body_open') ) { wp_body_open(); } ?> 

<header class="site-header" role="banner">
  <!-- Barre horizontale : logo + menu + actions -->
  <div class="container header-bar"> 
    
     <!-- Lien du logo vers la page d’accueil (gérée par Polylang) -->
    <a class="logo" href="<?php echo esc_url( cheno_home_url() ); ?>"> 
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Logo.png' ); ?>" 
        alt="<?php esc_attr_e('Chenocom','cheno'); ?>" 
        width="140" height="32" loading="eager"> <!-- Dimensions du logo + chargement prioritaire -->
    </a>

    <!-- Bouton hamburger (mobile) -->
    <button class="hamburger" aria-label="Open menu" aria-controls="mobileMenu" aria-expanded="false">
      <!-- Les 3 <span> servent à dessiner les 3 barres du hamburger en CSS -->
      <span></span><span></span><span></span>
    </button>

    <!-- Menu desktop (centré) -->
    <nav class="main-nav" aria-label="<?php esc_attr_e('Menu principal','cheno'); ?>"> <!-- Navigation principale pour les écrans desktop -->
      <?php
      // on prépare les arguments du menu
      $menu_args = [
        'theme_location' => 'primary',   // Emplacement de menu déclaré dans functions.php
        'container'      => false,       // Pas de <div> supplémentaire autour du <ul>
        'menu_class'     => 'nav-menu',  // Classe CSS appliquée au <ul>
        'fallback_cb'    => false,       // Ne pas afficher de menu par défaut si non assigné
        'depth'          => 3,           // Profondeur maximum (pour sous-menus)
      ];

      // on branche le méga-walker UNIQUEMENT si la classe existe
      if ( class_exists( 'Cheno_Mega_Walker' ) ) {
        $menu_args['walker'] = new Cheno_Mega_Walker(); // Active le méga-menu sur l’item “Expertises”
      }

      wp_nav_menu( $menu_args ); // Affiche le menu WordPress
      ?>
    </nav>

    <!-- switcher de langue + bouton Contact -->
    <div class="header-right">

      <?php if ( function_exists( 'pll_the_languages' ) ) : ?> <!-- Vérifie que Polylang est actif -->
        <?php
          // récupère les langues Polylang au format “raw”
          $langs = pll_the_languages( [
            'raw'           => 1,  // Retourne un tableau PHP au lieu du HTML
            'hide_if_empty' => 0,  // Affiche même si une seule langue
          ] );

          // langue courante 
          $current = null;
          foreach ( $langs as $slug => $data ) {
            if ( ! empty( $data['current_lang'] ) ) { // Cherche l’entrée marquée comme langue actuelle
              $current = $slug;
              break;
            }
          }

          // image du drapeau pour le bouton (langue courante)
          $current_flag = ( $current === 'fr' )
            ? get_stylesheet_directory_uri() . '/assets/img/Flags (1).png' 
            : get_stylesheet_directory_uri() . '/assets/img/Flags.png';    
        ?>

        <!-- Switcher de langue en version desktop -->
        <div class="lang-switch">
          <button class="lang-btn" type="button" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo esc_url( $current_flag ); ?>" alt="" width="24" height="16"> <!-- Drapeau de la langue active -->
            <span>▾</span> 
          </button>

          <ul class="lang-menu"> <!-- Liste des langues disponibles -->
            <?php foreach ( $langs as $slug => $data ) : 
              // drapeau pour chaque langue
              $flag_src = ( $slug === 'fr' )
                ? get_stylesheet_directory_uri() . '/assets/img/Flags (1).png'
                : get_stylesheet_directory_uri() . '/assets/img/Flags.png';
            ?>
              <li>
                <a href="<?php echo esc_url( $data['url'] ); ?>"> <!-- URL de la version traduite de la page courante -->
                  <img src="<?php echo esc_url( $flag_src ); ?>" alt="<?php echo esc_attr( $data['name'] ); ?>" width="28" height="18">
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php
        // Texte du bouton "Contact" traduit 
        if ( function_exists('pll__') ) {
          $contact_label = pll__( 'Contact Us' );
        } else {
          $contact_label = __( 'Contact Us', 'cheno' );
        }
        // URL de la page contact (FR/EN) via helper cheno_page_url()
        $contact_url = cheno_page_url('contact');
      ?>
      <!-- Bouton CTA “Contact” -->
      <a class="btn-yellow" href="<?php echo esc_url( $contact_url ); ?>">
        <?php echo esc_html( $contact_label ); ?>
        <!-- Petite flèche icône à droite du texte -->
        <svg viewBox="0 0 24 24" width="16" height="16" style="margin-left:6px;">
          <path fill="currentColor" d="M2 21l20-9L2 3v7l15 2-15 2z"/>
        </svg>
      </a>
    </div>
  </div>

  <!-- ================= Panneau mobile (off-canvas) ================= -->
   <!-- Menu latéral masqué par défaut, piloté en JS -->
  <div id="mobileMenu" class="mobile-menu" hidden> 
    <!-- Overlay cliquable pour fermer le menu -->
    <div class="mobile-menu__overlay" data-close></div> 
    <!-- Panneau contenant le menu mobile -->
    <nav class="mobile-menu__panel" aria-label="<?php esc_attr_e('Mobile','cheno'); ?>"> 

      <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
        <?php
          // langues Polylang pour le menu mobile
          $mobile_langs = pll_the_languages( [
            'raw'           => 1,
            'hide_if_empty' => 0,
          ] );
        ?>
        <?php if ( ! empty( $mobile_langs ) ) : ?>
          <!-- Switcher de langue version mobile -->
          <ul class="mobile-lang">
            <?php foreach ( $mobile_langs as $slug => $data ) : 
              // choix du bon drapeau selon le code langue
              $flag_src = ( $slug === 'fr' )
                ? get_stylesheet_directory_uri() . '/assets/img/Flags (1).png'
                : get_stylesheet_directory_uri() . '/assets/img/Flags.png';
            ?>
            <!-- Ajoute une classe sur la langue active -->
              <li class="<?php echo !empty( $data['current_lang'] ) ? 'is-current' : ''; ?>"> 
                <a href="<?php echo esc_url( $data['url'] ); ?>">
                  <img src="<?php echo esc_url( $flag_src ); ?>"
                       alt="<?php echo esc_attr( $data['name'] ); ?>"
                       width="28" height="18">
                  <!-- Nom de la langue  -->
                  <span><?php echo esc_html( $data['name'] ); ?></span> 
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php endif; ?>

      <?php
      // menu mobile SANS méga-menu (affichage simple empilé)
      wp_nav_menu([
        'theme_location' => 'primary',   // même menu que sur desktop
        'container'      => false,
        'menu_class'     => 'mobile-nav', // classes spécifiques au style mobile
        'fallback_cb'    => false,
        'depth'          => 2,           // profondeur limitée pour garder un mobile simple
      ]);
      ?>
      <!-- Séparateur visuel dans le panneau mobile -->
      <hr class="mobile-sep"> 

      <div class="mobile-tools"> <!-- Zone CTA en bas du menu mobile -->
        <a class="btn-yellow btn-block" href="<?php echo esc_url( $contact_url ); ?>">
          <?php echo esc_html( $contact_label ); ?>
        </a>
      </div>
    </nav>
  </div>

</header>
