<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="main-content-archives nine-columns">
    <div class="nine columns main-content-archives">
        <?php if( have_posts() ) :?>
            <h1><?php printf(
              __('Search Results for: %s'),
              '<span>' . get_search_query() . '</span>' );
            ?></h1>
            <?php
            while (have_posts()) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <?php the_content();
            endwhile;
         else : ?>

         <div class="extrasearch-margin main-content-archives nine columns">
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        </div>
        <?php endif; ?>
    </div>
    <!-- <div class="four columns">
        <?php //get_sidebar(); ?>
    </div> -->
</div>

<?php get_footer(); ?>
