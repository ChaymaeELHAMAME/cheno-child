<?php
/**
 * Agence Web Offshore
 */
get_header();
?>

<main>
<section class="hero hero--dark">
  <div class="container hero__inner">
    <h2 class="hero-title">
      <span class="accent">Agence Web  </span>Offshore <br>
      basée au Maroc– Une  <br>équipe dédiée, des<br>résultats garantis
      
    </h2>
    <p class="hero-sub">
      Votre partenaire digital basé à Rabat
      <a class="inline-cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
        Get in touch ↗
      </a>
    </p>
    <ul class="hero-badges" aria-hidden="true">

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
<section class="team-section" id="team">
  <div class="container team-section__inner">

    <!-- Badge qui saute -->
    <span class="team-tag">The Team</span>

    <!-- H2 (comme le commentaire Figma) -->
    <h2 class="team-title">
      <span class="team-title__accent">Une équipe</span> passionnée, des compétences<br>
      complémentaires
    </h2>

    <!-- Image + texte -->
    <div class="team-grid">

      <!-- Colonne image -->
      <figure class="team-media">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/People_Working_In_Business_Hall_original_2281029 1.png' ); ?>"
          alt="L’équipe Chenocom en train de travailler"
          loading="lazy"
        >
      </figure>

      <!-- Colonne texte -->
      <div class="team-content">
        <p class="team-intro">
          Notre force repose sur une équipe pluridisciplinaire de professionnels du web&nbsp;:
        </p>

        <ul class="team-list">
          <li><strong>Web designers</strong> créatifs pour une identité visuelle forte.</li>
          <li><strong>Intégrateurs HTML/CSS</strong> pour des interfaces modernes et responsives.</li>
          <li><strong>Développeurs web et mobile</strong> experts en PHP, WordPress, Drupal, iOS, Android.</li>
          <li><strong>Consultants en marketing digital</strong> pour générer trafic, visibilité et conversion.</li>
        </ul>

        <p class="team-outro">
          Chaque projet passe entre les mains de spécialistes dédiés à chaque phase,
          garantissant un <strong>niveau élevé de qualité</strong> et une <strong>exécution rigoureuse</strong>.
        </p>
      </div>

    </div><!-- /.team-grid -->

  </div>
</section>
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

</main>

<?php get_footer(); ?>
