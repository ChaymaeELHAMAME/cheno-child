<?php
/**
 * Template Name: Agence Web Maroc
 */
get_header();
?>

<main>
   <section class="hero hero--dark">
  <div class="container hero__inner">
    <h2 class="hero-title">
      <span class="accent">Agence  </span> Web au<br>
      Maroc – Création de <br>sites web et<br>d'applications mobiles
      
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
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Developers_Working.png' ); ?>"
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
<section class="kpis-band" aria-label="Indicateurs clés">
    <div class="container">
      <ul class="kpis-grid">
        <li class="kpi-item">
          <span class="kpi-value" data-target="62" data-suffix="+">62+</span>
          <span class="kpi-label">Projets finalisés</span>
        </li>

        <li class="kpi-item">
          <span class="kpi-value" data-target="94" data-suffix="%">94%</span>
          <span class="kpi-label">Amélioration du taux de conversion</span>
        </li>

        <li class="kpi-item">
          <span class="kpi-value" data-target="11" data-suffix="+">11+</span>
          <span class="kpi-label">Années d’expérience</span>
        </li>
      </ul>
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
<!-- ===== Parcours 100% digital ===== -->
<section class="process">
  <div class="container process__grid">

    <!-- Colonne gauche -->
    <div class="process__left">
      <h2 class="process__title">
        <span class="accent">Un parcours</span> 100%<br>
        digital, 0%<br>
        headache
      </h2>

      <!-- Badge qui flotte sous le titre -->
      <span class="process-badge process-badge--top">
        ▸ Web application
      </span>

      <p class="process__text">
        Votre accès illimité à la création digitale :
        conception, développement, lancement et scaling – tout dans une seule solution intégrée.
      </p>

      <a class="process__cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
        Contactez-nous ↗
      </a>

      <!-- Badge qui flotte près du CTA -->
      <span class="process-badge process-badge--bottom">
        ▸ Developers
      </span>
    </div>

    <!-- Colonne droite : étapes -->
    <div class="process__right">
      <ol class="process__steps">

  <li class="process-step">
    <div class="step-icon">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/pen-tool-02-stroke-standard 1.png' ); ?>"
        alt=""
      >
    </div>
    <div class="step-body">
      <h3 class="step-title">
        <span class="step-title__num">1.</span>
        Conception
      </h3>
      <p>Nous vous accompagnons dans la définition de vos besoins fonctionnels et visuels.</p>
    </div>
  </li>

  <li class="process-step">
    <div class="step-icon">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/html-5-stroke-standard 1.png' ); ?>"
        alt=""
      >
    </div>
    <div class="step-body">
      <h3 class="step-title">
        <span class="step-title__num">2.</span>
        Maquettage
      </h3>
      <p>Nos designers créent une interface UI/UX centrée sur vos utilisateurs.</p>
    </div>
  </li>

  <li class="process-step">
    <div class="step-icon">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/security-check-stroke-standard 1.png' ); ?>"
        alt=""
      >
    </div>
    <div class="step-body">
      <h3 class="step-title">
        <span class="step-title__num">3.</span>
        Intégration front-end
      </h3>
      <p>Conversion des maquettes en pages HTML/CSS/JavaScript modernes et responsives.</p>
    </div>
  </li>

  <li class="process-step">
    <div class="step-icon">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/database-stroke-sharp 1.png' ); ?>"
        alt=""
      >
    </div>
    <div class="step-body">
      <h3 class="step-title">
        <span class="step-title__num">4.</span>
        Développement back-end
      </h3>
      <p>Intégration dans un CMS adapté (WordPress, Drupal, Prestashop) ou développement sur mesure.</p>
    </div>
  </li>

  <li class="process-step">
    <div class="step-icon">
      <img
        src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/dashboard-speed-01-solid-rounded 1.png' ); ?>"
        alt=""
      >
    </div>
    <div class="step-body">
      <h3 class="step-title">
        <span class="step-title__num">5.</span>
        Contrôle qualité (QA)
      </h3>
      <p>Notre équipe vérifie la compatibilité, la sécurité, les performances et la conformité aux attentes.</p>
    </div>
  </li>

</ol>

    </div>

  </div>
</section>

 <section class="cta">
    <div class="container">
      <p class="cta-text">
        <a href="#contact" class="cta-btn">Let’s work together</a>
      </p>
    </div>
  </section>


</main>

<?php get_footer(); ?>
