<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Libertyjs_Talk_Post_Type' ) ) {

	/**
	 * Main class.
	 *
	 * @since 1.0
	 */
	class Libertyjs_Talk_Post_Type {

		private static $_instance = null;

		/**
		 * Add hooks for custom post types
		 *
		 * @since 1.0
		 */
		protected function __construct() {
			add_action( 'init', array( $this, 'add_talk_post_type' ), 0 );
		}

		/**
		 * Add talk post type
		 *
		 * @since 1.0
		 */
		public function add_talk_post_type() {
			$labels = array(
				'name'               => _x( 'Talks', 'Post Type General Name', 'twentythirteen' ),
				'singular_name'      => _x( 'Talk', 'Post Type Singular Name', 'twentythirteen' ),
				'menu_name'          => __( 'Talks', 'libertyjs' ),
				'parent_item_colon'  => __( 'Parent Talk', 'libertyjs' ),
				'all_items'          => __( 'All Talks', 'libertyjs' ),
				'view_item'          => __( 'View Talk', 'libertyjs' ),
				'add_new_item'       => __( 'Add New Talk', 'libertyjs' ),
				'add_new'            => __( 'Add New', 'libertyjs' ),
				'edit_item'          => __( 'Edit Talk', 'libertyjs' ),
				'update_item'        => __( 'Update Talk', 'libertyjs' ),
				'search_items'       => __( 'Search Talk', 'libertyjs' ),
				'not_found'          => __( 'Not Found', 'libertyjs' ),
				'not_found_in_trash' => __( 'Not found in Trash', 'libertyjs' ),
			);

			$args = array(
				'label'               => __( 'talks', 'libertyjs' ),
				'description'         => __( 'LibertyJS Talks', 'libertyjs' ),
				'labels'              => $labels,
				'supports'            => array(),
				'taxonomies'          => array( 'category', 'post_tag' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 5,
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);

			register_post_type( 'talks', $args );
		}

		/**
		 * Create instance of class
		 * @return object
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		} // End instance()

	}

} // End if().

Libertyjs_Talk_Post_Type::instance();
