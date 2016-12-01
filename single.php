<?php get_header(); ?>
  <div class="container">
    <div class="single">
  <div class="row">
      <div class="four columns">
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?></div>
      </div>
<!-- BEGIN PAGE PHP -->
      <div class= "eight columns">
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                      the_post();
                      if ( has_post_thumbnail() ) { ?>

                            <?php } ?>
                                  <h2><?php the_title(); ?></h2>
                                  <?php the_content();
                            endwhile;
                        endif; ?>
             <!-- End Loop -->
      </div>
    </div>
  </div>
  </div>
<!-- End Section Container -->
<?php get_footer(); ?>
