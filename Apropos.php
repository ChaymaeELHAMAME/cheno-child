<?php
/**
 * Template Name: About (Cheno)
 * Description: Page à propos personnalisée du thème Cheno-child
 */
get_header();
?>

<main id="about">
 <!-- ===================== SECTION HERO ===================== -->
<section class="hero hero--dark">
  
  <!-- Conteneur principal centré -->
  <div class="container hero__inner">

    <!-- ===================== TITRE PRINCIPAL ===================== -->
    <!-- 
      h2 = Titre de la section principale
      - <span class="accent"> : met en couleur le mot Dominate
      - <span class="brand-highlight"> : met en avant le nom de la marque "CHENOCOM"
    -->
    <h2 class="hero-title">
      <span class="accent">Dominate </span> every<br>
      challenge with <br>
      <span class="brand-highlight">CHENOCOM</span>
    </h2>

    <!-- ===================== SOUS-TEXTE ===================== -->
    <!-- 
      p = petit texte explicatif sous le titre
      - Il présente l’entreprise et contient un lien d’appel à l’action.
      - <a> utilise une fonction PHP pour générer le lien de la page "contact".
    -->
    <p class="hero-sub">
      Votre partenaire digital basé à Rabat
      <a class="inline-cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
        Get in touch ↗
      </a>
    </p>

    <!-- ===================== BADGES ANIMÉS ===================== -->
    <!-- 
      ul = liste non ordonnée contenant les badges (bulle flottantes décoratives)
      aria-hidden="true" : pour ignorer ces éléments par les lecteurs d’écran
    -->
    <ul class="hero-badges" aria-hidden="true">

      <!-- Chaque <li> représente une bulle flottante -->
      <!-- 
        Les variables CSS (--x, --y, --delay, --amp) contrôlent :
        - --x : position horizontale (%)
        - --y : position verticale (%)
        - --delay : délai avant l’animation
        - --amp : amplitude du mouvement
      -->
      <li class="badge badge--seo"
          style="--x:18%; --y:16%; --delay:0s; --amp:12px;">
          SEO Team
      </li>

      <li class="badge badge--design"
          style="--x:82%; --y:18%; --delay:.2s; --amp:14px;">
          Design Team
      </li>

      <li class="badge badge--devops"
          style="--x:12%; --y:68%; --delay:.4s; --amp:10px;">
          DevOps Team
      </li>

      <li class="badge badge--dev"
          style="--x:90%; --y:70%; --delay:1s; --amp:16px;">
          Developers
      </li>

    </ul>

  </div>

</section>
<!-- ===================== FIN SECTION HERO ===================== -->
 
 <!-- ===================== SECTION LOGO MARQUEE ===================== -->
<!-- 
  Cette section affiche une bande horizontale de logos partenaires 
  qui défilent en continu. C’est souvent utilisée pour montrer la 
  crédibilité ou les clients importants d’une entreprise.
-->
<section class="logo-marquee">

  <!-- ===================== TEXTE D’INTRODUCTION ===================== -->
  <!-- 
    <p> : paragraphe affichant un court texte d’introduction avant les logos.
    - La classe "logo-marquee__lead" permet de styliser ce texte (couleur, taille, alignement).
  -->
  <p class="logo-marquee__lead">
    Top 50 firms trust Chenocom to improve efficiency, revenue, and client experiences.
  </p>

  <!-- ===================== CONTENEUR DU DÉFILEMENT ===================== -->
  <!-- 
    <div class="logo-track"> : c’est la piste sur laquelle les logos défilent horizontalement.
    - Son contenu est plus large que l’écran pour permettre un défilement fluide.
  -->
  <div class="logo-track">

    <!-- ===================== PREMIÈRE SÉRIE DE LOGOS ===================== -->
    <!-- 
      Chaque balise <img> représente un logo.
      - "src" : chemin de l’image. 
      - "get_stylesheet_directory_uri()" : fonction PHP WordPress qui donne le chemin du thème enfant.
      - "alt" : description du logo pour l’accessibilité et le SEO.
    -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

    <!-- ===================== DOUBLON POUR DÉFILEMENT INFINI ===================== -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

  </div>
</section>
<!-- ===================== FIN SECTION LOGO MARQUEE ===================== -->

  <?php
