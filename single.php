<?php get_header(); ?>

<!-- Begin Section Container -->
<section class="main-content-archives nine columns">
  <div class="main-content-archives twelve columns">
      <!-- Begin Loop -->
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();

            if ( has_post_thumbnail() ) { ?>
              <div class="max-width post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <?php } ?>

              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            <?php
            } //end while
        } //end if
      ?>
      <!-- End Loop -->
      </div>
  </section>
<!-- End Section Container -->
<?php get_footer(); ?>
