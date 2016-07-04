<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <!-- Links to our Style.css file -->
  <link rel="stylesheet" type="text/css" href="
    <?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
  <div class="container"> <!-- Begin Container -->
    <header class="row">
      <!-- Begin Sidebar -->
      <div class="three columns leftsidenav">
          <div id="logo">
              am
          </div>
          <!-- Navigation -->
          <div class="nine columns">
            <?php
                wp_nav_menu(array(
                  'sort_column' => 'menu_order',
                  'container_class' => 'blank-menu-header'
                ));
            ?>
          </div>
          <?php dynamic_sidebar('front-sidebar-widget'); ?>
      </div>
      <!-- End Sidebar -->

      <!-- Header Picture and Title -->
      <div class="nine columns headbgtitle">
          <div id="siteandsub">
            <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url;?>">
              <?php bloginfo('name'); ?>
            </a></h1>
            <h2 class="sub-title"><a href="<?php $url = home_url('/'); echo $url;?>"><?php bloginfo('description'); ?></a></h2>
          </div>
      </div>
    </header>
    <div class="row">

      <!-- Navigation -->
      <!-- <div class="twelve columns"> -->
        <?php
            // wp_nav_menu(array(
            //   'sort_column' => 'menu_order',
            //   'container_class' => 'blank-menu-header'
            // ));
        ?>
      <!-- </div> -->
    </div>