// ===================== TABLEAU DES STATISTIQUES =====================
// Ce tableau contient les chiffres affichés dans la colonne de droite de la section.
// Chaque élément du tableau représente une statistique avec :
// - 'value' : la valeur numérique
// - 'label' : la description correspondante
$about_stats = [
  [
    'value' => '62+',
    'label' => 'Finalized projects',
  ],
  [
    'value' => '94%',
    'label' => 'Conversion rate improvement',
  ],
  [
    'value' => '11+',
    'label' => 'Years of experience',
  ],
];
?>

<!-- ===================== SECTION ABOUT ===================== -->
<!-- 
  Cette section présente l’agence Chenocom :
  - Introduction visuelle et textuelle 
  - Détails sur les services et la philosophie
  - Statistiques clés 
-->
<section class="about-section">
  <div class="container"><!-- Conteneur central pour limiter la largeur -->

    <!-- Petit élément visuel d’introduction ("chip") -->
    <span class="hero-chip">▸ About Chenocom</span>

    <!-- En-tête de la section : titre principal -->
    <div class="testi__head">
      <h2 class="testi__title">
        <!-- Le mot "Agence" est mis en valeur par une couleur accentuée -->
        Our <span class="accent">Agence</span>Chenocom
      </h2>
    </div>

    <!-- ===================== GRILLE PRINCIPALE ===================== -->
    <!-- 
      Cette grille divise la section en deux colonnes principales :
      - Gauche : image + petit texte
      - Centre : titre, texte long, images et statistiques
    -->
    <div class="container about-section__grid">

      <!-- ===================== COLONNE GAUCHE ===================== -->
      <!-- Contient une image représentative et un court texte descriptif -->
      <div class="about-section__col about-section__col--left">

        <!-- Image principale dans une balise <figure> -->
        <figure class="about-section__figure">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Contemporary_Mature_Engineer_In..._original_438166 1.png' ); ?>"
            alt="Chenocom team" 
          >
        </figure>

        <!-- Court texte latéral, décrivant la portée géographique de Chenocom -->
        <p class="about-section__side-text">
          Implantés au Maroc, nous intervenons tant en local qu'à l'international (offshore)
          avec un haut niveau d'exigence, de réactivité et d'implication.
        </p>
      </div>
      <!-- Fin colonne gauche -->

      <!-- ===================== COLONNE CENTRALE ===================== -->
      <!-- Contient les textes détaillés, les images et les statistiques -->
      <div class="about-section__col about-section__col--center">

        <!-- Sous-titre principal décrivant la mission de l’agence -->
        <h2 class="about-section__title">
          Inspiring innovation and driving growth through<br>
          customized business solutions
        </h2>

        <!-- Paragraphe principal : présentation détaillée de Chenocom -->
        <p class="about-section__text">
          Depuis 2017, <strong>Chenocom</strong> s'impose comme un partenaire fiable dans le domaine du digital.
          Nous accompagnons les entreprises, agences et marques dans la
          <strong>création de sites web performants</strong> et le
          <strong>développement d’applications mobiles sur mesure</strong>,
          en appliquant rigoureusement les <strong>bonnes pratiques du web</strong> et en plaçant
          l’<strong>expérience utilisateur</strong> au cœur de chaque projet.
        </p>

        <!-- Ligne horizontale pour séparer visuellement les contenus -->
        <hr class="about-section__divider">

        <!-- ===================== BAS DE LA SECTION ===================== -->
        <!-- Contient une deuxième image + la liste des statistiques -->
        <div class="about-section__bottom">

          <!-- Image large illustrant l’équipe ou l’activité -->
          <figure class="about-section__figure about-section__figure--wide">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Frame 1618873255.png' ); ?>"
              alt="Team at work"
            >
          </figure>

          <!-- Liste dynamique des statistiques -->
          <ul class="about-stats">
            <?php
            // Boucle PHP : parcourt le tableau $about_stats défini plus haut
            // et génère automatiquement un <li> pour chaque statistique.
            foreach ( $about_stats as $stat ) : ?>
              <li class="about-stats__item">
                <!-- Valeur numérique  -->
                <span class="about-stats__value">
                  <?php echo esc_html( $stat['value'] ); ?>
                </span>

                <!-- Libellé de la statistique -->
                <span class="about-stats__label">
                  <?php echo esc_html( $stat['label'] ); ?>
                </span>
              </li>
            <?php endforeach; ?>
          </ul>
          <!-- Fin de la liste des statistiques -->

        </div>

      </div>
    </div>
  </div>
  <!-- Fin du conteneur -->

</section>
<!-- ===================== FIN SECTION ABOUT ===================== -->

