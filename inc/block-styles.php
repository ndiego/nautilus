<?php
/**
 * Nautilus: Block Styles
 *
 * @since 0.1.0
 */

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



