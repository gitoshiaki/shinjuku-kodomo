<?php
/**
 * Dan Theme Customizer
 *
 * @package Dan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'        => '.site-title a',
		'render_callback' => 'dan_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector'        => '.site-description',
		'render_callback' => 'dan_customize_partial_blogdescription',
	) );

	/**
	 * Theme options.
	 */
	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options', 'dan' ),
		'priority' => 130, // Before Additional CSS.
	) );

	$num_sections = apply_filters( 'dan_front_page_sections', 4 );

	for ( $i = 1; $i <= $num_sections; $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
 		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			'label'           => sprintf( __( 'Front Page Section %d Content', 'dan' ), $i ),
			'description'     => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'dan' ) ),
			'section'         => 'theme_options',
			'type'            => 'dropdown-pages',
			'allow_addition'  => true,
			'active_callback' => 'dan_is_static_front_page',
		) );
 
		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'dan_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'dan_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dan_customize_preview_js() {
	wp_enqueue_script( 'dan_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), false, true );
}
add_action( 'customize_preview_init', 'dan_customize_preview_js' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dan_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function dan_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
