<?php
/**
 * Manual Attendees: Ticket information section.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets-plus/admin-views/manual-attendees/ticket-information.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://m.tri.be/1amp
 *
 * @since 5.2.0
 * @since 6.1.2 Corrected template override path to include `admin-views/`.
 *
 * @version 6.1.2
 *
 * @var Tribe__Tickets_Plus__Admin__Views    $this             [Global] Template object.
 * @var false|Tribe__Tickets__Tickets        $provider         [Global] The tickets provider class.
 * @var string                               $provider_class   [Global] The tickets provider class name.
 * @var string                               $provider_orm     [Global] The tickets provider ORM name.
 * @var null|Tribe__Tickets__Ticket_Object   $ticket           [Global] The ticket to add/edit.
 * @var null|int                             $ticket_id        [Global] The ticket ID to add/edit.
 * @var Tribe__Tickets__Ticket_Object[]      $tickets          [Global] List of tickets for the given post.
 * @var Tribe__Tickets__Commerce__Currency   $currency         [Global] Tribe Currency object.
 * @var bool                                 $is_rsvp          [Global] True if the ticket to add/edit an attendee is RSVP.
 * @var int                                  $attendee_id      [Global] The attendee ID.
 * @var string                               $attendee_name    [Global] The attendee name.
 * @var string                               $attendee_email   [Global] The attendee email.
 * @var int                                  $post_id          [Global] The post ID.
 * @var string                               $step             [Global] The step the views are on.
 * @var bool                                 $multiple_tickets [Global] If there's more than one ticket for the event.
 */

// If there's no ticket or if we're adding an attendee and there's more than one ticket, bail.
if ( empty( $ticket_id ) || ( 'add' === $step && $multiple_tickets ) ) {
	return;
}

?>
<div class="tribe-tickets__manual-attendees-ticket-info tribe-common-h6">
	<span class="tribe-tickets__manual-attendees-ticket-info-name tribe-common-h--alt"><?php echo esc_html( $ticket->name ); ?></span>
	<?php $this->template( 'manual-attendees/ticket-information/price' ); ?>
</div>
