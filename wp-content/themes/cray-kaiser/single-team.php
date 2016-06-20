<?php
/**
 * The template for displaying all single team members.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cray-kaiser
 */

get_header(); ?>
<div class="container">		  	
	<div class="row">		  		
		<div class="col-md-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<a href="/about/ck-team/" class="back-to-team">&larr; Back to CK Team</a>

				<?php
				while ( have_posts() ) : the_post();
		
					get_template_part( 'template-parts/content', 'team', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		
				endwhile; // End of the loop.
				?>
		
				</main><!-- #main -->
			</div><!-- #primary -->

		</div>
		<div class="col-md-4">
			<?php get_sidebar('page'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
