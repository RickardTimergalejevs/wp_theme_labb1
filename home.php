<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          
          <h1><?php wp_title('') ?></h1>

          <?php while (have_posts()) {
            the_post();
            get_template_part('template-parts/article-parts');
          } ?>
          <?php the_posts_pagination(); ?>
        </div>

        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php get_sidebar(); ?>
        </aside>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>