<?php get_header();?>
<div class="large-12 columns single">
  <div class="row content">
  	<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>
  	<div class="large-12 columns maincontent">
  		<h2 class="artikel"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<?php include (TEMPLATEPATH . '/single-tabs.php');?>
  	</div><!--end 12 maincontent-->
<?php endwhile; ?>
          <?php endif; ?>
  </div><!--end row content-->
</div><!--end 12 single-->
<?php get_footer();?>