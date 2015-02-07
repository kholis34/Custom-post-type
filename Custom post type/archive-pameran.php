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
   <?php
    $args = array(
      'post_type' => 'pameran',
      'tax_query' => array(

      )
    );
    $salesevents = new WP_Query( $args );
    if( $salesevents->have_posts() ) {
      while( $salesevents->have_posts() ) {
        $salesevents->the_post();
        ?>
    <div class="large-12 columns maincontent">
      <h2 class="artikel"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
      <p><?php the_content();?></p>
    </div><!--end 12 maincontent-->
<?php
      }
    }
    else {
      echo 'Oh ohm no Events!';
    }
  ?>
  </div><!--end row content-->
</div><!--end 12 single-->
<?php get_footer();?>
        
