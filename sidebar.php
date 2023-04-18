<div id="sidebar">
  <?php dynamic_sidebar('first-sidebar') ?>

  <ul role="navigation">

    <li class="pagenav">
      <?php dynamic_sidebar('second-sidebar'); ?>
    </li>

    <li>
      <?php dynamic_sidebar('third-sidebar'); ?>
    </li>

    <li class="categories">
      <?php dynamic_sidebar('fourth-sidebar'); ?>
  </ul>
</div>