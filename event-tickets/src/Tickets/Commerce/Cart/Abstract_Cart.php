<?php
/**
 * Abstract Cart
 *
 * @since 5.10.0
 *
 * @package TEC\Tickets\Commerce\Cart
 */

namespace TEC\Tickets\Commerce\Cart;

use TEC\Tickets\Commerce\Utils\Value;
use Tribe__Tickets__Tickets as Tickets;
use Tribe__Tickets__Ticket_Object as Ticket_Object;

/**
 * Class Abstract_Cart
 *
 * @since 5.10.0
 */
abstract class Abstract_Cart implements Cart_Interface {
	/**
	 * Cart total
	 *
	 * @since 5.10.0
	 *
	 * @var null|float
	 */
	public $cart_total = null;

	/**
	 * Get the tickets currently in the cart for a given provider.
	 *
	 * @since 5.10.0
	 *
	 * @param bool $full_item_params Determines all the item params, including event_id, sub_total, and obj.
	 *
	 * @return array<string, mixed> List of items.
	 */
	public function get_items_in_cart( $full_item_params = false ): array {
		$items = $this->get_items();

		// When Items is empty in any capacity return an empty array.
		if ( empty( $items ) ) {
			return [];
		}

		if ( $full_item_params ) {
			$items = array_map(
				static function ( $item ) {
					$item['obj'] = Tickets::load_ticket_object( $item['ticket_id'] );
					// If it's an invalid ticket we just remove it.
					if ( ! $item['obj'] instanceof Ticket_Object ) {
						return null;
					}

					if(is_user_logged_in() ){
						// Fetch ACF fields using appropriate keys
						$discount_event_price_enable = get_field('discounted_price_for_members_enable', $item['obj']->get_event_id());	
						$discount_event_price = get_field('discounted_price_for_members', $item['obj']->get_event_id());
						
						// Check if discount is enabled and the user has a valid membership
						if( $discount_event_price_enable && pr_membership() == true){
							$item['obj']->regular_price = $discount_event_price == "" ? 0 :  $discount_event_price;
							$item['obj']->price = $discount_event_price == "" ? 0 :  $discount_event_price;
						}	
					}

					$sub_total_value = Value::create();
					$sub_total_value->set_value( $item['obj']->price );

					$item['event_id']  = $item['obj']->get_event_id();
					$item['sub_total'] = $sub_total_value->sub_total( $item['quantity'] );
					$item['type']      = 'ticket';
					return $item;
				},
				$items
			);
		}

		return array_filter( $items );
	}

	/**
	 * Get the total of the cart.
	 *
	 * @since 5.10.0
	 *
	 * @return null|float
	 */
	public function get_cart_total() {
		if ( null !== $this->cart_total ) {
			return $this->cart_total;
		}

		$items = $this->get_items_in_cart( true );

		if ( empty( $items ) ) {
			return null;
		}

		foreach ( $items as $item ) {
			$this->cart_total += $item['sub_total']->get_decimal();
		}

		return $this->cart_total;
	}
}
