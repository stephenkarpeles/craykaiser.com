<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cray-kaiser
 */

get_header(); ?>


			
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
		
				<?php
				if ( have_posts() ) :
		
					if ( is_home() && ! is_front_page() ) : ?>
						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header>
					<?php
					endif;
					?>
					<div class="counter-container">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
			
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
			
						endwhile;
						?>
						<div class="container">
							<?php echo ck_get_the_posts_navigation(); ?>
						</div>
					</div>
				<?php
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif; ?>
		
				</main><!-- #main -->
			</div><!-- #primary -->


<?php
get_footer();