<!-- ===================== SECTION MÉGA SLOGAN ===================== -->
<!-- 
  Cette section met en avant un slogan impactant de l’agence,
  souvent affiché en grand avec un effet visuel 
-->
<section class="mega-slogan" aria-label="Slogan">

  <!-- ===================== CONTENEUR DU TEXTE DÉFILANT ===================== -->
  <div class="mega-slogan__scroller" id="sloganScroller">
    <!-- 
      <div> : conteneur qui peut être animé :effet de "scrolling" automatique.
      - L’attribut id="sloganScroller" permet de le cibler avec du JavaScript .
    -->

    <!-- ===================== LIGNE DU SLOGAN ===================== -->
    <h2 class="mega-slogan__line">
    
      <span class="mega-stroke">IN CREATIVITY</span>
      <span class="mega-fill">CHENOCOM</span>
    </h2>
  </div>
</section>
<!-- ===================== FIN SECTION MÉGA SLOGAN ===================== -->

  <!-- ===================== SECTION HERO ===================== -->
<!-- 
  Cette section représente une bannière d’introduction
  utilisée ici pour introduire la partie "Valeurs" du site Chenocom.
  Elle contient un titre principal et deux badges animés décoratifs.
-->
<section class="hero hero--dark">
  <!-- ===================== CONTENEUR PRINCIPAL ===================== -->
  <div class="container hero__inner">
    <!-- 
      <div> : conteneur servant à centrer le contenu et à limiter la largeur.
      - "container" gère la mise en page globale (centrage, marges).
      - "hero__inner" regroupe tous les éléments internes du hero (titre + badges).
    -->

    <!-- ===================== TITRE PRINCIPAL ===================== -->
    <h2 class="hero-title">
     
      Cela commence par<br>
      nos <span class="accent">valeurs.</span>
    </h2>

    <!-- ===================== BADGES ANIMÉS ===================== -->
    <!-- 
      <ul> : liste non ordonnée regroupant plusieurs badges décoratifs.
    -->
    <ul class="hero-badges" aria-hidden="true">

      <!-- ===================== BADGE 1 ===================== -->
      <!-- 
        <li> : chaque élément représente un badge flottant dans la section.
        - "badge--seo" : variation de style .
        - Les variables CSS contrôlent :
            --x : position horizontale du badge en pourcentage.
            --y : position verticale du badge.
            --delay : délai avant le début de l’animation.
            --amp : amplitude du mouvement (effet flottant).
      -->
      <li class="badge badge--seo"
          style="--x:26%; --y:68%; --delay:0s; --amp:10px;">
        Creativity
      </li>

      <!-- ===================== BADGE 2 ===================== -->
      <!-- 
        Ce badge apparaît en haut à droite.
      -->
      <li class="badge badge--design"
          style="--x:82%; --y:22%; --delay:.2s; --amp:12px;">
        Nos valeurs
      </li>
    </ul>
  </div>

</section>
<!-- ===================== FIN SECTION HERO ===================== -->

<?php
// ===================== TABLEAU DES VALEURS =====================
// Ce tableau (contient toutes les "valeurs" de l’agence Chenocom.
// Chaque valeur est un petit bloc (une carte) avec :
// - un titre ,un texte,icône

$cheno_values = [
  [
    'title' => 'Créativité',
    'text'  => "Chaque projet commence par une idée. Nous mettons l’imagination et l’innovation au service de solutions digitales uniques, percutantes et adaptées à chaque client.",
    'icon'  => 'idea-01-solid-standard 1.png',
  ],
  [
    'title' => 'Honnêteté',
    'text'  => "La transparence et la sincérité sont au cœur de notre relation avec nos clients et nos collaborateurs. Pas de promesses irréalistes, juste des engagements tenus.",
    'icon'  => 'Vector (2).png',
  ],
  [
    'title' => 'Excellence',
    'text'  => "Nous visons l’excellence à chaque étape : dans le code, dans le design, dans la gestion de projet, et dans la satisfaction client.",
    'icon'  => 'laptop-performance-solid-rounded 1.png',
  ],
  [
    'title' => 'Neutralité technologique',
    'text'  => "Nous choisissons les technologies les plus adaptées à vos besoins réels, sans biais ni dépendance à un outil. L’objectivité guide nos recommandations.",
    'icon'  => 'nano-technology-solid-sharp 1.png',
  ],
  [
    'title' => 'Ouverture',
    'text'  => "Ouverts aux nouvelles idées, aux feedbacks, aux évolutions technologiques : nous avançons dans un esprit d’apprentissage et de remise en question constructive.",
    'icon'  => 'mail-open-02-solid-rounded 1.png',
  ],
  [
    'title' => 'Collaboration',
    'text'  => "Nous croyons à la force du collectif. En interne comme avec nos clients, la co-création est au centre de notre méthodologie.",
    'icon'  => 'flow-connection-solid-sharp 1.png',
  ],
  [
    'title' => 'Optimisation',
    'text'  => "Nos projets ne sont pas que beaux : ils sont performants. Nous travaillons chaque détail pour améliorer le temps de chargement, le référencement, l’ergonomie et les conversions.",
    'icon'  => 'dashboard-speed-01-solid-rounded 1.png',
  ],
  [
    'title' => 'Motivation',
    'text'  => "Notre passion du digital nous pousse à nous dépasser chaque jour. Chaque défi devient une opportunité de progresser et de créer de la valeur.",
    'icon'  => 'zap-solid-rounded 2.png',
  ],
];
?>

