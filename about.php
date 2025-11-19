<?php
/**
 * Template Name: About (Cheno EN)
 * Description: English About page for Chenocom (child theme)
 */
get_header();
?>

<main id="about">
  <!-- ===================== HERO SECTION ===================== -->
  <section class="hero hero--dark">
    <div class="container hero__inner">

      <!-- Main title -->
      <h2 class="hero-title">
        <span class="accent">Dominate </span> every<br>
        challenge with <br>
        <span class="brand-highlight">CHENOCOM</span>
      </h2>

      <!-- Sub text -->
      <p class="hero-sub">
        Your digital partner based in Rabat
        <a class="inline-cta" href="<?php echo esc_url( cheno_page_url('contact') ); ?>">
          Get in touch ↗
        </a>
      </p>

      <!-- Floating badges -->
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
  <!-- ===================== END HERO SECTION ===================== -->

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
  <!-- ===================== END LOGO MARQUEE ===================== -->

  <?php
  // Stats right column
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

  <!-- ===================== ABOUT SECTION ===================== -->
  <section class="about-section">
    <div class="container">

      <span class="hero-chip">▸ About Chenocom</span>

      <div class="testi__head">
        <h2 class="testi__title">
          Our <span class="accent">Agency</span> Chenocom
        </h2>
      </div>

      <div class="container about-section__grid">

        <!-- LEFT COLUMN -->
        <div class="about-section__col about-section__col--left">
          <figure class="about-section__figure">
            <img
              src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Contemporary_Mature_Engineer_In..._original_438166 1.png' ); ?>"
              alt="Chenocom team">
          </figure>

          <p class="about-section__side-text">
            Based in Morocco, we support clients locally and internationally (offshore)
            with a high level of quality, responsiveness, and commitment.
          </p>
        </div>

        <!-- CENTER COLUMN -->
        <div class="about-section__col about-section__col--center">

          <h2 class="about-section__title">
            Inspiring innovation and driving growth through<br>
            customized business solutions
          </h2>

          <p class="about-section__text">
            Since 2017, <strong>Chenocom</strong> has been a reliable partner in the digital world.
            We support companies, agencies, and brands in the
            <strong>creation of high-performing websites</strong> and
            <strong>development of tailor-made mobile applications</strong>,
            strictly applying <strong>web best practices</strong> and putting
            the <strong>user experience</strong> at the heart of every project.
          </p>

          <hr class="about-section__divider">

          <div class="about-section__bottom">
            <figure class="about-section__figure about-section__figure--wide">
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Frame 1618873255.png' ); ?>"
                alt="Team at work">
            </figure>

            <ul class="about-stats">
              <?php foreach ( $about_stats as $stat ) : ?>
                <li class="about-stats__item">
                  <span class="about-stats__value">
                    <?php echo esc_html( $stat['value'] ); ?>
                  </span>
                  <span class="about-stats__label">
                    <?php echo esc_html( $stat['label'] ); ?>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ===================== END ABOUT SECTION ===================== -->

  <!-- ===================== MEGA SLOGAN ===================== -->
  <section class="mega-slogan" aria-label="Slogan">
    <div class="mega-slogan__scroller" id="sloganScroller">
      <h2 class="mega-slogan__line">
        <span class="mega-stroke">IN CREATIVITY</span>
        <span class="mega-fill">CHENOCOM</span>
      </h2>
    </div>
  </section>
  <!-- ===================== END MEGA SLOGAN ===================== -->

  <!-- ===================== VALUES HERO ===================== -->
  <section class="hero hero--dark">
    <div class="container hero__inner">
      <h2 class="hero-title">
        It all starts with<br>
        our <span class="accent">values.</span>
      </h2>

      <ul class="hero-badges" aria-hidden="true">
        <li class="badge badge--seo"
            style="--x:26%; --y:68%; --delay:0s; --amp:10px;">
          Creativity
        </li>

        <li class="badge badge--design"
            style="--x:82%; --y:22%; --delay:.2s; --amp:12px;">
          Our values
        </li>
      </ul>
    </div>
  </section>
  <!-- ===================== END VALUES HERO ===================== -->

  <?php
  // Values cards (EN)
  $cheno_values = [
    [
      'title' => 'Creativity',
      'text'  => 'Every project starts with an idea. We put imagination and innovation at the service of unique, impactful and fully tailored digital solutions.',
      'icon'  => 'idea-01-solid-standard 1.png',
    ],
    [
      'title' => 'Honesty',
      'text'  => 'Transparency and sincerity are at the heart of our relationship with clients and team members. No unrealistic promises – only commitments we honor.',
      'icon'  => 'Vector (2).png',
    ],
    [
      'title' => 'Excellence',
      'text'  => 'We aim for excellence at every stage: in code, design, project management and client satisfaction.',
      'icon'  => 'laptop-performance-solid-rounded 1.png',
    ],
    [
      'title' => 'Technology neutrality',
      'text'  => 'We choose the technologies that truly fit your needs, without bias or dependency on a single tool. Objectivity drives our recommendations.',
      'icon'  => 'nano-technology-solid-sharp 1.png',
    ],
    [
      'title' => 'Openness',
      'text'  => 'Open to new ideas, feedback and technological evolutions, we move forward with a mindset of learning and constructive improvement.',
      'icon'  => 'mail-open-02-solid-rounded 1.png',
    ],
    [
      'title' => 'Collaboration',
      'text'  => 'We believe in the power of teamwork. Internally and with our clients, co-creation is at the center of our methodology.',
      'icon'  => 'flow-connection-solid-sharp 1.png',
    ],
    [
      'title' => 'Optimization',
      'text'  => 'Our projects are not only beautiful – they are performant. We refine every detail to improve loading speed, SEO, usability and conversions.',
      'icon'  => 'dashboard-speed-01-solid-rounded 1.png',
    ],
    [
      'title' => 'Motivation',
      'text'  => 'Our passion for digital pushes us to go further every day. Each challenge is a new opportunity to grow and create value.',
      'icon'  => 'zap-solid-rounded 2.png',
    ],
  ];
  ?>

  <!-- ===================== VALUES GRID ===================== -->
  <section class="values" id="values">
    <div class="container">
      <div class="values__grid">
        <?php foreach ( $cheno_values as $value ) : ?>
          <article class="value-card">
            <div class="value-card__icon">
              <img
                src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/' . $value['icon'] ); ?>"
                alt="<?php echo esc_attr( $value['title'] ); ?>"
                loading="lazy">
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
  <!-- ===================== END VALUES GRID ===================== -->

  <!-- ===================== "BEST" SECTION ===================== -->
  <section class="best-section">
    <div class="container best-grid">
      <figure class="best-media">
        <img
          src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/Logo-Mockup1.png' ); ?>"
          alt="Chenocom believes in creativity">
      </figure>

      <div class="best-content">
        <h2 class="best-title">
          We are not the only ones…<br>
          but we are <span class="accent">the best!</span>
        </h2>

        <p class="best-lead">
          Looking to grow your online visibility, launch a new digital product,
          or improve your marketing performance?
          <strong>Chenocom</strong> helps you turn ideas into
          tailor-made, scalable and results-driven digital solutions.
        </p>

        <div class="best-intro-row">
          <p class="best-intro">Our process includes:</p>
          <a href="#values" class="best-badge">▸ Our values</a>
        </div>

        <ul class="best-list">
          <li>Fast and accurate analysis of your needs</li>
          <li>Design of solutions adapted to your business</li>
          <li>Rigorous execution, tracking and measurable results</li>
        </ul>

        <p class="best-note">
          We work with SMEs, startups and major brands.
          Our priority: help you save time, secure your technology choices
          and contribute to your success.
        </p>

        <div class="best-actions">
          <a href="#contact" class="best-link">
            Contact us
            <span class="best-link__arrow">↗</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== END "BEST" SECTION ===================== -->

  <!-- ===================== ENGINE SECTION ===================== -->
  <section class="engine">
    <div class="container">
      <div class="engine__chip-wrap">
        <span class="engine__chip">Our Technologies</span>
      </div>

      <div class="engine__grid">
        <div>
          <h2 class="testi__title">
            <span class="accent">Growing</span>, innovating,
            inspiring – This is our engine
          </h2>
        </div>

        <div>
          <p class="engine__text">
            The desire to exceed expectations, the courage to push boundaries,
            and the joy of seeing your projects succeed. Every challenge
            is a new reason for us to get up with ambition.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== END ENGINE SECTION ===================== -->

  <!-- ===================== VALUES STACK ===================== -->
  <section class="values-stack">
    <div class="container">

      <article class="value-item">
        <div class="value-icon" aria-hidden="true">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/user-group-stroke-standard-1.png' ); ?>"
            alt="">
        </div>

        <div>
          <h3 class="value-title">A close-knit, passionate team</h3>
          <p class="value-text">
            We aim for excellence at every stage: in code, design,
            project management and client satisfaction.
            Our high standards guarantee tangible results.
          </p>
        </div>
      </article>

      <article class="value-item">
        <div class="value-icon" aria-hidden="true">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/nano-technology-stroke-rounded-1.png' ); ?>"
            alt="">
        </div>

        <div>
          <h3 class="value-title">Continuous technology watch</h3>
          <p class="value-text">
            We stay at the cutting edge of innovation to offer you modern,
            reliable and sustainable solutions.
          </p>
        </div>
      </article>

      <article class="value-item">
        <div class="value-icon" aria-hidden="true">
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/flow-connection-stroke-rounded-1.png' ); ?>"
            alt="">
        </div>

        <div>
          <h3 class="value-title">Collaboration driven by passion</h3>
          <p class="value-text">
            A successful project starts with a shared vision.
            Before any collaboration, we make sure the motivation is mutual:
            choosing us also means being truly understood.
          </p>
        </div>
      </article>

    </div>
  </section>
  <!-- ===================== END VALUES STACK ===================== -->

  <!-- ===================== CTA SECTION ===================== -->
  <section class="cta">
    <div class="container">
      <p class="cta-text">
        <a href="#contact" class="cta-btn">Let’s work together</a>
      </p>
    </div>
  </section>
  <!-- ===================== END CTA SECTION ===================== -->
</main>

<?php get_footer(); ?>
