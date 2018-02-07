/* global clearInterval:true, document:true, jQuery:true, setInterval:true */
// Countdown! Borrowed heavily from https://codepen.io/SitePoint/pen/MwNPVq
( function() {
	var deadline = new Date( 2017, 10, 16 );

	function getTimeRemaining( endtime ) {
		var t = Date.parse( endtime ) - Date.parse( new Date() );
		var seconds = Math.floor( ( t / 1000 ) % 60 );
		var minutes = Math.floor( ( t / 1000 / 60 ) % 60 );
		var hours = Math.floor( ( t / ( 1000 * 60 * 60 ) ) % 24 );
		var days = Math.floor( t / ( 1000 * 60 * 60 * 24 ) );
		return {
			total: t,
			days: days,
			hours: hours,
			minutes: minutes,
			seconds: seconds,
		};
	}

	function init() {
		var clockDivId = 'clockdiv';
		if ( document.getElementById( clockDivId ) ) {
			initializeClock( clockDivId, deadline );
		}
	}

	function initializeClock( id, endtime ) {
		var clock = document.getElementById( id );
		var daysSpan = clock.querySelector( '.ljs2017-header-cta__countdown-days' );
		var hoursSpan = clock.querySelector( '.ljs2017-header-cta__countdown-hours' );
		var minutesSpan = clock.querySelector( '.ljs2017-header-cta__countdown-minutes' );
		var secondsSpan = clock.querySelector( '.ljs2017-header-cta__countdown-seconds' );
		var timeinterval;

		function updateClock() {
			var t = getTimeRemaining( endtime );

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ( '0' + t.hours ).slice( -2 );
			minutesSpan.innerHTML = ( '0' + t.minutes ).slice( -2 );
			secondsSpan.innerHTML = ( '0' + t.seconds ).slice( -2 );

			if ( t.total <= 0 ) {
				clearInterval( timeinterval );
			}
		}

		updateClock();
		timeinterval = setInterval( updateClock, 1000 );
	}

	document.addEventListener( 'DOMContentLoaded', init );
}() );

( function() {
	function init() {
		addMenuListener();
	}

	function addMenuListener() {
		var toggle = document.getElementById( 'ljs2017-menu__menu-toggle' );
		toggle.addEventListener( 'click', function() {
			toggleMenu();
		} );
		var menu = document.getElementById( 'ljs2017-menu__menu-menu' );
		menu.addEventListener( 'click', function() {
			toggleMenu();
		} );
	}

	function toggleMenu() {
		var container = document.getElementById( 'ljs2017-menu__container' );
		container.classList.toggle( 'ljs2017-menu__menu-open' );
		container.classList.toggle( 'ljs2017-menu__menu-close' );
	}

	document.addEventListener( 'DOMContentLoaded', init );
}() );

( function( $ ) {
	function init() {
		$( '.showlogin' ).parent().hide();
		$( '.wc-forward' ).parent().hide();
		var title = document.querySelector( 'h1.product_title.entry-title' );
		var isTicket = document.querySelector( '.postid-181' ) ||
			document.querySelector( '.postid-9' );
		var titleText = 'Ticket Details';
		if ( ! isTicket ) {
			titleText = 'Sponsor Details';
			var ticketQuantity = document.querySelector( '.wc-box-office-ticket-fields-title' );
			var ticketAdd = document.querySelector(
				'.ljs2017-template-checkout__ticket-add-remove'
			);
			if ( ticketQuantity && ticketAdd ) {
				ticketQuantity.classList.add( 'ljs2017-template-checkout__hidden' );
				ticketAdd.classList.add( 'ljs2017-template-checkout__hidden' );
			}
		}
		if ( title ) {
			title.innerText = titleText;
			ticketListener( title );
			changeContinueButton();
		}
	}

	function changeContinueButton() {
		var updateButton = document.querySelector( 'button.single_add_to_cart_button' );
		updateButton.innerText = 'Continue';
	}

	function incrementTicketQuantity( add ) {
		var quantityNode = document.querySelector( '[name="quantity"]' );
		var increment = add ? 1 : -1;
		var quantity = parseInt( quantityNode.value, 10 );

		// Don't allow removal if one or less
		if ( ! add && quantity < 2 ) {
			return;
		}
		quantityNode.value = quantity + increment;
		$( '[name="quantity"]' ).change();
	}

	function handleTicketFormClick( e ) {
		var srcElement = e.srcElement;
		var classListValue = srcElement.classList.value;
		var addClass = 'ljs2017-template-checkout__add-ticket';
		var removeClass = 'ljs2017-template-checkout__remove-ticket';
		var isAdd = classListValue.indexOf( addClass ) > -1;
		var isRemove = classListValue.indexOf( removeClass ) > -1;
		if ( isAdd || isRemove ) {
			incrementTicketQuantity( isAdd );
		}
	}

	function ticketListener() {
		var tickets = document.querySelector( '.wc-box-office-ticket-form' );
		tickets.addEventListener(
			'click',
			handleTicketFormClick
		);
	}

	document.addEventListener( 'DOMContentLoaded', init );
}( jQuery ) );

// Toggle open close on schedule page
( function() {
	function init() {
		addScheduleListener();
	}

	function addScheduleListener() {
		var toggles = Array.prototype.slice.call(
			document.querySelectorAll( '.ljs2017-template-schedule__speaker' )
		);
		if ( ! toggles.length ) {
			return;
		}
		toggles.forEach( function( toggle ) {
			toggle.addEventListener( 'click', toggleSpeaker );
		} );
	}

	function toggleSpeaker( e ) {
		var speaker = e.currentTarget;
		if ( speaker.classList.contains( 'ljs2017-template-schedule__speaker-show' ) ) {
			speaker.classList.remove( 'ljs2017-template-schedule__speaker-show' );
		} else {
			speaker.classList.add( 'ljs2017-template-schedule__speaker-show' );
		}
	}

	document.addEventListener( 'DOMContentLoaded', init );
}() );
