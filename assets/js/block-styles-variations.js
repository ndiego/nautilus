wp.domReady( () => {
	// WordPress core block styles can only be unregistered using JavaScript.
	wp.blocks.unregisterBlockStyle( 'core/image', [ 'rounded' ] );
} );