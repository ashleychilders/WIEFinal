<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
/*--------------First Index Widget---------------*/
register_sidebar( array(
    'name'          => ('First Index Widget'),
    'id'            => 'index-one',
    'description'   => 'Left widget in the index',
    'before_widget' => '<div class="widget-index widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
    ));

/*-------------- Second Index Widget --------------- */
    register_sidebar( array(
        'name'          => ('Second Index Widget'),
        'id'            => 'index-two',
        'description'   => 'Middle widget in the index',
        'before_widget' => '<div class="widget-index widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      ));

/*-------------- Third Index Widget -------------- */
        register_sidebar( array(
            'name'          => ('Third Index Widget'),
            'id'            => 'index-three',
            'description'   => 'Right widget in the index',
            'before_widget' => '<div class="widget-index widget-right">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
            ));

/*--------------About Page Widget---------------*/
            register_sidebar( array(
                'name'          => ('About Widget'),
                'id'            => 'aboutwid',
                'description'   => 'About widget in the index',
                'before_widget' => '<div class="aboutwid">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>'
                ));


/*--------------First SERVICES Widget---------------*/
          register_sidebar( array(
            'name'          => ('First Services Widget'),
            'id'            => 'service-one',
            'description'   => 'Left widget in services',
            'before_widget' => '<div class="widget-service widget-left">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
            ));

/*-------------- Second SERVICES Widget --------------- */
          register_sidebar( array(
            'name'          => ('Second Services Widget'),
            'id'            => 'services-two',
            'description'   => 'Middle widget in services',
            'before_widget' => '<div class="widget-services widget-middle">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
          ));

/*-------------- Third SERVICES Widget -------------- */
          register_sidebar( array(
            'name'          => ('Third Services Widget'),
            'id'            => 'services-three',
            'description'   => 'Right widget in services',
            'before_widget' => '<div class="widget-services widget-right">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
          ));
/*-------------- Search Widget --------------- */
          register_sidebar( array(
          'name'          => ('Search Widget'),
          'id'            => 'searchwid',
          'description'   => 'Search',
          'before_widget' => '<div class="search">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3>',
          'after_title'   => '</h3>'
                    ));

/*-------------- First Footer Widget --------------- */
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'Left widget in the footer',
        'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
        ));
/*-------------- Second Footer Widget --------------- */
register_sidebar( array(
    'name'          => ('Second Footer Widget'),
    'id'            => 'footer-two',
    'description'   => 'Middle widget in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
    ));
/*-------------- Third Footer Widget -------------- */
register_sidebar( array(
    'name'          => ('Third Footer Widget'),
    'id'            => 'footer-three',
    'description'   => 'Right widget in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
    ));

    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

?>
