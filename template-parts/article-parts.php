<article>
<!-- Image -->
  <img src="<?php the_post_thumbnail_url() ?>">

<!-- Title -->
  <h2>
    <a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
  </h2>

<!-- Post meta -->
  <?php get_template_part('template-parts/meta-parts', 'meta'); ?>

<!-- Description -->
  <?php the_excerpt(); ?>
</article>