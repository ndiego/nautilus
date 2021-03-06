<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nautilus
 * @since 0.1.0
 */

/**
 * Add support for core block visual styles.
 * Styles load in both the editor and the front end.
 *
 * @since 0.1.0
 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
 *
 * @return void
 */
function nautilus_support() {

    // Add support for block styles.
	add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'nautilus_support' );

/**
 * Enqueue styles.
 *
 * @since 0.1.0
 *
 * @return void
 */
function nautilus_styles() {

	// Register theme stylesheet.
	wp_register_style(
		'nautilus-styles',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' ),
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'nautilus-styles' );

}
add_action( 'wp_enqueue_scripts', 'nautilus_styles' );

/**
 * Enqueue editor styles.
 * 
 * @since 0.1.0
 *
 * @return void
 */
function nautilus_editor_styles() {

	// WordPress core block styles can only be unregistered using JavaScript.
	wp_enqueue_script(
		'nautilus-unregister-block-styles',
		get_theme_file_uri( '/assets/js/unregister-block-styles.js' ),
		array( 'wp-blocks', 'wp-dom' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'admin_init', 'nautilus_editor_styles' );

/**
 * Enqueue individual block stylesheets.
 * Reference: https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/
 *
 * @since 0.1.0
 */
function nautilus_enqueue_block_stylesheets() {

	// Get all available block types.
	$block_types = glob( dirname( __FILE__ ) . '/assets/blocks/*/' );
	$block_types = array_map(
		function( $type_path ) { return basename( $type_path ); },
		$block_types
	);

	foreach ( $block_types as $block_type ) {

		// Get all available block styles of the given block type.
		$block_styles = glob( dirname( __FILE__ ) . '/assets/blocks/' . $block_type . '/*.css' );
		$block_styles = array_map(
			function( $styles_path ) { return basename( $styles_path, '.css' ); },
			$block_styles
		);

		foreach ( $block_styles as $block_style ) {

			// Enqueue individual block stylesheets.
			wp_enqueue_block_style(
				$block_type . '/' . $block_style,
				array(
					'handle' => 'nautilus-theme-' . $block_type . '-' . $block_style . '-styles',
					'src'    => get_theme_file_uri( 'assets/blocks/' . $block_type . '/' . $block_style . '.css' ),

					// Add "path" to allow inlining of block styles when possible.
					'path'   => get_theme_file_path( 'assets/blocks/' . $block_type . '/' . $block_style . '.css' ),
				),
			);
		}
	}
}
add_action( 'after_setup_theme', 'nautilus_enqueue_block_stylesheets' );

/**
 * Registers block patterns and categories.
 *
 * @since 0.1.0
 */
function nautilus_register_block_pattern_categories() {

	$block_pattern_categories = array(
		'footer' => array( 'label' => __( 'Footers', 'nautilus' ) ),
		'header' => array( 'label' => __( 'Headers', 'nautilus' ) ),
		'page'   => array( 'label' => __( 'Page', 'nautilus' ) ),
		'query'  => array( 'label' => __( 'Query', 'nautilus' ) ),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'nautilus_register_block_pattern_categories' );

/**
 * Register block styles.
 *
 * @since 0.1.0
 */
function nautilus_register_block_styles() {

    $block_styles = array(
        'core/archives' => array(
            'horizontal' => __( 'Horizontal', 'nautilus' ),
        ),
        'core/categories' => array(
            'horizontal' => __( 'Horizontal', 'nautilus' ),
        ),
        // 'core/image'      => array(
        //     'caption-left'  => __( 'Caption Left', 'nautilus' ),
        //     'caption-right' => __( 'Caption Right', 'nautilus' ),
        // ),
        // 'core/gallery'    => array(
        //     'caption-left'  => __( 'Caption Left', 'nautilus' ),
        //     'caption-right' => __( 'Caption Right', 'nautilus' ),
        // ),
        'core/post-terms' => array(
            'outline' => __( 'Outline', 'nautilus' ),
        ),
        'core/quote' => array(
            'fancy' => __( 'Fancy', 'nautilus' ),
        ),
        'core/separator'  => array(
            'waves' => __( 'Waves', 'nautilus' ),
        ),
    );

    foreach( $block_styles as $block => $styles ) {
        foreach ( $styles as $style_name => $style_label ) {
            register_block_style(
                $block,
                array(
                    'name'  => $style_name,
                    'label' => $style_label,
                )
            );
        }
    }
}
add_action( 'init', 'nautilus_register_block_styles' );

// Customize the comments form.
function nautilus_edit_comment_form_defaults( $defaults ) {
	$defaults[ 'title_reply' ] = __( 'Share Your Thoughts', 'nautilus' );
	return $defaults;
}
add_action( 'comment_form_defaults', 'nautilus_edit_comment_form_defaults' );
