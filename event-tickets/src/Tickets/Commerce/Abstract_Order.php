<?php

namespace TEC\Tickets\Commerce;

use TEC\Tickets\Commerce\Status\Status_Handler;
use TEC\Tickets\Commerce\Utils\Value;
use Tribe__Utils__Array as Arr;
use WP_Error;

/**
 * @todo backend move common methods from Commerce/Order, Manual/Order and PayPal/Order here.
 */
abstract class Abstract_Order {

	/**
	 * Get a value object set with the combined price of a list of tickets.
	 *
	 * @since 5.2.3
	 *
	 * @param int[]|float[] $items a list of values
	 *
	 * @return Value;
	 */
	public function get_value_total( $items ) {
		$sub_totals  = Value::build_list( array_filter( wp_list_pluck( $items, 'sub_total' ) ) );
		$total_value = Value::create();

		return $total_value->total( $sub_totals );
	}

	/**
	 * Prepare purchaser data received from the checkout page to include in orders.
	 *
	 * @since 5.3.0
	 *
	 * @param array $data user data input in the checkout page
	 *
	 * @return array
	 */
	public function prepare_purchaser_data( $data ) {
		$purchaser = [
			'purchaser_user_id'    => 0,
			'purchaser_full_name'  => static::$placeholder_name,
			'purchaser_first_name' => static::$placeholder_name,
			'purchaser_last_name'  => static::$placeholder_name,
			'purchaser_email'      => '',
		];

		if ( empty( $data['billing_details'] ) && is_user_logged_in() ) {
			$user                              = wp_get_current_user();
			$purchaser['purchaser_user_id']    = $user->ID;
			$purchaser['purchaser_full_name']  = $user->first_name . ' ' . $user->last_name;
			$purchaser['purchaser_first_name'] = $user->first_name;
			$purchaser['purchaser_last_name']  = $user->last_name;
			$purchaser['purchaser_email']      = $user->user_email;

			return $purchaser;
		}

		if ( ! empty( $data['billing_details']['first_name'] ) ) {
			$purchaser['purchaser_first_name'] = sanitize_text_field( $data['billing_details']['first_name'] );
		}
		if ( ! empty( $data['billing_details']['last_name'] ) ) {
			$purchaser['purchaser_last_name'] = sanitize_text_field( $data['billing_details']['last_name'] );
		}
		if ( ! empty( $data['billing_details']['name'] ) ) {
			$purchaser['purchaser_full_name'] = sanitize_text_field( $data['billing_details']['name'] );
		}
		if ( ! empty( $data['billing_details']['email'] ) ) {
			$purchaser['purchaser_email'] = sanitize_email( $data['billing_details']['email'] );
		}

		/**
		 * Allows filtering the billing details gathered before creating an order
		 *
		 * @since 5.3.0
		 *
		 * @param array $purchaser the list of billing details gathered from the front-end and/or logged-in users
		 * @param array $data      the entire data array received from the checkout page
		 */
		return apply_filters( 'tec_tickets_commerce_order_purchaser_data', $purchaser, $data );
	}

	/**
	 * Prepare purchaser data received from the checkout page to include in orders.
	 *
	 * @since 5.3.0
	 *
	 * @param array $data user data input in the checkout page.
	 *
	 * @return array|WP_Error
	 */
	public function get_purchaser_data( $data ) {

		if ( is_user_logged_in() ) {
			$user                              = wp_get_current_user();
			$purchaser['purchaser_user_id']    = $user->ID;
			$purchaser['purchaser_full_name']  = $user->first_name . ' ' . $user->last_name;
			$purchaser['purchaser_first_name'] = $user->first_name;
			$purchaser['purchaser_last_name']  = $user->last_name;
			$purchaser['purchaser_email']      = $user->user_email;

			$purchaser['purchaser_jobtitle']      = get_user_meta( $user->ID, 'job_title', true );
			$purchaser['purchaser_organization']      = get_user_meta( $user->ID, 'organization', true );

			if (isset($_COOKIE['session_address'])) {
				$purchaser['purchaser_session_address'] = $_COOKIE['session_address'];
			}
			if (isset($_COOKIE['consent'])) {
				$purchaser['purchaser_consent'] = $_COOKIE['consent'];
			}

			return $purchaser;
		}

		if ( empty( $data['purchaser'] ) ) {
			return new WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser name and email.', 'event-tickets' ), [ 'status' => 400 ] );
		}

		$purchaser_data = array_map( 'sanitize_text_field', $data['purchaser'] );

		if ( empty( $purchaser_data['name'] ) ) {
			return new WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser name.', 'event-tickets' ), [ 'status' => 400 ] );
		}

		if ( empty( $purchaser_data['email'] ) || ! is_email( $purchaser_data['email'] ) ) {
			return new WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser email.', 'event-tickets' ), [ 'status' => 400 ] );
		}

		if ( ! isset( $purchaser_data['jobtitle'] ) || empty( $purchaser_data['jobtitle'] ) ) {
			return new \WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser jobtitle.', 'event-tickets' ), [ 'status' => 400 ] );
		}
		if ( ! isset( $purchaser_data['organization'] ) || empty( $purchaser_data['organization'] ) ) {
			return new \WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser organization.', 'event-tickets' ), [ 'status' => 400 ] );
		}
		if ( ! isset( $purchaser_data['session_address'] ) || empty( $purchaser_data['session_address'] ) ) {
			return new \WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser session_address.', 'event-tickets' ), [ 'status' => 400 ] );
		}
		if ( ! isset( $purchaser_data['consent'] ) || empty( $purchaser_data['consent'] ) ) {
			return new \WP_Error( 'invalid-purchaser-info', __( 'Please provide a valid purchaser consent.', 'event-tickets' ), [ 'status' => 400 ] );
		}
		$purchaser = [
			'purchaser_user_id'    => 0,
			'purchaser_full_name'  => $purchaser_data['name'].' '.$purchaser_data['last_name'],
			'purchaser_first_name' => $purchaser_data['name'],
			'purchaser_last_name'  => $purchaser_data['last_name'],
			'purchaser_email'      => sanitize_email( $purchaser_data['email'] ),
			'purchaser_jobtitle'      => $purchaser_data['jobtitle'],
			'purchaser_organization'      => $purchaser_data['organization'],
			'purchaser_session_address'      => $purchaser_data['session_address'],
			'purchaser_consent'      => $purchaser_data['consent'],
		];

		/**
		 * Filter the purchaser details for creating an order.
		 *
		 * @since 5.3.0
		 *
		 * @param array $purchaser the list of purchaser info gathered from the front-end and/or logged-in users.
		 * @param array $data      the entire data array received from the checkout page.
		 */
		return apply_filters( 'tec_tickets_commerce_order_purchaser_data', $purchaser, $data );
	}

	/**
	 * Get the order Gateway Admin URL link by order ID
	 *
	 * @since 5.6.0
	 *
	 * @param \WP_Post $order The order post object.
	 *
	 * @return ?string
	 */
	public function get_gateway_dashboard_url_by_order( \WP_Post $order ): ?string {
		return null;
	}
}
