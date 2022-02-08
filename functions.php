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
 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
 *
 * @return void
 */
function nautilus_support() {

    // Add support for block styles.
	add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( get_template_directory_uri() . '/style.css' );
}
add_action( 'after_setup_theme', 'nautilus_support' );

/**
 * Enqueue styles.
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

	// Add styles inline.
	wp_add_inline_style( 'nautilus-styles', nautilus_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'nautilus-styles' );

}
add_action( 'wp_enqueue_scripts', 'nautilus_styles' );

/**
 * Enqueue editor styles.
 *
 * @return void
 */
function nautilus_editor_styles() {

	// Add styles inline.
	wp_add_inline_style( 'wp-block-library', nautilus_get_font_face_styles() );
}
add_action( 'admin_init', 'nautilus_editor_styles' );

/**
 * Get font face styles.
 * Called by functions nautilus_styles() and nautilus_editor_styles() above.
 *
 * @return string
 */
function nautilus_get_font_face_styles() {

	return "
	@font-face{
		font-family: 'Source Serif';
		font-weight: 200 900;
		font-style: normal;
		font-stretch: normal;
		src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
	}

	@font-face{
		font-family: 'Source Serif';
		font-weight: 200 900;
		font-style: italic;
		font-stretch: normal;
		src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
	}

    @font-face{
        font-family: 'Source Sans';
        font-weight: 200 900;
        font-style: normal;
        font-stretch: normal;
        src: url('" . get_theme_file_uri( 'assets/fonts/source-sans/SourceSans3VF-Roman.ttf.woff2' ) . "') format('woff2');
    }

    @font-face{
        font-family: 'Source Sans';
        font-weight: 200 900;
        font-style: italic;
        font-stretch: normal;
        src: url('" . get_theme_file_uri( 'assets/fonts/source-sans/SourceSans3VF-Italic.ttf.woff2' ) . "') format('woff2');
    }
	";
}

/**
 *
 * Reference: https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/
 */
function nautilus_enqueue_core_block_styles() {

	$blocks = array(
		'archives',
		'categories',
		'code',
		'gallery',
		'image',
		'latest-posts',
		'latest-comments',
		'navigation',
		'post-author',
		'post-comments-form',
		'post-featured-image',
		'post-terms',
		'quote',
		'rss',
		'separator',
		'site-title',
		'tag-cloud',
	);

	foreach ( $blocks as $block ) {
		// Enqueue asset per block.
		wp_enqueue_block_style(
			'core/' . $block,
			array(
				'handle' => 'nautilus-core-' . $block . '-styles',
				'src'    => get_theme_file_uri( 'assets/blocks/' . $block . '.css' ),
				'path'   => get_theme_file_path( 'assets/blocks/' . $block . '.css' ), // Add "path" to allow inlining asset.
			),
		);
	}
}
add_action( 'after_setup_theme', 'nautilus_enqueue_core_block_styles' );

// Add block styles.
require get_template_directory() . '/inc/block-styles.php';

register_block_pattern(
	'block-level-locking/test-pattern',
	array(
		'title'       => __( 'Block Level Locking', 'gutenberg-block-level-locking' ),
		'description' => _x( 'A full locked block pattern', 'Block pattern description', 'gutenberg-block-level-locking' ),
		'categories'  => array( 'text' ),
		'content'     => '<!-- wp:paragraph { "dropCap": true, "lock":{"remove": true, "move":true}} -->
		<p>This is a paragraph block that will contain cool text.</p>
		<!-- /wp:paragraph -->
		<!-- wp:image {"id":309,"sizeSlug":"full","linkDestination":"none","lock":{"remove": true, "move":true}} -->
		<figure class="wp-block-image size-full"><img src="https://s.w.org/images/core/5.8/architecture-04.jpg" alt="" class="wp-image-309"/><figcaption>This is fine!</figcaption></figure>
		<!-- /wp:image -->
		<!-- wp:paragraph {"lock":{"remove": true, "move":true}} -->
		<p>This paragraph will also contain some great stuff</p>
		<!-- /wp:paragraph -->',
	)
);
// Register a block pattern.
add_action(
	'init',
	function() {

	}
);
