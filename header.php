<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- Links to our Style.css file -->
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
  <!--
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src-"custom.js"></script>
-->
<body>
  <div class="header-wrapper">
    <header class="container">
      <div class="row">
        <div class="twelve columns">
            <img alt="headerpic" class="headerphoto" id="header" src="http://www.ashley-childers.com/WIEfinal/wp-content/uploads/2016/11/slicksheader.png"/ width=100%>

            <span class='blank-menu-header'><?php
              wp_nav_menu(array(
                  'sort_column' => 'menu_order',
                  'container_class' => 'blank-menu-header'
                ));?>
              </span>
            </div>
        </div>
      </div>
  </header>
  </div>
