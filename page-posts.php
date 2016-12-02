<?php

/* Template Name: Blog Page */

get_header(); ?>

<!-- End Header -->


<!-- Begin Loop -->
<?php
if ( have_posts() ) {
  while ( have_posts() ){
    the_post(); ?>
    <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
      }
    ?>
    <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?>
    </a></h3>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Read More</a></p>

  <?php
  } //end while
} //end if
?>
<!-- End Loop -->
