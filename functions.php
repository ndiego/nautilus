<?php
/**
 * Nautilus functions and definitions.
 *
 * @package Nautilus
 * @author  Nick Diego
 * @license GNU General Public License v2 or later
 * @link    https://github.com/ndiego/nautilus
 */

/**
 * Add theme supports and styles.
 *
 * @since 0.1.0
 *
 * @return void
 */
function nautilus_setup() {

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'nautilus_setup' );

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
 * Add/remove block styles and variations.
 * 
 * @since 0.1.0
 *
 * @return void
 */
function nautilus_editor_script_styles() {

	// WordPress core block styles can only be unregistered using JavaScript.
	wp_enqueue_script( 
		'nautilus-block-styles-variations', 
		get_template_directory_uri() . '/assets/js/block-styles-variations.js', 
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// WordPress core block styles can only be unregistered using JavaScript.
	wp_enqueue_script( 
		'nautilus-modify-block-supports', 
		get_template_directory_uri() . '/assets/js/modify-block-supports.js', 
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Enqueue custom Editor styles.
	wp_enqueue_style( 
		'nautilus-editor-styles', 
		get_template_directory_uri() . '/editor.css', 
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'enqueue_block_editor_assets', 'nautilus_editor_script_styles' );

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
        'core/image'      => array(
            'caption-left'  => __( 'Caption Left', 'nautilus' ),
            'caption-right' => __( 'Caption Right', 'nautilus' ),
        ),
        'core/gallery'    => array(
            'caption-left'  => __( 'Caption Left', 'nautilus' ),
            'caption-right' => __( 'Caption Right', 'nautilus' ),
        ),
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

/**
 * Customize the comments form. 
 *
 * @since 0.1.0
 */
function nautilus_edit_comment_form_defaults( $defaults ) {
	$defaults[ 'title_reply' ] = __( 'Share Your Thoughts', 'nautilus' );
	return $defaults;
}
add_action( 'comment_form_defaults', 'nautilus_edit_comment_form_defaults' );

/**
 * Remove the colon and give archive title prefixes a class. 
 *
 * @since 0.1.0
 */
function nautilus_modify_archive_title_prefixes( $title, $original_title, $prefix ) {
	$prefix_no_colon = str_replace( ":", "", $prefix );

    return sprintf( '<span class="query-title-prefix">%s</span>%s', $prefix_no_colon, $original_title ); 
} 
add_filter( 'get_the_archive_title', 'nautilus_modify_archive_title_prefixes', 10, 3 );
