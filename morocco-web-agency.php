<?php
/**
 * Template Name: Morocco Web Agency (EN)
 */
get_header();
?>

<main>

<!-- ===================== HERO ===================== -->
<section class="hero hero--dark">
  <div class="container hero__inner">
    <h2 class="hero-title">
      <span class="accent">Web </span> Agency in<br>
      Morocco – Website<br> & Mobile App<br> Development
    </h2>

    <p class="hero-sub">
      Your digital partner based in Rabat
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

<!-- ===================== LOGO MARQUEE ===================== -->
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

    <!-- duplicate for infinite loop -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (1).png" alt="Logo 1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (2).png" alt="Logo 2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (3).png" alt="Logo 3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (4).png" alt="Logo 4">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (5).png" alt="Logo 5">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/div.v3-logo-slide-item (6).png" alt="Logo 6">

  </div>
</section>

<!-- ===================== TEAM SECTION ===================== -->
<section class="team-section" id="team">
  <div class="container team-section__inner">

    <span class="team-tag">The Team</span>

    <h2 class="team-title">
      <span class="team-title__accent">A passionate</span> team with complementary<br>
      expertise
    </h2>

    <div class="team-grid">

      <figure class="team-media">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/Developers_Working.png' ); ?>"
          alt="Chenocom team working"
          loading="lazy"
        >
      </figure>

      <div class="team-content">
        <p class="team-intro">
          Our strength lies in a multidisciplinary team of digital experts:
        </p>

        <ul class="team-list">
          <li><strong>Creative web designers</strong> for strong brand identity.</li>
          <li><strong>HTML/CSS integrators</strong> for modern, responsive interfaces.</li>
          <li><strong>Web & mobile developers</strong> skilled in PHP, WordPress, Drupal, iOS, Android.</li>
          <li><strong>Digital marketing consultants</strong> to improve traffic, visibility, and conversions.</li>
        </ul>

        <p class="team-outro">
          Every project goes through dedicated specialists at each stage,
          ensuring <strong>high-quality execution</strong> and <strong>flawless delivery</strong>.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ===================== KPIs ===================== -->
<section class="kpis-band" aria-label="Key indicators">
    <div class="container">
      <ul class="kpis-grid">
        <li class="kpi-item">
          <span class="kpi-value" data-target="62" data-suffix="+">62+</span>
          <span class="kpi-label">Completed projects</span>
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

<!-- ===================== MEGA SLOGAN ===================== -->
<section class="mega-slogan" aria-label="Slogan">
  <div class="mega-slogan__scroller" id="sloganScroller">
    <h2 class="mega-slogan__line">
      <span class="mega-stroke">IN CREATIVITY</span>
      <span class="mega-fill">CHENOCOM</span>
    </h2>
  </div>
</section>

<!-- ===================== PROCESS STEPS ===================== -->
<section class="process">
  <div class="container process__grid">

    <div class="process__left">
      <h2 class="process__title">
        <span class="accent">A 100%</span> digital process,<br>
        0%<br>
        headache
      </h2>

      <span class="process-badge process-badge--top">
        ▸ Web application
      </span>

      <p class="process__text">
        Your unlimited access to digital creation:
        design, development, launch and scaling — all in one integrated solution.
      </p>

      <a class="process__cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
        Contact us ↗
      </a>

      <span class="process-badge process-badge--bottom">
        ▸ Developers
      </span>
    </div>

    <div class="process__right">
      <ol class="process__steps">

        <li class="process-step">
          <div class="step-icon">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/pen-tool-02-stroke-standard 1.png' ); ?>" alt="">
          </div>
          <div class="step-body">
            <h3 class="step-title">
              <span class="step-title__num">1.</span>
              Conception
            </h3>
            <p>We help you define your visual and functional needs.</p>
          </div>
        </li>

        <li class="process-step">
          <div class="step-icon">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/html-5-stroke-standard 1.png' ); ?>" alt="">
          </div>
          <div class="step-body">
            <h3 class="step-title">
              <span class="step-title__num">2.</span>
              Wireframing
            </h3>
            <p>Our designers create UI/UX interfaces centered around your users.</p>
          </div>
        </li>

        <li class="process-step">
          <div class="step-icon">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/security-check-stroke-standard 1.png' ); ?>" alt="">
          </div>
          <div class="step-body">
            <h3 class="step-title">
              <span class="step-title__num">3.</span>
              Front-end integration
            </h3>
            <p>Conversion of mockups into modern and responsive HTML/CSS/JS pages.</p>
          </div>
        </li>

        <li class="process-step">
          <div class="step-icon">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/database-stroke-sharp 1.png' ); ?>" alt="">
          </div>
          <div class="step-body">
            <h3 class="step-title">
              <span class="step-title__num">4.</span>
              Back-end development
            </h3>
            <p>Integration into a suitable CMS (WordPress, Drupal, Prestashop) or custom development.</p>
          </div>
        </li>

        <li class="process-step">
          <div class="step-icon">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/dashboard-speed-01-solid-rounded 1.png' ); ?>" alt="">
          </div>
          <div class="step-body">
            <h3 class="step-title">
              <span class="step-title__num">5.</span>
              Quality Assurance (QA)
            </h3>
            <p>Our team checks compatibility, security, performance and expectations.</p>
          </div>
        </li>

      </ol>
    </div>

  </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="cta">
  <div class="container">
    <p class="cta-text">
      <a href="#contact" class="cta-btn">Let’s work together</a>
    </p>
  </div>
</section>

</main>

<?php get_footer(); ?>
