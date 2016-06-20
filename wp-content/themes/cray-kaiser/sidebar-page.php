<?php
/**
 * Page Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cray-kaiser
 */
?>

<aside id="secondary" class="widget-area" role="complementary">

  <!-- Hubspot Blocks -->
  <?php if( have_rows('hubspot_blocks') ): ?>
    <div class="hubspot-block-wrap">
      <?php while( have_rows('hubspot_blocks') ): the_row(); 

        // vars
        $image = get_sub_field('image');
        $blurb = get_sub_field('blurb');
        $link = get_sub_field('read_more_link');

        ?>

        <div class="hubspot-image-block">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          <div class="hubspot-blurb">
            <?php echo $blurb; ?>
            <a href="<?php echo $link; ?>">Read More &raquo;</a>       
          </div>
        </div> 
      <?php endwhile; ?> 
    </div><!-- .hubspot-block-wrap -->

      <?php //else: ?>  

    <!--<div class="hubspot-block-wrap">
      <div class="hubspot-image-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hubspot-fpo-1.jpg" alt="" />
        <div class="hubspot-blurb">
          This is a small blurb about the picture. Change as needed.
          <a href="#">Read More &raquo;</a>       
        </div>
      </div>   
    </div>-->
    
  <?php endif; ?>

  <!-- Testimonial -->
	<?php if( get_field('testimonial') ): ?>
    <div class="testimonial-wrap">
      <div class="testimonial">&ldquo;<?php the_field('testimonial'); ?>&rdquo;</div>
      <div class="testimonial-author">&ndash; <?php the_field('testimonial_author'); ?>,</div>
      <div class="testimonial-author-title"><?php the_field('testimonial_author_title'); ?></div>
    </div>
  <?php // else: ?>
    <!-- <div class="testimonial-wrap">
      <div class="testimonial">
        &ldquo;This is a default testimonial that could be set up to appear on a page if nothing else appears. We can remove this if we want, but it's at least a placeholder for now.&rdquo;
      </div>
      <div class="testimonial-author">&ndash; Testimonial Author,</div>
      <div class="testimonial-author-title">Author Title</div>
    </div>-->
  <?php endif; ?>

<!-- Office Locations -->
	<div class="locations-wrap">
		<?php if(get_field('ck_office_locations')): ?>
		<ul>
		<?php while(has_sub_field('ck_office_locations')): ?>
			<li><?php the_sub_field('ck_office_locations_address'); ?></li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	</div>
	
</aside><!-- #secondary -->