<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>VerumTrade</title>
		<meta name="description" content="VerumTrade"/>
		<link rel="canonical" href="http://verumtrade.com"/>
		<link rel="shortcut icon" href="<?php bloginfo ('template_directory')?>/assets/images/favicons/favicon_verum.ico">
		<link rel="icon" type="image/png" href="<?php bloginfo ('template_directory')?>/assets/images/favicons/favicon_verum.png" sizes="16x16">
		<link rel="stylesheet" href="<?php bloginfo ('template_directory')?>/assets/css/hamburgers.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


    <?php wp_head(); ?>
	</head>

	<body>
		<header class="header home-page-header">
			<div class="container">
				<nav class="navbar navbar-expand-xl toBottomAnimated" id="tenth">
					<a class="brand" href="/"><img src="<?php bloginfo ('template_directory')?>/assets/images/logo_mob.png" alt=""></a>
					<div class="mob_lang">
						<a href="#">ENG</a>
						<a href="#" class="active">RU</a>
					</div>


					<div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
						<?php wp_nav_menu(array(
							'theme_location'  => 'top',
							'menu'            => 'Primary Menu',
							'container'       => null,
							'menu_class'      => 'navbar-nav',
							'menu_id'         => null,
						)); ?>
						<ul class="navbar-nav">


							<li class="nav-item special-nav-item"><a class="nav-link" href="https://backoffice.verumtrade.com/sign_in"><i class="zmdi zmdi-lock"></i><span>Войти</span></a><a class="nav-link" href="https://backoffice.verumtrade.com/sign_up"><i class="zmdi zmdi-account-add"></i><span>Регистрация</span></a></li>
						</ul>
					</div>
					<button class="hamburger hamburger--spin" id="hamburger" type="button" onclick="openMobileMenu()"> <svg viewBox="0 0 31 25" style="enable-background:new 0 0 31 25;" xml:space="preserve"><path d="M28.2,6.1H2.8C1.3,6.1,0,4.8,0,3.3v0c0-1.5,1.3-2.8,2.8-2.8h25.4c1.5,0,2.8,1.3,2.8,2.8v0C31,4.8,29.7,6.1,28.2,6.1z"/><path d="M28.2,15.5h-16c-1.5,0-2.8-1.3-2.8-2.8v0c0-1.5,1.3-2.8,2.8-2.8h16c1.5,0,2.8,1.3,2.8,2.8v0C31,14.3,29.7,15.5,28.2,15.5z" /><path d="M28.2,25H2.8C1.3,25,0,23.7,0,22.2v0c0-1.5,1.3-2.8,2.8-2.8h25.4c1.5,0,2.8,1.3,2.8,2.8v0C31,23.7,29.7,25,28.2,25z"/></svg></button>
				</nav>
			</div>
		</header>
