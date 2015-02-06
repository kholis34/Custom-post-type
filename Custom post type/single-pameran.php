<?php
/**
 * Template Name: Sales Events
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>
<?php get_header();?>
<div class="large-12 columns single">
  <div class="row content">
  	<?php $loop = new WP_Query( array( 'post_type' => 'pameran', 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  	<div class="large-12 columns maincontent">
  		<h2 class="artikel"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  		<p><?php the_content();?></p>
  	</div><!--end 12 maincontent-->
<?php endwhile; ?>
  </div><!--end row content-->
</div><!--end 12 single-->
<?php get_footer();?>