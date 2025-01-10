import { __ } from '@wordpress/i18n';

/**
 * Format the seat label.
 *
 * @since 6.1.0
 *
 * @param {string} seatLabel The seat label.
 *
 * @return {string} The formatted seat label.
 */
const formatSeatLabel = ( seatLabel ) => {
	return seatLabel ? ` - ${__( 'Seat', 'event-tickets-plus' )} ${seatLabel}` : '';
};

/**
 * Filters the data being passed into the Attendee registration template for each ticket,
 * adding the Seat Label information.
 *
 * @since 6.1.0
 *
 * @param {Object} data The data object.
 * @param {number} ticketId The ticket ID.
 * @param {number} offSet The offset.
 * @param {Object} dom The DOM object.
 *
 * @return {Object} The filtered data object.
 */
export const filterTicketTemplateSeatLabels = ( data, ticketId, offSet, dom = null ) => {
	dom = dom || document;
	// Select the ticket object when we are in the registration page.
	const ticketObjectOnPage  = jQuery( dom ).find( '#tribe-block-tickets-item-' + ticketId );

	// Select the ticket object when we are in the modal.
	const ticketObjectOnModal = jQuery( dom ).find( '#tribe-modal-tickets-item-' + ticketId );

	// Select the ticket object regardless of page or modal.
	const ticketObject = ticketObjectOnPage.length ? ticketObjectOnPage : ticketObjectOnModal;

	// Get the seat labels from the ticket object.
	const seatLabels = ticketObject.length ? ticketObject.data( 'seat-labels' ) : '';
	// We should not be here without Seating data, but if we are lets make sure we are not breaking the render of fields.
	if ( ! seatLabels ) {
		return data;
	}

	const seatLabelsSplit = seatLabels.split(',');

	// Get and format the seat label.
	const seat_label = formatSeatLabel( seatLabelsSplit.length > offSet ? seatLabelsSplit[ offSet ] : '' );

	// Add the seat label and registration id to the data object.
	return {
		...data,
		seat_label,
	};
};
