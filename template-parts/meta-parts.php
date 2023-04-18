<ul class="meta">

<!-- Date -->
  <li>
    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
  </li>

<!-- Author -->
  <li>
    <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
  </li>

<!-- Category -->
  <li>
    <i class="fa fa-tag"></i> <?php the_category(', '); ?>
  </li>

</ul>