<?php
/**
 * Template Name: Team Landing
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cray-kaiser
 */

get_header(); ?>

<div class="container">		  	
	<div class="row">		  		
		<div class="col-md-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">					  

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
					
							<div class="container">
								<div class="row">
									<div class="col-md-10">
									  <!-- Display Alternate Headline if it exists. Otherwise show 'the_title' -->
										<?php
											$value = get_field( 'alternate_headline' );
											if( $value ) {
												echo '<h1>' . $value . '</h1>';
											} else {
												the_title( '<h1 class="entry-title">', '</h1>' );
											}
										?>
										
										<?php if( get_field('headline_intro_text') ): ?>
											<div class="headline-intro"><?php the_field('headline_intro_text'); ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>	
					
						</header><!-- .entry-header -->

						<div class="team-grid">
							<div class="container">
							  <div class="row">
							  	<div class="col-md-12">
									  <h2 class="team-group-heading">Principals</h2>
									</div>
								</div>
								<div class="row" id="teamBlock1">
									<?php
									$args = array(
										'post_type' => 'team',
										'tax_query' => array(
											array(
												'taxonomy' => 'team-type',
												'field'    => 'slug',
												'terms'    => 'principals',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) { $a=0; $b=0;
										?>
										<div class="col-md-3">
											<?php
											while ( $query->have_posts() ) { $a++;
											$query->the_post();
											echo '<h2 class="team-' . $a . ' name"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
											}
											?>
										</div>
										<div class="col-md-9">
											<?php
											while ( $query->have_posts() ) { $b++;
											$query->the_post();
											?>
											<div class="team-<?php echo $b; ?>">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('team-thumb');?></a>
												<span class="overlay">
													<a href="<?php the_permalink(); ?>">Read Full Bio >></a>
												</span>												
												<a class="team-member-title" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</div>
											<?php
											}
											?>
										</div>
										<?php
										} else {
										// no posts found
									}
									/* Restore original Post Data */
									wp_reset_postdata();
									?>
								</div>
								<h2 class="team-group-heading">Managers</h2>
								<div class="row" id="teamBlock2">
									<?php
									$args = array(
										'post_type' => 'team',
										'tax_query' => array(
											array(
												'taxonomy' => 'team-type',
												'field'    => 'slug',
												'terms'    => 'managers',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) { $i=100; $j=100;
										?>
										<div class="col-md-3">
											<?php
											while ( $query->have_posts() ) { $i++;
											$query->the_post();
											echo '<h2 class="team-' . $i . ' name"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
											}
											?>
										</div>
										<div class="col-md-9">
											<?php
											while ( $query->have_posts() ) { $j++;
											$query->the_post();
											?>
											<div class="team-<?php echo $j; ?>">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('team-thumb');?></a>
												<span class="overlay">
													<a href="<?php the_permalink(); ?>">Read Full Bio >></a>
												</span>
												<a class="team-member-title" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</div>
											<?php
											}
											?>
										</div>
										<?php
										} else {
										// no posts found
									}
									/* Restore original Post Data */
									wp_reset_postdata();
									?>
								</div>
								<h2 class="team-group-heading">Supervisors</h2>
								<div class="row" id="teamBlock3">
									<?php
									$args = array(
										'post_type' => 'team',
										'tax_query' => array(
											array(
												'taxonomy' => 'team-type',
												'field'    => 'slug',
												'terms'    => 'supervisors',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) { $a=0; $b=0;
										?>
										<div class="col-md-3">
											<?php
											while ( $query->have_posts() ) { $a++;
											$query->the_post();
											echo '<h2 class="team-' . $a . ' name"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
											}
											?>
										</div>
										<div class="col-md-9">
											<?php
											while ( $query->have_posts() ) { $b++;
											$query->the_post();
											?>
											<div class="team-<?php echo $b; ?>">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('team-thumb');?></a>
												<span class="overlay">
													<a href="<?php the_permalink(); ?>">Read Full Bio >></a>
												</span>
												<a class="team-member-title" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</div>
											<?php
											}
											?>
										</div>
										<?php
										} else {
										// no posts found
									}
									/* Restore original Post Data */
									wp_reset_postdata();
									?>
								</div>
								<h2 class="team-group-heading">Seniors</h2>
								<div class="row" id="teamBlock4">
									<?php
									$args = array(
										'post_type' => 'team',
										'tax_query' => array(
											array(
												'taxonomy' => 'team-type',
												'field'    => 'slug',
												'terms'    => 'seniors',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) { $a=0; $b=0;
										?>
										<div class="col-md-3">
											<?php
											while ( $query->have_posts() ) { $a++;
											$query->the_post();
											echo '<h2 class="team-' . $a . ' name"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
											}
											?>
										</div>
										<div class="col-md-9">
											<?php
											while ( $query->have_posts() ) { $b++;
											$query->the_post();
											?>
											<div class="team-<?php echo $b; ?>">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('team-thumb');?></a>
												<span class="overlay">
													<a href="<?php the_permalink(); ?>">Connect >></a>
												</span>
												<a class="team-member-title" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</div>
											<?php
											}
											?>
										</div>
										<?php
										} else {
										// no posts found
									}
									/* Restore original Post Data */
									wp_reset_postdata();
									?>
								</div>
							</div>
						</div>

					</article><!-- #post-## -->

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col-md-12 -->

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>