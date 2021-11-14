<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since 0.1.0
 */

// Include block styles.
//require get_template_directory() . '/inc/block-styles.php';

// Include block patterns.
//require get_template_directory() . '/inc/block-patterns.php';

if ( ! function_exists( 'nautilus_support' ) ) :

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

endif;


if ( ! function_exists( 'nautilus_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function nautilus_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'nautilus-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' ),
		);

		// Add styles inline.
		wp_add_inline_style( 'nautilus-style', nautilus_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'nautilus-style' );

	}
	add_action( 'wp_enqueue_scripts', 'nautilus_styles' );

endif;


if ( ! function_exists( 'nautilus_editor_styles' ) ) :

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

endif;


if ( ! function_exists( 'nautilus_get_font_face_styles' ) ) :

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

        @font-face{
            font-family: 'Outfit';
            font-weight: 100 900;
            font-style: normal;
            font-stretch: normal;
            src: url('" . get_theme_file_uri( 'assets/fonts/outfit/Outfit[wght].ttf' ) . "') format('truetype');
        }
		";

	}

endif;

// Add block styles.
require get_template_directory() . '/inc/block-styles.php';
