/**
 * Adds border support to Column, Heading, and Paragraph blocks.
 *
 * @param {Object} settings - The original block settings.
 * @param {string} name - The name of the block.
 *
 * @returns {Object} The modified block settings with added border support.
 */
function addBorderSupport( settings, name ) {

	// Bail early if the block does not have supports.
	if ( ! settings?.supports ) {
		return settings;
	}

	// Only apply to Column, Heading, and Paragraph blocks.
  	if (
		name === 'core/column' ||
		name === 'core/heading' ||
		name === 'core/paragraph' 
	) {
		return Object.assign( {}, settings, {
			supports: Object.assign( settings.supports, {
				__experimentalBorder: {
					color: true,
					style: true,
					width: true,
					radius: true,
					__experimentalDefaultControls: {
						color: false,
						style: false,
						width: false,
						radius: false,
					}
				},
			} ),
		} );
	}

	return settings;
}

wp.hooks.addFilter(
	'blocks.registerBlockType',
	'modify-block-supports/add-border-support',
	addBorderSupport,
);

/**
 * Adds shadow support to Group blocks.
 *
 * @param {Object} settings - The original block settings.
 * @param {string} name - The name of the block.
 *
 * @returns {Object} The modified block settings with added shadow support.
 */
function addShadowSupport( settings, name ) {

	// Bail early if the block does not have supports.
	if ( ! settings?.supports ) {
		return settings;
	}

	// Only apply to Group blocks.
  	if ( name === 'core/group' ) {
		return Object.assign( {}, settings, {
			supports: Object.assign( settings.supports, {
				shadow: true,
			} ),
		} );
	}

	return settings;
}

wp.hooks.addFilter(
	'blocks.registerBlockType',
	'modify-block-supports/add-shadow-support',
	addShadowSupport,
);

/**
 * Modifies the default typography settings for blocks with typography support.
 * 
 * @param {Object} settings - The original block settings.
 * 
 * @returns {Object} The modified block settings with updated typography defaults.
 */
function modifyTypographyDefaults( settings ) {

	// Only apply to blocks with typography support.
	if ( settings?.supports?.typography ) {
		return Object.assign( {}, settings, {
			supports: Object.assign( settings.supports, {
				typography: Object.assign( settings.supports.typography, {
					__experimentalDefaultControls: {
						fontAppearance: true,
						fontSize: true
					}
				} ),
			} ),
		} );
	}

	return settings;
}

wp.hooks.addFilter(
	'blocks.registerBlockType',
	'modify-block-supports/modify-typography-defaults',
	modifyTypographyDefaults,
);
