<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

<!-- Begin Section Container -->
<div class="container"
  <div class="indexmain">
    <div class="row">
        <div class="four columns index-widget">
          <?php dynamic_sidebar('index-one'); ?>
        </div>
        <div class="four columns index-widget">
          <?php dynamic_sidebar('index-two'); ?>
        </div>
        <div class="four columns index-widget">
          <?php dynamic_sidebar('index-three'); ?>
        </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="indexadarea">
        <div class="four columns">
          <img alt="indexphoto" id="indeximage" src="http://www.ashley-childers.com/WIEfinal/wp-content/uploads/2016/11/shake-1.png"/>
        </div>
        <div class="eight columns">
          <img alt="indexad" id="indexad" src="http://www.ashley-childers.com/WIEfinal/wp-content/uploads/2016/11/ad.png"/>
        </div>
      </div>
    </div>
</div>
<!-- End Section Container -->

<!-- Begin Fooder -->
    <?php get_footer(); ?>
<!-- End Footer -->
