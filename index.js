/* global document:true, jQuery:true */
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
		if ( title ) {
			title.innerText = 'Ticket Details';
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
