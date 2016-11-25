  <!-- Begin Header -->
    <?php get_header(); ?>
  <!-- End Header -->

  <!-- Begin Section Container -->
  <div class="container"
      <div class="row">
          <div class="four columns">
            <?php dynamic_sidebar('index-one'); ?>
          </div>
          <div class="four columns">
            <?php dynamic_sidebar('index-two'); ?>
          </div>
          <div class="four columns">
            <?php dynamic_sidebar('index-three'); ?>
          </div>
      </div>
  </div>
  <!-- End Section Container -->

  <!-- Begin Fooder -->
      <?php get_footer(); ?>
<!-- End Footer -->
