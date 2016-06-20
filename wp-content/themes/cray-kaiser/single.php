<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cray-kaiser
 */

get_header(); ?>
<div class="container">
	<a href="/resources/blog-news-videos/" class="back-to-blog">&larr; Back to All Blog Posts</a>
	<div class="row">		  		
		<div class="col-md-8">
			
			<div id="primary" class="content-area">
								
				<main id="main" class="site-main" role="main">
				
				<?php
				while ( have_posts() ) : the_post();
		
					get_template_part( 'template-parts/content-single', get_post_format() );
		
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					//	comments_template();
					// endif;
		
				endwhile; // End of the loop.
				?>
		
				</main><!-- #main -->
			</div><!-- #primary -->
		
		</div><!-- .col-md-8 -->

	<div class="col-md-4 sidebar">		
			<?php get_sidebar('page'); ?>
		</div><!-- .col-md-4 -->

	</div><!-- .row -->
	<a href="/resources/blog-news-videos/" class="back-to-blog">&larr; Back to All Blog Posts</a>
</div><!-- .container -->

<?php
get_footer();