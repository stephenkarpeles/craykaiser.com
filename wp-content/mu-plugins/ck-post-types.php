<?php

/**
 * Plugin Name: Cray Kaiser Post Types
 * Plugin URI: http://craykaiser.com
 * Description: Keeping custom post type registration out of the theme!
 * Version: 1.0
 * Author: Emil Wisch
 * Author URI: http://teamodea.com
 * License: GPL2
 */


// Register new custom post types

add_action( 'init', 'ck_post_types_init' );

function ck_post_types_init() {

	$hubspot_content_labels = array(
		'name'               => _x( 'HS Posts', 'post type general name', 'ck' ),
		'singular_name'      => _x( 'HS Post', 'post type singular name', 'ck' ),
		'menu_name'          => _x( 'HS Posts', 'admin menu', 'ck' ),
		'name_admin_bar'     => _x( 'HS Posts', 'add new on admin bar', 'ck' ),
		'add_new'            => _x( 'Add New', 'HS post', 'ck' ),
		'add_new_item'       => __( 'Add New HS Post', 'ck' ),
		'new_item'           => __( 'New HS Post', 'ck' ),
		'edit_item'          => __( 'Edit HS Post', 'ck' ),
		'view_item'          => __( 'View HS Post', 'ck' ),
		'all_items'          => __( 'All HS Posts', 'ck' ),
		'search_items'       => __( 'Search HS Posts', 'ck' ),
		'parent_item_colon'  => __( 'Parent HS Posts:', 'ck' ),
		'not_found'          => __( 'No HS Posts found.', 'ck' ),
		'not_found_in_trash' => __( 'No HS Posts found in Trash.', 'ck' )
	);

	$hubspot_content_args = array(
		'labels'             => $hubspot_content_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'resources/white-papers-articles-case-studies' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'hs-posts', $hubspot_content_args );
	
	$team_labels = array(
		'name'               => _x( 'Team Members', 'post type general name', 'ck' ),
		'singular_name'      => _x( 'Team Member', 'post type singular name', 'ck' ),
		'menu_name'          => _x( 'Team', 'admin menu', 'ck' ),
		'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'ck' ),
		'add_new'            => _x( 'Add New', 'team member', 'ck' ),
		'add_new_item'       => __( 'Add New Team Member', 'ck' ),
		'new_item'           => __( 'New Team Member', 'ck' ),
		'edit_item'          => __( 'Edit Team Member', 'ck' ),
		'view_item'          => __( 'View Team Member', 'ck' ),
		'all_items'          => __( 'All Team Members', 'ck' ),
		'search_items'       => __( 'Search Team Members', 'ck' ),
		'parent_item_colon'  => __( 'Parent Team Members:', 'ck' ),
		'not_found'          => __( 'No Team Members found.', 'ck' ),
		'not_found_in_trash' => __( 'No Team Members found in Trash.', 'ck' )
	);

	$team_args = array(
		'labels'             => $team_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team-member' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'team', $team_args );
}

// Register taxonomies

add_action( 'init', 'ck_create_taxonomies', 0 );

function ck_create_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'HS Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'HS Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search HS Categories' ),
		'all_items'         => __( 'All HS Categories' ),
		'parent_item'       => __( 'Parent HS Category' ),
		'parent_item_colon' => __( 'Parent HS Category:' ),
		'edit_item'         => __( 'Edit HS Category' ),
		'update_item'       => __( 'Update HS Category' ),
		'add_new_item'      => __( 'Add New HS Category' ),
		'new_item_name'     => __( 'New HS Category Name' ),
		'menu_name'         => __( 'HS Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'hs-category' ),
	);

	register_taxonomy( 'hs-category', array( 'hs-posts' ), $args );
	
	$labels = array(
		'name'              => _x( 'Team Member Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Team Member Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Team Member Types' ),
		'all_items'         => __( 'All Team Member Types' ),
		'parent_item'       => __( 'Parent Team Member Type' ),
		'parent_item_colon' => __( 'Parent Team Member Type:' ),
		'edit_item'         => __( 'Edit Team Member Type' ),
		'update_item'       => __( 'Update Team Member Type' ),
		'add_new_item'      => __( 'Add New Team Member Type' ),
		'new_item_name'     => __( 'New Team Member Type Name' ),
		'menu_name'         => __( 'Team Member Types' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'team-type' ),
	);

	register_taxonomy( 'team-type', array( 'team' ), $args );

}