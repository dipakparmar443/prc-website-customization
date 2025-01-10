<?php
use TEC\Common\Contracts\Provider\Controller as Controller_Contract;

/**
 * Events Gutenberg Assets
 *
 * @since 4.9
 */
class Tribe__Tickets_Plus__Editor__Assets extends Controller_Contract { // phpcs:ignore StellarWP.Classes.ValidClassName.NotSnakeCase, PEAR.NamingConventions.ValidClassName.Invalid, Generic.Classes.OpeningBraceSameLine.ContentAfterBrace
	/**
	 * @since 4.9
	 * @deprecated TBD
	 *
	 * @return void
	 */
	public function hook() {
		_deprecated_function( __METHOD__, 'TBD' );
	}

	/**
	 * Registers and Enqueues the assets
	 *
	 * @since 4.9
	 */
	public function do_register(): void {
		$plugin = Tribe__Tickets_Plus__Main::instance();

		tribe_asset(
			$plugin,
			'tribe-tickets-plus-gutenberg-vendor',
			'app/vendor.js',
			[],
			'enqueue_block_editor_assets',
			[
				'in_footer'    => false,
				'localize'     => [],
				'conditionals' => tribe_callback( 'tickets.editor', 'current_post_supports_tickets' ),
				'priority'     => 200,
			]
		);

		tribe_asset(
			$plugin,
			'tribe-tickets-plus-gutenberg-data',
			'app/data.js',
			/**
			 * @todo revise this dependencies
			 */
			[
				'react',
				'react-dom',
				'thickbox',
				'wp-components',
				'wp-blocks',
				'wp-i18n',
				'wp-element',
				'wp-editor',
			],
			'enqueue_block_editor_assets',
			[
				'in_footer'    => false,
				'localize'     => [],
				'conditionals' => tribe_callback( 'tickets.editor', 'current_post_supports_tickets' ),
				'priority'     => 200,
			]
		);
	}

	/**
	 * Unregisters the assets
	 *
	 * @since TBD
	 */
	public function unregister(): void {
		// Do nothing.
	}
}