<!-- ===================== SECTION DES VALEURS ===================== -->
<section class="values" id="valeurs">
  <div class="container">

    <!-- VUE SLIDER : .values__grid devient la piste -->
    <div class="values__grid">
      <?php foreach ( $cheno_values as $value ) : ?>
        <article class="value-card">
          <div class="value-card__icon">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/' . $value['icon'] ); ?>"
              alt="<?php echo esc_attr( $value['title'] ); ?>"
              loading="lazy"
            >
          </div>

          <h3 class="value-card__title">
            <?php echo esc_html( $value['title'] ); ?>
          </h3>

          <p class="value-card__text">
            <?php echo esc_html( $value['text'] ); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Petits points du slider -->
    <div class="values-dots" aria-hidden="true">
      <?php foreach ( $cheno_values as $i => $value ) : ?>
        <button
          type="button"
          class="dot <?php echo $i === 0 ? 'is-active' : ''; ?>">
        </button>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ===================== FIN SECTION DES VALEURS ===================== -->

<!-- ===================== SECTION "BEST" ===================== -->
<!-- 
  Cette section met en avant la promesse principale de Chenocom 
-->
<section class="best-section">
  <!-- ===================== CONTENEUR PRINCIPAL ===================== -->
  <div class="container best-grid">
    <!-- ===================== COLONNE GAUCHE ===================== -->
    <!-- Contient une image -->
    <figure class="best-media">
      <img 
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Logo-Mockup1.png' ); ?>"
        alt="Chenocom believe in creativity">
      <!-- 
        - esc_url() : sécurise l’URL du fichier.
      -->
    </figure>

    <!-- ===================== COLONNE DROITE ===================== -->
    <div class="best-content">
      <!-- 
        conteneur du contenu textuel à droite de l’image.
      -->
      <!-- ======= TITRE PRINCIPAL ======= -->
      <h2 class="best-title">
        Nous ne sommes pas les seuls…<br>
        mais nous sommes <span class="accent">les meilleurs!</span>
      </h2>
      <!-- ======= PARAGRAPHE D’INTRODUCTION ======= -->
      <p class="best-lead">
        Vous cherchez à accroître votre visibilité en ligne, à lancer un nouveau produit digital,
        ou à améliorer vos performances marketing ? 
        <strong>Chenocom</strong> vous aide à concrétiser vos idées à travers des
        solutions numériques sur mesure, évolutives et orientées résultats.
      </p>

      <!-- ======= SOUS-BLOC D’INTRODUCTION ======= -->
      <div class="best-intro-row">

        <p class="best-intro">Notre processus inclut :</p>
        <a href="#valeurs" class="best-badge">▸ Nos valeurs</a>
      </div>

      <!-- ======= LISTE DES POINTS CLÉS ======= -->
      <ul class="best-list">
        <li>L’analyse rapide et précise de vos besoins</li>
        <li>La conception de solutions adaptées à votre activité</li>
        <li>Une exécution rigoureuse, suivie et mesurable</li>
        <!-- 
          <li> : chaque élément décrit une étape ou une force du processus.
        -->
      </ul>

      <!-- ======= NOTE FINALE ======= -->
      <p class="best-note">
        Nous travaillons avec des PME, des startups et des grandes marques. 
        Notre priorité : vous faire gagner du temps, sécuriser vos choix technologiques, 
        et contribuer à votre réussite.
      </p>
      <!-- ======= APPEL À L’ACTION (CTA) ======= -->
      <div class="best-actions">
        <!-- 
          Ce bloc contient un lien vers la section "contact" de la page.
        -->
        <a href="#contact" class="best-link">
          Contactez-nous 
          <span class="best-link__arrow">↗</span>
        </a>
      </div>

    </div>

  </div>
