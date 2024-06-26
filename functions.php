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
 * Registers custom pattern categories.
 *
 * @since 0.1.0
 */
function nautilus_register_pattern_categories() {

	register_block_pattern_category(
		'nautilus_page',
		array(
			'label'       => _x( 'Pages', 'Block pattern category', 'nautilus' ),
			'description' => __( 'A collection of full page layouts.', 'nautilus' ),
		)
	);
}
add_action( 'init', 'nautilus_register_pattern_categories' );

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
			'outline'    => __( 'Outline', 'nautilus' ),
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
		'core/tag-cloud'  => array(
            'outline' => __( 'Outline', 'nautilus' ),
        ),
		'core/post-terms'  => array(
            'outline' => __( 'Outline', 'nautilus' ),
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
	$defaults[ 'title_reply' ] = __( 'Share your thoughts', 'nautilus' );
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

/**
 * Filter the output of an image block to wrap the <img> element in a <span>.
 * This is needed to apply image custom image borders on images with captions.
 *
 * @since 0.1.0
 */
function custom_wrap_image_block( $block_content, $block ) {

	// Check if the block content contains a <figcaption> element
	if ( strpos( $block_content, 'figcaption' ) !== false ) {
		
		// Append the caption class to the block.
		$p = new WP_HTML_Tag_Processor( $block_content );
		if ( $p->next_tag() ) {
			$p->add_class( 'has-caption' );
		}
		$block_content = $p->get_updated_html();
		$block_content = preg_replace( '/(<img[^>]+>)/', '<span class="wp-block-image-container">$1</span>', $block_content );
	}

    return $block_content;
}
add_filter( 'render_block_core/image', 'custom_wrap_image_block', 10, 2 );
