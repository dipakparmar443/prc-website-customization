import { setIsInterruptable } from "@tec/tickets/seating/frontend/session";

/**
 * Prevents the session from being interrupted when the user is redirected from the AR page to the checkout page.
 *
 * @since 6.1.0
 *
 * @param {HTMLElement|null} dom The DOM element to use as the base for the search.
 */
export function doNotInterruptLeavingToModifyAttendees(dom) {
	dom = dom || document;

	const el = dom.querySelectorAll(".tribe-tickets__commerce-checkout-header-link-modify-attendees");

	el.forEach(e => e.addEventListener("click", () => setIsInterruptable(false)));
}
