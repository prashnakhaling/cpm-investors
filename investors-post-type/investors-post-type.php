<?php
/*
Plugin Name: CPM Investors Profile
Plugin URI: https://example.com/
Description: A plugin to create a custom post type for Investors.
Version: 1.0
Author: Ranju and Prashna
License: GPL2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Function to register the custom post type
function cpm_investor_register_post_type() {

    $labels = array(
        'name'                  => _x( 'Investors', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Investor', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Investors', 'textdomain' ),
        'name_admin_bar'        => __( 'Investor', 'textdomain' ),
        'archives'              => __( 'Investor Archives', 'textdomain' ),
        'attributes'            => __( 'Investor Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Investor:', 'textdomain' ),
        'all_items'             => __( 'All Investors', 'textdomain' ),
        'add_new_item'          => __( 'Add New Investor', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Investor', 'textdomain' ),
        'edit_item'             => __( 'Edit Investor', 'textdomain' ),
        'update_item'           => __( 'Update Investor', 'textdomain' ),
        'view_item'             => __( 'View Investor', 'textdomain' ),
        'view_items'            => __( 'View Investors', 'textdomain' ),
        'search_items'          => __( 'Search Investor', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into investor', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this investor', 'textdomain' ),
        'items_list'            => __( 'Investors list', 'textdomain' ),
        'items_list_navigation' => __( 'Investors list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter investors list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Investor', 'textdomain' ),
        'description'           => __( 'Post Type for Investors', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'cpm_investor', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpm_investor_register_post_type', 0 );

?>
