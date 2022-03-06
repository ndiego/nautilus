<?php
/**
 * Frost: Block Patterns
 *
 * @since Nautilus 1.0.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Nautilus 1.0.0
 */
function frost_register_block_patterns() {

	$block_pattern_categories = array(
		'footer' => array( 'label' => __( 'Footer', 'nautilus' ) ),
		'header' => array( 'label' => __( 'Header', 'nautilus' ) ),
		'page'   => array( 'label' => __( 'Page', 'nautilus' ) ),
		'query'  => array( 'label' => __( 'Query', 'nautilus' ) ),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
        'header-dark',
		'header-light',
		'hidden-404',
	);

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'nautilus/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}
}
add_action( 'init', 'frost_register_block_patterns', 9 );