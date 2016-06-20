<?php
/**
 * Template Name: Family Business Resources
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cray-kaiser
 */

get_header(); ?>


  

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">  

          <div class="archive">
          <!-- Used to mimic design/layout of archive pages -->

            <?php

              // The Query
              $query1 = new WP_Query( array( 'cat' => 53 ) );

              // The Loop
              while ( $query1->have_posts() ) {
                $query1->the_post();
                get_template_part( 'template-parts/content', 'content' );
              }

              wp_reset_postdata();

            ?>

          </div>      

          <div class="counter-container">            
            <div class="container">
              <?php echo ck_get_the_posts_navigation(); ?>
            </div>
          </div>                   

        </main><!-- #main -->
      </div><!-- #primary -->

<?php get_footer(); ?>