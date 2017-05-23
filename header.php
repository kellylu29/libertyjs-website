<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5879HH');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<title>LibertyJS</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div
		class="ljs2017-menu__container ljs2017-menu__menu-close"
		id="ljs2017-menu__container">
		<div
			class="ljs2017-menu__menu-toggle"
			id="ljs2017-menu__menu-toggle">
			<i
				class="fa fa-bars"
				aria-hidden="true"></i>
			<i
				class="fa fa-times"
				aria-hidden="true"></i>
		</div>
		<div
			class="ljs2017-menu__menu-container">
			<a href="/">
				<img
					class="ljs2017-menu__logo"
					src="<?php echo get_stylesheet_directory_uri(); ?>/img/ljs2017-secondary-logo-black-blue.png"
					alt="LibertyJS Logo">
			</a>
			<div class="ljs2017-menu__menu-logo"></div>
			<div
				class="ljs2017-menu__menu-menu"
				id="ljs2017-menu__menu-menu">
				<ul>
					<li><a href="/#about">About</a></li>
					<li><a href="/#keynotes">Keynotes</a></li>
					<li><a href="/#buy-a-ticket">Buy a Ticket</a></li>
					<li><a href="/#venue">Venue</a></li>
					<li><a href="/volunteer">Volunteer</a></li>
					<li><a href="/#2016">#2016</a></li>
					<li><a href="/#faqs">FAQs</a></li>
				</ul>
			</div>
		</div>
	</div>
