<footer id="footer">

  <div class="container">
    <div class="row top">
      
      <div class="col-xs-12 col-sm-6 col-md-4">
        <?php dynamic_sidebar('first-footer'); ?>
      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('second-footer'); ?>
      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('third-footer'); ?>
      </div>
    </div>

    <div class="row bottom">
      <div class="col-xs-12">
        <?php dynamic_sidebar('fourth-footer') ?>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>