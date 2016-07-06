<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

<section class="one-hundred-width main-content-archives nine columns">
  <div class="main-content-archives nine columns">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); ?>
              <h2 class="subbytitle"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            <?php
            } //end while
        } //end if
      ?>
      </div>
  </section>
<?php get_footer(); ?>
