<?php
/**
 * Template part for displaying single team members.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cray-kaiser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="team-thumb">
						<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						} 
						?>
					</div>
				</div>
				<div class="col-md-4">
					<?php
						if ( is_single() ) {
							the_title( '<h1 class="entry-title">', '</h1>' );
						} else {
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						}
			
					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php cray_kaiser_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
					<div class="member-titles">
						<h2>
						  <?php if( get_field('ck_team_education_certification') ): ?>
								<?php the_field('ck_team_education_certification'); ?> | 
						  <?php endif; ?>
							<?php the_field('ck_team_position_title'); ?></h2>
					</div>
					<div class="member-email">
						<a href="mailto:<?php the_field('ck_team_email_address'); ?>">Email >></a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'cray-kaiser' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cray-kaiser' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="lighter-side">
		<h3>The Lighter Side</h3>
		<?php the_field('ck_lighter_side_description'); ?>
	</div>

	<footer class="entry-footer">
		<?php cray_kaiser_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
