<?php
/**
 * Template Name: Front Page (Cheno Child)
 * Description: Homepage hero + sections (compatible avec le CSS)
 */
get_header();
?>

<main id="home">

  <!-- ===================== HERO ===================== -->
  <section class="hero hero--dark">
    <div class="container hero__inner">

      <!-- H1: marque -->
      <h1 class="hero-brand">
        <span class="brand-highlight">CHENO</span>COM
      </h1>

      <!-- H2: titre principal -->
      <h2 class="hero-title">
        <span class="accent">Websites</span> that get<br>
        your business rolling
      </h2>

      <!-- Sous-texte -->
      <p class="hero-sub">
        <strong>Chenocom</strong> — Your trusted Moroccan web agency, designing powerful, tailor-made
        websites that attract and convert. Let’s make your project shine!
        <a class="inline-cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">Get in touch ↗</a>
      </p>

      <!-- CTAs -->
      <div class="hero-cta">
        <a class="btn btn-primary" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">Contact Us</a>
        <a class="btn btn-ghost" href="<?php echo esc_url( cheno_page_url('projects') ); ?>">Our work</a>
      </div>

      <!-- Badges animés -->
      <ul class="hero-badges" aria-hidden="true">
        <li class="badge badge--seo"     style="--x:18%; --y:16%; --delay:0s;  --amp:12px;">SEO Team</li>
        <li class="badge badge--design"  style="--x:82%; --y:18%; --delay:.2s; --amp:14px;">Design Team</li>
        <li class="badge badge--devops"  style="--x:12%; --y:68%; --delay:.4s; --amp:10px;">DevOps Team</li>
        <li class="badge badge--dev"     style="--x:90%; --y:70%; --delay:1s;  --amp:16px;">Developers</li>
      </ul>

    </div>
  </section> <!-- ✅ IMPORTANT: fermeture du HERO -->

  <!-- ===================== PROJETS – image unique scroll auto (full-bleed) ===================== -->
  <section class="projects-hero" aria-label="Projects preview">
    <div class="full-bleed">
      <div id="projectsViewport" class="projects-viewport" aria-roledescription="scrollable image">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Frame 1618872256 (1).png' ); ?>"
          alt="Projects showcase"
          class="projects-slide"
          width="2560" height="720"
          loading="lazy">
      </div>
    </div>
  </section>

  <section class="logo-marquee">
     <p class="logo-marquee__lead">
    Top 50 firms trust Chenocom to improve efficiency, revenue, and client experiences.
  </p>
    <div class="logo-track">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

      <!-- Doublon pour défilement fluide -->
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">
    </div>
  </section>

  <!-- ===== Intro banner (comme l'image) ===== -->
  <section class="hero hero--compact">
    <div class="container hero__inner hero__inner--left">
      <h2 class="hero-title hero-title--compact">
        <span class="accent">Chenocom</span> — Building digital excellence
        with smart solutions, tailored for your growth.
      </h2>

      <!-- le petit chip vert -->
      <span class="hero-chip">▸ About Chenocom</span>
    </div>
  </section>

  <section class="intro-split">
    <div class="container intro-split__grid">
      <div class="intro-split__left">
        <span class="intro-split__icon">🔥</span>
        <strong class="intro-split__title">Creativity you can rely on</strong>
      </div>

      <div class="intro-split__right">
        <p class="intro-split__text">
          <a href="#" class="intro-split__brand">
            <span>Chenocom</span><span class="arrow">↗</span>
          </a>
          A top-tier Moroccan digital agency focused on bespoke web development,&nbsp;
          <span class="nb">mobile apps</span>, and data-driven <span class="nb">UX/UI design</span>.&nbsp;
          From startups to <span class="nb">enterprises</span>, we build platforms that
          <span class="nb">deliver results</span>.
        </p>
      </div>
    </div>
  </section>

  <section class="kpis-band" aria-label="Key metrics">
    <div class="container">
      <ul class="kpis-grid">
        <li class="kpi-item">
          <span class="kpi-value" data-target="62" data-suffix="+">62+</span>
          <span class="kpi-label">Finalized projects</span>
        </li>

        <li class="kpi-item">
          <span class="kpi-value" data-target="94" data-suffix="%">94%</span>
          <span class="kpi-label">Conversion rate improvement</span>
        </li>

        <li class="kpi-item">
          <span class="kpi-value" data-target="11" data-suffix="+">11+</span>
          <span class="kpi-label">Years of experience</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="mega-slogan" aria-label="Slogan">
    <div class="mega-slogan__scroller" id="sloganScroller">
      <h2 class="mega-slogan__line">
        <span class="mega-stroke">IN CREATIVITY</span>
        <span class="mega-fill">CHENOCOM</span>
      </h2>
    </div>
  </section>

  <section class="focus-section">
    <div class="container focus-grid">
      <!-- Bloc gauche -->
      <div class="focus-left">
        <h2 class="focus-title">
          <span class="accent">We</span> focus on three core<br>
          areas to bounce your<br>
          business forward
        </h2>

        <a href="#" class="btn-orange">⬆ Our Specialities</a>
      </div>

      <!-- Bloc droit -->
      <div class="focus-right">
        <p>
          Thanks to our skilled teams in web development, web design, natural SEO, social media management, 
          and optimized content writing, we bring together all the expertise needed to turn.
        </p>
        <a href="#" class="focus-link">Why Chenocom ↗</a>
      </div>
    </div>
  </section>

  <section class="expertise" id="expertise">
    <div class="container">
      

      <div class="xp-grid">
        <!-- 1) Logo -->
        <article class="xp-card xp-card--logo" aria-label="Chenocom – Believe in creativity">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/chenocom.png' ); ?>"
            alt="Chenocom — Believe in creativity">
        </article>

        <!-- 2) Grande carte avec image + 01 -->
        <article class="xp-card xp-card--hero">
          <img class="xp-shot"
               src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Design sans titre (24).png' ); ?>"
               alt="Conception d’interfaces sur deux écrans">
          <div class="xp-content">
            <h3 class="xp-title">Designing responsive and<br>dynamic websites</h3>
            <p>We deliver visually stunning, user-friendly websites that not only look beautiful but are built to perform, convert and grow your business. Hand-crafted by humans – with strategy, style and soul.</p>
          </div>
          <span class="xp-num">01</span>
        </article>

        <!-- ✅ 02 & 03 en 50% / 50% -->
        <div class="xp-row">
          <!-- 3) Carte 02 -->
          <article class="xp-card xp-card--text">
            <span class="xp-num">02</span>
            <h3 class="xp-title">Conception et realisation<br>d’apps mobiles</h3>
            <p>We deliver visually stunning, user-friendly websites that not only look beautiful but are built to perform, convert and grow your business. Hand-crafted by humans – with strategy, style and soul.</p>
          </article>

          <!-- 4) Carte 03 -->
          <article class="xp-card xp-card--text">
            <span class="xp-num">03</span>
            <h3 class="xp-title">Communication digitale<br>et generation de trafic</h3>
            <p>We deliver visually stunning, user-friendly websites that not only look beautiful but are built to perform, convert and grow your business. Hand-crafted by humans – with strategy, style and soul.</p>
          </article>
        </div>
        <!-- /xp-row -->
      </div>
    </div>
  </section>

  <!-- ===================== VIDEO + KPI ===================== -->
  <section class="video-kpi">
    <div class="container video-kpi__grid">

      <!-- Carte vidéo -->
      <article class="video-card" 
               data-yt="https://youtu.be/JuyL0UxHd-Y?si=_itUq64MUjR7Cjqb" 
               aria-label="Play Chenocom video">
        <img class="video-card__poster"
             src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/div.s1j2sgo8.png' ); ?>"
             alt="Chenocom — Believe in creativity" width="960" height="540">

        <!-- overlay + bouton lecture -->
        <button class="video-card__btn" type="button" aria-label="Play video">
          <span class="video-card__play" aria-hidden="true"></span>
        </button>
      </article>

      <!-- Carte KPI -->
      <aside class="fact-card" aria-label="Facts & numbers">
        <small class="fact-card__eyebrow">FACTS & NUMBERS</small>
        <div class="fact-card__value">94%</div>
        <p class="fact-card__text">Of customers recommend<br>Chenocom services.</p>
      </aside>

    </div>
  </section>

  <section class="hero-stunning">
    <div class="hero-stunning__inner">
      <h2 class="hero-stunning__title">
        <span class="highlight">Stunning</span> bespoke web design that captivates &amp; converts
      </h2>

      <!-- Badges / chips -->
      <a href="#projects" class="chip chip--left" aria-label="Our Projects">
        Our Projects <span class="chev">▾</span>
      </a>
      <a href="#websites" class="chip chip--right" aria-label="Websites">
        Websites
      </a>
    </div>
  </section>

 <section class="works">
    <div class="works__grid">

      <?php $img = get_stylesheet_directory_uri() . '/assets/img/'; ?>

      <!-- Work #1 -->
      <article class="work">
        <a class="work__link" href="#">
          <figure class="work__media">
            <img src="<?php echo esc_url( $img . 'elegent morocco.png' ); ?>" alt="Elegant Morocco — couverture">
            <figcaption class="work__overlay">
              <img class="work__mark" src="<?php echo esc_url( $img . 'elegant-morocco.png' ); ?>" alt="" aria-hidden="true">
            </figcaption>
          </figure>
          <h3 class="work__title">Elegant Morocco</h3>
        </a>

        <ul class="work__tags">
          <li>Branding</li><li>Design UI/UX</li><li>Stratégie</li><li>Développement</li>
        </ul>
      </article>

      <!-- Work #2 -->
      <article class="work">
        <a class="work__link" href="#">
          <figure class="work__media">
            <img src="<?php echo esc_url( $img . 'opaleon.png' ); ?>" alt="Opaleon — couverture">
          </figure>
          <h3 class="work__title">Opaleon</h3>
        </a>

        <ul class="work__tags">
          <li>Design UI/UX</li><li>Développement</li><li>Logo</li>
        </ul>
      </article>

      <!-- Pinarello App -->
      <article class="work">
        <a class="work__link" href="#">
          <figure class="work__media">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/our-expertises.png' ); ?>"
              alt="Pinarello App — couverture">
          </figure>
          <h3 class="work__title">Pinarello App</h3>
        </a>
        <ul class="work__tags">
          <li>Design UI/UX</li><li>Développement</li>
        </ul>
      </article>

      <!-- Cadenza -->
      <article class="work">
        <a class="work__link" href="#">
          <figure class="work__media">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/cadenza.png' ); ?>"
              alt="Cadenza — couverture">
          </figure>
          <h3 class="work__title">Cadenza</h3>
        </a>
        <ul class="work__tags">
          <li>Design UI/UX</li><li>Stratégie</li><li>Logo</li>
        </ul>
      </article>

    </div>
  </section>


  <!-- Services intro (2 colonnes) -->
  <section class="svc-intro">
    <a class="svc-more" href="<?php echo esc_url( cheno_page_url('projects') ); ?>">View more work ↗</a>

    <div class="svc-grid container">
      <!-- Colonne gauche -->
      <div class="svc-left">
        <p class="svc-text">
          We offer a full suite of web design services that transform your brand story into immersive,
          <strong>beautifully crafted digital experiences</strong>.
        </p>

        <a class="chip-tech" href="<?php echo esc_url( cheno_page_url('technologies') ); ?>">
          <span class="chev" aria-hidden="true">▾</span> Our Technologies
        </a>
      </div>

      <!-- Colonne droite -->
      <div class="svc-right">
        <!-- ✅ Un seul H2, 2 lignes avec <br> -->
        <h2 class="svc-title">
          <span class="accent">End-to-end</span> web design<br>
          services
        </h2>
      </div>
    </div>
  </section>

  <?php
  /* ===== OUR TECHNOLOGIES - single line scroll ===== */
  $img = get_stylesheet_directory_uri() . '/assets/img/';

  $techs = [
    ['alt'=>'JavaScript','file'=>'Frame 1618873227.png'],
    ['alt'=>'WordPress','file'=>'Frame 1618873222.png'],
    ['alt'=>'Adobe Photoshop','file'=>'Frame 1618873229.png'],
    ['alt'=>'HTML5','file'=>'Frame 1618873225.png'],
    ['alt'=>'Drupal','file'=>'Frame 1618873220.png'],
    ['alt'=>'Adobe Illustrator','file'=>'Frame 1618873228.png'],
    ['alt'=>'Adobe XD','file'=>'Frame 1618873359.png'],
    ['alt'=>'Figma','file'=>'Frame 1618873223.png'],
    ['alt'=>'After Effects','file'=>'Frame 1618873358 (1).png'],
  ];
  ?>

  <section class="tech-marquee" aria-label="Our technologies">
    <div class="tech-track">
      <?php foreach ($techs as $t): ?>
        <div class="tech-item">
          <img src="<?php echo esc_url($img . $t['file']); ?>"
               alt="<?php echo esc_attr($t['alt']); ?>" loading="lazy">
        </div>
      <?php endforeach; ?>

      <!-- duplicat pour boucle fluide -->
      <?php foreach ($techs as $t): ?>
        <div class="tech-item">
          <img src="<?php echo esc_url($img . $t['file']); ?>"
               alt="<?php echo esc_attr($t['alt']); ?>" loading="lazy">
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="mega-slogan" aria-label="Slogan">
    <div class="mega-slogan__scroller" id="sloganScroller">
      <h2 class="mega-slogan__line">
        <span class="mega-stroke">IN CREATIVITY</span>
        <span class="mega-fill">CHENOCOM</span>
      </h2>
    </div>
  </section>

  <section class="testi" aria-label="Client testimonials">
    <div class="container">
      <span class="chip chip--testi chip--in-title">▸ Testimonial</span>

      <div class="testi__head">
        <h2 class="testi__title">
          Our <span class="accent">trusted</span> clients say
        </h2>
      </div>

      <?php
      // Récupérer les testimonials
      $q = new WP_Query([
        'post_type'      => 'testimonial',
        'posts_per_page' => 6,
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
      ]);
      ?>

      <div class="testi__slider" data-autoplay="true" data-interval="5500" role="region" aria-roledescription="carousel" aria-label="Testimonials">
        <div class="testi__track" tabindex="0">
          <?php if ($q->have_posts()): $i=0; while ($q->have_posts()): $q->the_post(); $i++; 
            // visuels
            $logo_id   = get_post_thumbnail_id();
            $logo_src  = $logo_id ? wp_get_attachment_image_src($logo_id,'testi_logo')[0] : '';
            $avatar_id = (int) get_post_meta(get_the_ID(),'avatar_id',true);
            $avatar    = $avatar_id ? wp_get_attachment_image_src($avatar_id,'testi_avatar')[0] : get_stylesheet_directory_uri().'/assets/img/Frame 1618873240.png'; // fallback
          ?>
          <article class="testi__item" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr($i); ?> of <?php echo esc_attr($q->post_count); ?>">
            <div class="testi__card">

              <div class="testi__logo">
                <?php if($logo_src): ?>
                  <img src="<?php echo esc_url($logo_src); ?>" alt="<?php echo esc_attr(get_the_title()); ?> logo">
                <?php else: ?>
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/leonidas.png'); ?>" alt="" aria-hidden="true">
                <?php endif; ?>
              </div>

              <div class="testi__content">
                <!-- puces (déco) -->
                <div class="testi__dots" aria-hidden="true">
                  <span></span><span></span><span></span><span></span>
                </div>

                <blockquote class="testi__quote">
                  <p>“ <?php echo wp_kses_post( wp_trim_words( get_the_content(), 90, '' ) ); ?> ”</p>
                </blockquote>

                <div class="testi__author">
                  <img class="testi__avatar" src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                  <div class="testi__who">
                    <strong class="testi__name"><?php the_title(); ?></strong>
                    <span class="testi__role"><?php echo esc_html( get_the_excerpt() ?: '' ); ?></span>
                  </div>
                </div>
              </div>

            </div>
          </article>
          <?php endwhile; wp_reset_postdata(); else: ?>
            <!-- Fallback demo -->
            <article class="testi__item">
              <div class="testi__card">
                <div class="testi__logo">
                  <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/leonidas.png'); ?>" alt="Leonidas logo">
                </div>
                <div class="testi__content">
                  <div class="testi__dots" aria-hidden="true"><span></span><span></span><span></span><span></span></div>
                  <blockquote class="testi__quote">
                    <p>
                      “I had an outstanding experience with Luca and the Fourth Floor design team.
                      They supported my entire website and collateral creation process—from design
                      to development—with exceptional expertise.”
                    </p>
                  </blockquote>

                  <div class="testi__author">
                    <img class="testi__avatar" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/Frame 1618873240.png'); ?>" alt="Phil Carirras">
                    <div class="testi__who">
                      <strong class="testi__name">Phil Carirras</strong>
                      <span class="testi__role">CEO @Leonidas</span>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          <?php endif; ?>
        </div>

        <div class="testi__nav" role="tablist" aria-label="Testimonials navigation">
          <!-- dots générés en JS -->
        </div>
      </div>

    </div>
  </section>

  <section class="latest" aria-label="Latest Insights and Tips">
    <div class="container latest__head">
      <h1 class="latest__title">
        <span class="accent">Latest</span> Insights and Tips
        <span class="latest__chip">▸ Our Blogs</span>
      </h1>

      <a class="latest__more" href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>">
        View All Articles ↗
      </a>
    </div>

    <?php
    // Les 3 derniers articles publiés
    $q = new WP_Query([
      'post_type'           => 'post',
      'posts_per_page'      => 3,
      'post_status'         => 'publish',
      'orderby'             => 'date',
      'order'               => 'DESC',
      'ignore_sticky_posts' => 1,
      'no_found_rows'       => true,
    ]);

    $rendered = 0;
    ?>

    <div class="container latest__grid">
      <?php if ( $q->have_posts() ) : ?>
        <?php while ( $q->have_posts() ) : $q->the_post(); $rendered++; 
          $img  = get_the_post_thumbnail_url(get_the_ID(),'large') ?: get_stylesheet_directory_uri().'/assets/img/Rectangle 552.png';
          $date = get_the_date( _x('F j, Y','date format','cheno') );
          $cats = get_the_category();
        ?>
          <article class="post-card">
            <a class="post-link" href="<?php the_permalink(); ?>">
              <figure class="post-thumb">
                <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
              </figure>

              <div class="post-meta">
                <div class="post-cats">
                  <?php if($cats){ foreach($cats as $c){ ?>
                    <span class="cat-chip"><?php echo esc_html($c->name); ?></span>
                  <?php } } ?>
                </div>
                <time class="post-date" datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                  <?php echo esc_html($date); ?>
                </time>
              </div>

              <h2 class="post-title"><?php the_title(); ?></h2>
              <p class="post-excerpt">
                <?php echo esc_html( wp_trim_words( get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 26, '…' ) ); ?>
              </p>
            </a>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php
      // Fallback : compléter jusqu’à 3 cartes si < 3 posts publiés
      if ($rendered < 3) {
        $placeholders = [
          [
            'title' => 'Web Design',
            'cats'  => ['UX/UI Design','coding'],
            'date'  => 'Février 25 , 2023',
            'img'   => get_stylesheet_directory_uri().'/assets/img/Rectangle 552.png',
            'text'  => "In this blog post, we'll walk you through the essential items …",
          ],
          [
            'title' => 'E-Commerce website',
            'cats'  => ['UX/UI Design'],
            'date'  => 'Février 25 , 2023',
            'img'   => get_stylesheet_directory_uri().'/assets/img/Rectangle 552 (2).png',
            'text'  => "Fall and winter fashion bring cozy vibes and statement pieces …",
          ],
          [
            'title' => 'Learn web developement',
            'cats'  => ['Coding'],
            'date'  => 'Février 25 , 2023',
            'img'   => get_stylesheet_directory_uri().'/assets/img/Rectangle 552 (1).png',
            'text'  => "One of the biggest challenges in fashion is finding outfits …",
          ],
        ];

        for ($i = $rendered; $i < 3; $i++) {
          $p = $placeholders[$i];
          ?>
          <article class="post-card">
            <a class="post-link" href="#">
              <figure class="post-thumb">
                <img src="<?php echo esc_url($p['img']); ?>" alt="<?php echo esc_attr($p['title']); ?>">
              </figure>

              <div class="post-meta">
                <div class="post-cats">
                  <?php foreach($p['cats'] as $c){ ?><span class="cat-chip"><?php echo esc_html($c); ?></span><?php } ?>
                </div>
                <time class="post-date"><?php echo esc_html($p['date']); ?></time>
              </div>

              <h2 class="post-title"><?php echo esc_html($p['title']); ?></h2>
              <p class="post-excerpt"><?php echo esc_html($p['text']); ?></p>
            </a>
          </article>
          <?php
        }
      }
      ?>
    </div>
  </section>

<?php get_footer(); ?>