</section>
<!-- ===================== FIN SECTION "BEST" ===================== -->

<!-- ===================== SECTION ENGINE ===================== -->
<!-- 
  Cette section présente le moteur”de Chenocom — c’est-à-dire
  ce qui pousse l’agence à innover, créer et grandir.
  Elle combine un badge, un titre fort et un paragraphe inspirant.
-->
<section class="engine">
  <!-- ===================== CONTENEUR PRINCIPAL ===================== -->
  <div class="container">
    <!-- ===================== BADGE / CHIP ===================== -->
    <div class="engine__chip-wrap">
     
      <span class="engine__chip">Our Technologies</span>

    </div>

    <!-- ===================== GRILLE DE CONTENU ===================== -->
    <div class="engine__grid">
      <!-- 
        Ce conteneur organise le contenu en deux colonnes :
        - à gauche : le titre principal
        - à droite : le texte descriptif
      -->
      <!-- ======= COLONNE GAUCHE : TITRE ======= -->
      <div>
        <h2 class="engine__title">
          <span class="accent">Grandir</span>, innover,<br>
          inspirer – Notre moteur
        </h2>
      </div>

      <!-- ======= COLONNE DROITE : TEXTE ======= -->
      <div>
        <!-- 
          Deuxième colonne de la grille, dédiée au texte descriptif.
          Ce texte complète le titre en expliquant la philosophie de Chenocom.
        -->
        <p class="engine__text">
          La passion de dépasser les attentes, l’audace de repousser les limites,
          et la joie de voir vos projets réussir. Parce que chaque défi est une
          nouvelle raison de nous lever avec ambition.
        </p>
      </div>

    </div>


  </div>

</section>
<!-- ===================== FIN SECTION ENGINE ===================== -->


<!-- ===================== SECTION VALUES STACK ===================== -->
<!-- 
  Cette section met en avant les valeurs clés de l’entreprise Chenocom 
-->
<section class="values-stack" id="valeurs">
  <div class="container">

    <!-- 1) Une équipe soudée et passionnée -->
    <article class="value-item">
      <div class="value-icon" aria-hidden="true">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/user-group-stroke-standard-1.png' ); ?>"
          alt=""
        >
      </div>

      <div>
        <h3 class="value-title">Une équipe soudée et passionnée</h3>
        <p class="value-text">
          Nous visons l’excellence à chaque étape : dans le code, dans le design,
          dans la gestion de projet, et dans la satisfaction client.
          Notre exigence garantit des résultats concrets.
        </p>
      </div>
    </article>

    <!-- 2) Une veille technologique permanente -->
    <article class="value-item">
      <div class="value-icon" aria-hidden="true">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/nano-technology-stroke-rounded-1.png' ); ?>"
          alt=""
        >
      </div>

      <div>
        <h3 class="value-title">Une veille technologique permanente</h3>
        <p class="value-text">
          Nous restons à la pointe des innovations pour vous proposer des solutions modernes,
          fiables et durables.
        </p>
      </div>
    </article>

    <!-- 3) Une collaboration fondée sur la passion -->
    <article class="value-item">
      <div class="value-icon" aria-hidden="true">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/flow-connection-stroke-rounded-1.png' ); ?>"
          alt=""
        >
      </div>

      <div>
        <h3 class="value-title">Une collaboration fondée sur la passion</h3>
        <p class="value-text">
          Un projet réussi commence par une vision partagée.
          Avant toute collaboration, nous nous assurons que l’envie est mutuelle :
          vous choisir, c’est aussi vous comprendre.
        </p>
      </div>
    </article>

  </div>
</section>

<!-- ===================== FIN SECTION VALUES STACK ===================== -->
 
<!-- ===================== SECTION CTA (CALL TO ACTION) ===================== -->
<!-- 
  Cette section est une invitation à passer à l’action.
  Elle incite le visiteur à contacter l’agence Chenocom pour collaborer.
-->
<section class="cta">
  <div class="container">
    <p class="cta-text">  
      <a href="#contact" class="cta-btn">Let’s work together</a>     
    </p>
  </div>

</section>

<!-- ===================== FIN SECTION CTA ===================== -->
</main>

<?php get_footer(); ?>
