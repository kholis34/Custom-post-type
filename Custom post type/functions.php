<?php
//Sales Event Plugin
add_action('init', 'cptui_register_my_cpt_pameran');
function cptui_register_my_cpt_pameran() {
register_post_type('pameran', array(
'label' => 'Pameran',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'pameran', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Pameran',
  'singular_name' => 'Pameran',
  'menu_name' => 'Pameran',
  'add_new' => 'Add Pameran',
  'add_new_item' => 'Add New Pameran',
  'edit' => 'Edit',
  'edit_item' => 'Edit Pameran',
  'new_item' => 'New Pameran',
  'view' => 'View Pameran',
  'view_item' => 'View Pameran',
  'search_items' => 'Search Pameran',
  'not_found' => 'No Pameran Found',
  'not_found_in_trash' => 'No Pameran Found in Trash',
  'parent' => 'Parent Pameran',
)
) ); }
//show post type
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'page', 'events', 'salesevents', 'quote' ) );

    return $query;
}
//Supaya Custom Post Type support thumbnail
add_theme_support( 'post-thumbnails', array( 'post', 'pameran' ) );
?>