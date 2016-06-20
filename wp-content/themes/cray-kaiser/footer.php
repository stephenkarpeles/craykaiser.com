<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cray-kaiser
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrapper">
		<div class="container footer-top">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-branding">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/CKL-footer-logo.png" />
					</div>
				</div> <!-- col-md-3 -->
				<div class="col-md-9">
					<div class="footer-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</div>
				</div> <!-- .col-md-9 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
		<div class="container footer-middle">
			<div class="row">
				<div class="col-md-3">
					<p>Oak Brook<br>
					1901 S. Meyers Road, Suite 230<br>
					Oakbrook Terrace, IL 60181<br>
					Phone: (630) 953-4900<br>
					Fax: (630) 953-4905</p>
				</div> <!-- .col-md-3 -->
				<div class="col-md-2">	
					<p>Joliet<br>
					1000 Essington Road<br>
					Joliet, IL 60435<br>
					Phone: (815) 725-2946<br>
					Fax: (815) 744-1681</p>
				</div> <!-- .col-md-2 -->
				<div class="col-md-3">
					<p>Chicago<br>
					Monadnock Building<br>
					53 West Jackson Street, Suite 828<br>
					Chicago, IL 60604<br>
					Phone: (630) 953-4900<br>
					Fax: (630) 953-4905</p>
				</div> <!-- .col-md-3 -->
				<div class="col-md-4">
					<div class="footer-search">
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
							<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
						</form>
					</div>
					<div class="footer-social">
						<a href="https://www.linkedin.com/company/1128644?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1128644%2Cidx%3A3-1-4%2CtarId%3A1453126499112%2Ctas%3Acray%20kaiser" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
					</div>
				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div>
	</footer><!-- #colophon -->
	<div class="bottom-footer">
		<div class="container footer-bottom">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-copyright">
					All Materials &copy; <?php echo date('Y'); ?> Cray Kaiser LTD. <a class="bottom-footer-link" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/CKL1601-Cray-Kaiser-Privacy-Policy-FINAL.pdf"><span class="privacy-divider"></span>Privacy Policy</a>&nbsp;|&nbsp;<a class="bottom-footer-link" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/pdf/CKL1601-Website-Intent-020216FINAL.pdf"><span class="privacy-divider"></span>Website Intent</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Flexnav -->
<script>
  jQuery(".flexnav").flexNav();
</script>

</body>
</html>