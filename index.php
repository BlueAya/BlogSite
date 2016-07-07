<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

    <!-- Begin Section Container -->
    <section id="main-content" class="row nine columns">

      <!-- Sidebar -->
      <!-- <div class="four columns leftsidenav"> -->
        <!-- Navigation -->
        <!-- <div class="twelve columns"> -->
          <?php
              // wp_nav_menu(array(
              //   'sort_column' => 'menu_order',
              //   'container_class' => 'blank-menu-header'
              // ));
          ?>
        <!-- </div> -->
          <!-- <?php dynamic_sidebar('front-sidebar-widget'); ?> -->
      <!-- </div> -->

      <!-- End Sidebar -->
      <div class="seven columns main-content">
          <!-- Begin Loop -->
          <?php query_posts('cat=1&showposts=10'); ?>
              <?php if ( have_posts() ) {
                  while ( have_posts() ) {
                    the_post(); ?>
                <div class="row">
                    <div class="three columns index-thumbnail">

                    <?php if ( has_post_thumbnail() ) { ?>
                              <?php the_post_thumbnail(array(400,400)); ?>
                          <?php }
                    ?>
                  </div>
                      <div class="nine columns">
                          <h3><a class="titlenearpermalinks" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <!-- <?php the_excerpt(); ?> -->
                          <a class="permalinks" href="<?php the_permalink(); ?>">Read More</a>
                      </div>
                  </div>

                    <?php
                    } //end while
                } //end if
              ?>
              <!-- End Loop -->
      </div>
      <div class="five columns main-content-right">
          <!-- Begin Loop -->
          <?php query_posts('cat=-1&showposts=10'); ?>
              <?php if ( have_posts() ) {
                  while ( have_posts() ) {
                    the_post(); ?>
                <div class="row">
                    <div class="three columns index-thumbnail">
                    <?php if ( has_post_thumbnail() ) { ?>
                              <?php the_post_thumbnail(array(350,350)); ?>
                          <?php }
                    ?>
                  </div>
                      <div class="nine columns">
                          <h3><a class="titlenearpermalinks2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <a class="permalinks2" href="<?php the_permalink(); ?>">Read More</a>
                      </div>
                  </div>

                    <?php
                    } //end while
                } //end if
              ?>
              <!-- End Loop -->
      </div>
    </section>
    <!-- End Section Container -->

    <!-- Begin Footer -->
    <?php get_footer(); ?>
<!-- End Footer -->
