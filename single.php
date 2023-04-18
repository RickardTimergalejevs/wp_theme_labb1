<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">

          <?php if (have_posts()) {
            while (have_posts()) {
              the_post(); ?>

              <article>
                <img src="<?php the_post_thumbnail_url(); ?>">
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('template-parts/meta-parts'); ?>
                <?php the_content(); ?>
              </article>
              
          <?php }
          } ?>

        </div>

        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php get_sidebar(); ?>
        </aside>
        
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>