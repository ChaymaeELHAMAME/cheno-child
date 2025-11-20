<?php
/**
 * Template Name: Agence Web Maroc
 */

// header.php
get_header();
?>

<main>

  <!-- ======================== SECTION HERO ======================== -->
  <!-- Section principale d’introduction de la page -->
  <section class="hero hero--dark">
    
    <!-- Conteneur centré avec largeur max, utilisé sur tout le site -->
    <div class="container hero__inner">
      
      <!-- Titre principal  -->
      <h2 class="hero-title">
        <span class="accent">Agence</span> Web au<br>
        Maroc – Création de <br>sites web et<br>d'applications mobiles
      </h2>

      <!-- Paragraphe d’introduction sous le titre -->
      <p class="hero-sub">
        Votre partenaire digital basé à Rabat
        <a class="inline-cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
          Get in touch ↗
        </a>
      </p>

      <!-- Liste des badges décoratifs flottants autour du hero -->
      <!-- aria-hidden="true" : indique aux lecteurs d’écran d’ignorer ces éléments purement décoratifs -->
      <ul class="hero-badges" aria-hidden="true">
        <!-- Les variables CSS (--x, --y, --delay, --amp) contrôlent la position et l’animation -->
        <li class="badge badge--seo"
            style="--x:18%; --y:16%; --delay:0s; --amp:12px;">
          SEO Team
        </li>

        <!-- Badge "Design Team" -->
        <li class="badge badge--design"
            style="--x:82%; --y:18%; --delay:.2s; --amp:14px;">
          Design Team
        </li>

        <!-- Badge "DevOps Team" -->
        <li class="badge badge--devops"
            style="--x:12%; --y:68%; --delay:.4s; --amp:10px;">
          DevOps Team
        </li>

        <!-- Badge "Developers" -->
        <li class="badge badge--dev"
            style="--x:90%; --y:70%; --delay:1s; --amp:16px;">
          Developers
        </li>

      </ul> 

    </div> <!-- Fin de .container .hero__inner -->

  </section>
  <!-- ====================== FIN SECTION HERO ====================== -->


  <!-- ======================== SECTION LOGO MARQUEE ======================== -->
  <!-- Section qui affiche une ligne de logos de clients qui défilent -->
  <section class="logo-marquee">

    <p class="logo-marquee__lead">
      Top 50 firms trust Chenocom to improve efficiency, revenue, and client experiences.
    </p>

    <!-- Conteneur des logos qui défilent horizontalement -->
    <div class="logo-track">

      <!-- Première série de logos (chaque balise <img> représente un logo client) -->
      <!-- get_stylesheet_directory_uri() retourne l’URL du thème enfant -->
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

      <!-- Duplication de la série de logos pour créer un effet de défilement infini -->
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

    </div> <!-- Fin de .logo-track -->
  </section>
  <!-- ====================== FIN SECTION LOGO MARQUEE ====================== -->


  <!-- ======================== SECTION TEAM ======================== -->
  <!-- Section "équipe" qui présente la team Chenocom -->
  <section class="team-section" id="team">
    
    <!-- Conteneur centré de la section team -->
    <div class="container team-section__inner">

      <!-- Petit badge décoratif au-dessus du titre -->
      <span class="team-tag">The Team</span>
      <h2 class="team-title">
        <!-- Span pour styliser le titre -->
        <span class="team-title__accent">Une équipe</span> passionnée, des compétences<br>
        complémentaires
      </h2>

      <!-- Grille à deux colonnes : image à gauche, texte à droite -->
      <div class="team-grid">

        <!-- Colonne image -->
        <figure class="team-media">
          <!-- Image de l’équipe -->
          <!-- lazy : évite de charger l’image tant qu’elle n’est pas visible -->
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Developers_Working.png' ); ?>"
            alt="L’équipe Chenocom en train de travailler"
            loading="lazy"
          >
        </figure>

        <!-- Colonne texte description de l’équipe -->
        <div class="team-content">
          
          <!-- Paragraphe d’introduction -->
          <p class="team-intro">
            Notre force repose sur une équipe pluridisciplinaire de professionnels du web&nbsp;:
          </p>

          <!-- Liste des types de profils au sein de l’équipe -->
          <ul class="team-list">
            <li><strong>Web designers</strong> créatifs pour une identité visuelle forte.</li>
            <li><strong>Intégrateurs HTML/CSS</strong> pour des interfaces modernes et responsives.</li>
            <li><strong>Développeurs web et mobile</strong> experts en PHP, WordPress, Drupal, iOS, Android.</li>
            <li><strong>Consultants en marketing digital</strong> pour générer trafic, visibilité et conversion.</li>
          </ul>

          <!-- Paragraphe de conclusion, insistant sur la qualité et la rigueur -->
          <p class="team-outro">
            Chaque projet passe entre les mains de spécialistes dédiés à chaque phase,
            garantissant un <strong>niveau élevé de qualité</strong> et une <strong>exécution rigoureuse</strong>.
          </p>
        </div> 

      </div> 

    </div> 
  </section>
  <!-- ====================== FIN SECTION TEAM ====================== -->


  <!-- ======================== SECTION KPIs ======================== -->
  <!-- Section qui affiche des chiffres clés (indicateurs de performance) -->
  <section class="kpis-band" aria-label="Indicateurs clés">
    <div class="container">
      
      <!-- Liste des différents KPI affichés côte à côte -->
      <ul class="kpis-grid">

        <!-- Élément KPI : nombre de projets finalisés -->
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
  <!-- ====================== FIN SECTION KPIs ====================== -->


  <!-- ======================== SECTION MEGA SLOGAN ======================== -->
  <!-- Bandeau affichant un slogan typographique fort -->
  <section class="mega-slogan" aria-label="Slogan">

    <!-- Conteneur horizontal scrollable du slogan -->
    <div class="mega-slogan__scroller" id="sloganScroller">

      <!-- Titre du slogan, sur une seule ligne -->
      <h2 class="mega-slogan__line">
        <span class="mega-stroke">IN CREATIVITY</span>
        <span class="mega-fill">CHENOCOM</span>
      </h2>

    </div> 
  </section>
  <!-- ====================== FIN SECTION MEGA SLOGAN ====================== -->


  <!-- ======================== SECTION PROCESS ======================== -->
  <!-- Section qui détaille les étapes du parcours projet (processus) -->
  <section class="process">
    
    <!-- Grille de la section process : texte à gauche, étapes à droite -->
    <div class="container process__grid">

      <!-- ===== Colonne gauche : titre + description + badges ===== -->
      <div class="process__left">
        
        <!-- Titre principal de la section "process" -->
        <h2 class="process__title">
          <span class="accent">Un parcours</span> 100%<br>
          digital, 0%<br>
          headache
        </h2>

        <!-- Badge décoratif flottant  -->
        <span class="process-badge process-badge--top">
          ▸ Web application
        </span>

        <!-- Paragraphe explicatif du concept -->
        <p class="process__text">
          Votre accès illimité à la création digitale :
          conception, développement, lancement et scaling – tout dans une seule solution intégrée.
        </p>

        <!-- Lien d’appel à l’action vers la page contact -->
        <a class="process__cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
          Contactez-nous ↗
        </a>

        <!-- Deuxième badge décoratif, placé plus bas -->
        <span class="process-badge process-badge--bottom">
          ▸ Developers
        </span>
      </div>
      <!-- ===== Fin de la colonne gauche ===== -->


      <!-- ===== Colonne droite : liste ordonnée des étapes ===== -->
      <div class="process__right">

        <!-- Liste ordonnée  des différentes étapes du process -->
        <ol class="process__steps">

          <!-- Étape 1 : Conception -->
          <li class="process-step">
            <div class="step-icon">
              <!-- Image de l’icône, chemin généré en fonction du thème enfant -->
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/pen-tool-02-stroke-standard 1.png' ); ?>"
                alt="" 
              >
            </div>
            <!-- Bloc contenant le titre et le texte de l’étape -->
            <div class="step-body">
              <!-- Titre de l’étape (H3) -->
              <h3 class="step-title">
                <!-- Numéro de l’étape, stylisé séparément -->
                <span class="step-title__num">1.</span>
                Conception
              </h3>
              <!-- Description de l’étape -->
              <p>Nous vous accompagnons dans la définition de vos besoins fonctionnels et visuels.</p>
            </div>
          </li>

          <!-- Étape 2 : Maquettage -->
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

          <!-- Étape 3 : Intégration front-end -->
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

          <!-- Étape 4 : Développement back-end -->
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

          <!-- Étape 5 : Contrôle qualité -->
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
      <!-- ===== Fin de la colonne droite ===== -->

    </div> 
  </section>
  <!-- ====================== FIN SECTION PROCESS ====================== -->


  <!-- ======================== SECTION CTA FINALE ======================== -->
  <!-- Section d’appel à l’action finale "Let’s work together" -->
  <section class="cta">
    <div class="container">
      <!-- Paragraphe contenant uniquement le bouton -->
      <p class="cta-text">
        <!-- Lien qui sert de bouton d’action vers la section contact de la page -->
        <a href="#contact" class="cta-btn">Let’s work together</a>
      </p>
    </div>
  </section>
  <!-- ====================== FIN SECTION CTA ====================== -->

</main>
<!-- ====================== FIN DU CONTENU PRINCIPAL ====================== -->

<?php
// footer.php
get_footer();
?>
