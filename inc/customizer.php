<?php
/**
 * DinaPhotography Theme Customizer
 *
 * @package DinaPhotography
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dina_photography_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'dina_photography_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'dina_photography_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'dina_photography_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dina_photography_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dina_photography_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dina_photography_customize_preview_js() {
	wp_enqueue_script( 'dina-photography-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'dina_photography_customize_preview_js' );

/**
* Adding CPT Projects
*/

function custom_post_type() {

  $projects_labels = array(
      'name'                => _x( 'Projects', 'Post Type General Name', 'dina-photography' ),
      'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'dina-photography' ),
      'menu_name'           => __( 'Projects', 'dina-photography' ),
      'parent_item_colon'   => __( 'Parent Project', 'dina-photography' ),
      'all_items'           => __( 'All Projects', 'dina-photography' ),
      'view_item'           => __( 'View Project', 'dina-photography' ),
      'add_new_item'        => __( 'Add New Project', 'dina-photography' ),
      'add_new'             => __( 'Add New', 'dina-photography' ),
      'edit_item'           => __( 'Edit Project', 'dina-photography' ),
      'update_item'         => __( 'Update Project', 'dina-photography' ),
      'search_items'        => __( 'Search Projects', 'dina-photography' ),
      'not_found'           => __( 'Not Found', 'dina-photography' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'dina-photography' ),
  );

// Set other options for Custom Post Type

  $projects_args = array(
      'label'               => __( 'projects', 'dina-photography' ),
      'description'         => __( 'Projects', 'dina-photography' ),
      'labels'              => $projects_labels,
    // Features this CPT supports in Post Editor
      'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
//      'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_icon'           => 'dashicons-format-image',
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,

  );

  $reviews_labels = array(
      'name'                => _x( 'Reviews', 'Post Type General Name', 'dina-photography' ),
      'singular_name'       => _x( 'Review', 'Post Type Singular Name', 'dina-photography' ),
      'menu_name'           => __( 'Reviews', 'dina-photography' ),
      'parent_item_colon'   => __( 'Parent Review', 'dina-photography' ),
      'all_items'           => __( 'All Reviews', 'dina-photography' ),
      'view_item'           => __( 'View Review', 'dina-photography' ),
      'add_new_item'        => __( 'Add New Review', 'dina-photography' ),
      'add_new'             => __( 'Add New', 'dina-photography' ),
      'edit_item'           => __( 'Edit Review', 'dina-photography' ),
      'update_item'         => __( 'Update Review', 'dina-photography' ),
      'search_items'        => __( 'Search Reviews', 'dina-photography' ),
      'not_found'           => __( 'Not Found', 'dina-photography' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'dina-photography' ),
  );

// Set other options for Custom Post Type

  $reviews_args = array(
      'label'               => __( 'reviews', 'dina-photography' ),
      'description'         => __( 'Reviews', 'dina-photography' ),
      'labels'              => $reviews_labels,
    // Features this CPT supports in Post Editor
      'supports'            => array( 'title', 'editor', 'thumbnail'),
    // You can associate this CPT with a taxonomy or custom taxonomy.
//      'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_icon'           => 'dashicons-format-quote',
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,

  );

  register_post_type( 'projects', $projects_args );
  register_post_type( 'reviews', $reviews_args );

}


add_action( 'init', 'custom_post_type', 0 );
