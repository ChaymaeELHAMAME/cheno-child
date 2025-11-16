<?php get_header(); ?>
<main class="site-main">
  <section class="works">
    <div class="works__grid">

      <?php
      $q = new WP_Query([
        'post_type'      => 'work',
        'posts_per_page' => -1,
        'orderby'        => ['menu_order' => 'ASC', 'date' => 'DESC'],
      ]);

      if ($q->have_posts()):
        while ($q->have_posts()): $q->the_post();

          // vignette (fallback si pas d’image)
          $thumb = get_the_post_thumbnail(get_the_ID(), 'work_card', [
            'alt'     => esc_attr(get_the_title()),
            'loading' => 'lazy'
          ]) ?: '<div style="aspect-ratio:1/1;background:#121315"></div>';

          // overlay optionnel (avec ACF ou champs natifs)
          $overlay_text   = get_post_meta(get_the_ID(), 'overlay_text', true);
          $overlay_img_id = (int) get_post_meta(get_the_ID(), 'overlay_image_id', true);
          $overlay_img    = $overlay_img_id ? wp_get_attachment_image($overlay_img_id, 'medium', false, ['class'=>'work__mark','alt'=>'']) : '';

          // tags
          $tags = get_the_terms(get_the_ID(), 'work_tag'); ?>

          <article class="work">
            <a class="work__link" href="<?php the_permalink(); ?>">
              <figure class="work__media">
                <?php echo $thumb; ?>
                <?php if ($overlay_img || $overlay_text): ?>
                  <figcaption class="work__overlay">
                    <?php echo $overlay_img ?: '<span class="work__bigbrand">'.esc_html($overlay_text).'</span>'; ?>
                  </figcaption>
                <?php endif; ?>
              </figure>
              <h3 class="work__title"><?php the_title(); ?></h3>
            </a>

            <?php if (!is_wp_error($tags) && !empty($tags)): ?>
              <ul class="work__tags">
                <?php foreach ($tags as $t): ?>
                  <li><?php echo esc_html($t->name); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </article>

        <?php endwhile; wp_reset_postdata();
      else: ?>
        <p style="color:#cfcfcf">Aucun projet pour le moment.</p>
      <?php endif; ?>

    </div>
  </section>
</main>
<?php get_footer(); ?>
