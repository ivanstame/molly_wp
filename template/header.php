<!DOCTYPE html>
<html style="font-size: 13px;" <?php language_attributes(); ?>>
	<head>
    <!-- custom-insertion-point -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/tachyons@4/css/tachyons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Arapey&family=Roboto&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/bbc76bf8a0.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <header id="head" class="fl bg-near-white mid-gray w-100">
      <div id="logo-spacer" class="fl inline-flex justify-center align-center w-10-l">
        <a href="/" id="logo-wrapper" class="fl">
          <img id="logo-home" src="<?php echo get_bloginfo('template_directory')?>/images/molly_logo_white.png" />
        </a>
      </div>
      <nav id="navbar" class="fl inline-flex justify-center align-center w-90-l">
        <ul id="thing-that-expands" class="flex flex-wrap justify-center ma0">
          <li class="prog-menu-item ttu b edmondsans mid-gray"><a href="/about">Meet the Doc</a></li>
          <li class="prog-menu-item ttu b edmondsans mid-gray "><a href="/treatments">Treatments</a></li>
          <li class="prog-menu-item ttu b edmondsans mid-gray "><a href="/location">Location</a></li>
          <li class="prog-menu-item ttu b edmondsans mid-gray "><a href="/faq">FAQs</a></li>
          <li class="prog-menu-item ttu b edmondsans mid-gray "><a href="/new-patient-forms">Patient Forms</a></li>
          <li class="prog-menu-item ttu b edmondsans mid-gray "><a href="https://mollyclairedc.janeapp.com/#staff_member/1">Book Appointment</a></li>
        </ul>
      </nav>
      <div id="btn-spacer" class="fl inline-flex justify-start align-center w-10-l">
        <button id="menu-btn" onclick="" class="w-4 edmondsans nav-btn-stay mid-gray self-center">Menu</button>
      </div>
    </header>
