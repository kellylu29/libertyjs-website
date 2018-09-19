<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Libertyjs_Speaker_Post_Type' ) ) {

	/**
	 * Main class.
	 *
	 * @since 1.0
	 */
	class Libertyjs_Speaker_Post_Type {

		private static $_instance = null;

		/**
		 * Add hooks for custom post types
		 *
		 * @since 1.0
		 */
		protected function __construct() {
			add_action( 'add_meta_boxes', array( $this, 'add_speaker_metabox' ) );
			add_action( 'save_post', array( $this, 'save_speaker_custom_fields' ) );
			add_action( 'init', array( $this, 'add_speaker_post_type' ), 0 );
		}

		/**
		 * Adds custom fields to speaker edit UI
		 *
		 * @since 1.0
		 */
		public function add_speaker_metabox() {
			add_meta_box( 'speaker_fields', 'Speaker Details', array( $this, 'add_speaker_custom_fields' ), 'speakers', 'normal', 'default' );
		}

		/**
		 * Adds custom fields to speaker edit UI
		 *
		 * @since 1.0
		 */
		public function add_speaker_custom_fields() {
			global $post;
			$custom = get_post_custom( $post->ID );
			?>
			<style>.width99 { width: 99%; }</style>
			<p>
				<label>Name:</label><br />
				<input
					type="text"
					name="name"
					value="<?php echo esc_attr( $custom['name'][0] ); ?>"
					class="width99" />
			</p>
			<p>
				<label>Secondary:</label><br />
				<input
					type="text"
					name="secondary"
					value="<?php echo esc_attr( $custom['secondary'][0] ); ?>" class="width99" />
			</p>
			<p>
				<label>Image:</label><br />
				<input
					type="text"
					name="image"
					value="<?php echo esc_attr( $custom['image'][0] ); ?>"
					class="width99" />
			</p>
			<p>
				<label>Facebook:</label><br />
				<input
					type="text"
					name="facebook"
					value="<?php echo esc_attr( $custom['facebook'][0] ); ?>"
					class="width99" />
			</p>
			<p>
				<label>Instagram:</label><br />
				<input
					type="text"
					name="instagram"
					value="<?php echo esc_attr( $custom['instagram'][0] ); ?>"
					class="width99" />
			</p>
			<p>
				<label>LinkedIn:</label><br />
				<input
					type="text"
					name="linkedin"
					value="<?php echo esc_attr( $custom['linkedin'][0] ); ?>"
					class="width99" />
			</p>
			<p>
				<label>Twitter:</label><br />
				<input
					type="text"
					name="twitter"
					value="<?php echo esc_attr( $custom['twitter'][0] ); ?>"
					class="width99" />
			</p>
			<?php
			wp_nonce_field( 'save_speaker', 'speaker_' . $post->ID );
		}

		/**
		 * Add speaker post type
		 *
		 * @since 1.0
		 */
		public function add_speaker_post_type() {
			$labels = array(
				'name'               => _x( 'Speakers', 'Post Type General Name', 'twentythirteen' ),
				'singular_name'      => _x( 'Speaker', 'Post Type Singular Name', 'twentythirteen' ),
				'menu_name'          => __( 'Speakers', 'libertyjs' ),
				'parent_item_colon'  => __( 'Parent Movie', 'libertyjs' ),
				'all_items'          => __( 'All Speakers', 'libertyjs' ),
				'view_item'          => __( 'View Speaker', 'libertyjs' ),
				'add_new_item'       => __( 'Add New Speaker', 'libertyjs' ),
				'add_new'            => __( 'Add New', 'libertyjs' ),
				'edit_item'          => __( 'Edit Speaker', 'libertyjs' ),
				'update_item'        => __( 'Update Speaker', 'libertyjs' ),
				'search_items'       => __( 'Search Speaker', 'libertyjs' ),
				'not_found'          => __( 'Not Found', 'libertyjs' ),
				'not_found_in_trash' => __( 'Not found in Trash', 'libertyjs' ),
			);

			$args = array(
				'label'               => __( 'speakers', 'libertyjs' ),
				'description'         => __( 'LibertyJS Speakers', 'libertyjs' ),
				'labels'              => $labels,
				'supports'            => array(),
				'taxonomies'          => array( 'category', 'post_tag' ),
				'hierarchical'        => false,
				'public'              => true,
				'rewrite'             => 'talks',
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

			register_post_type( 'speakers', $args );
		}

		/**
		 *
		 *
		 * @since 1.0
		 */
		public function save_speaker_custom_fields() {
			global $post;
			if (
				get_post_type() !== 'speakers' ||
				! wp_verify_nonce( $_POST[ 'speaker_' . $post->ID ], 'save_speaker' )
			) {
				return;
			}
			if ( $post ) {
				update_post_meta( $post->ID, 'facebook', $_POST['facebook'] );
				update_post_meta( $post->ID, 'image', $_POST['image'] );
				update_post_meta( $post->ID, 'instagram', $_POST['instagram'] );
				update_post_meta( $post->ID, 'linkedin', $_POST['linkedin'] );
				update_post_meta( $post->ID, 'name', $_POST['name'] );
				update_post_meta( $post->ID, 'secondary', $_POST['secondary'] );
				update_post_meta( $post->ID, 'twitter', $_POST['twitter'] );
			} // End if().
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

Libertyjs_Speaker_Post_Type::instance();
