<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cray-kaiser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="featured-image">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('featured-thumb'); } ?>
		</div>
		<div class="deck">
			<?php if ( is_post_type_archive( 'hs-posts' ) ) { ?>
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_field( 'ck_link_to_hubspot_content' ); ?>" target="_blank"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_field( 'ck_deck_hs_posts' ); ?>
					<a href="<?php the_field( 'ck_link_to_hubspot_content' ); ?>" target="_blank" class="read-more">Read More >></a>
				</div><!-- .entry-content -->
				
			<?php } else { ?>
				<header class="entry-header">
					<div class="entry-meta">
						<?php cray_kaiser_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_field( 'ck_deck_posts' ); ?>
					<a href="<?php the_permalink(); ?>" class="read-more">Read More >></a>
				</div><!-- .entry-content -->
			<?php } ?>
		</div>
	</div>
</article><!-- #post-## -->
