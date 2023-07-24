<!DOCTYPE php>
<php lang="en">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Home</title>
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/bicon.min.css" />
		<link href="assets/css/meanmenu.css" rel="stylesheet" />
		<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet" />
		<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet" />
		<link href="assets/css/magnific-popup.css" type="text/css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" ?v=<?= time(); ?> />
		<link href="assets/animate/animate.css" rel="stylesheet" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.php" />
	</head>
	<style>
		body .home-product .single-blog-section {
			min-height: 420px;
		}

		.active-product {
			color: red !important;
		}

		li.active a {
			color: white !important;

		}
	</style>

	<body>
		<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
			<div class="top-wrapper hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-9">
							<div class="top-header-add">
								<ul>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i><span>Call us : </span><a href="tel:+919723468755"> +91 9723468755</a>
									</li>
									<li>
										<i class="fa fa-envelope" aria-hidden="true"></i><span> Email :</span><a href="mailto:enquiry@umiyamachines.com"> enquiry@umiyamachines.com</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 hidden-sm">
							<ul class="header-social-icons">
								<li class="facebook">
									<a href="https://www.facebook.com/umaboymachine/?eid=ARDIKpwL-ES7OwzuQb_rqkFOAFEykCWqOvniDAFkP2CZrK7E7rrx8uoFORJmpQVXSq8-KZZJing-6Sv6" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="twitter">
									<a href="https://twitter.com/UmaboyWood" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="linkedin">
									<a href="https://www.youtube.com/channel/UCRU8znbNTof8CRGg73SlM5w" target="_blank"><i class="fa fa-youtube-play"></i></a>
								</li>
								<li class="pinterest">
									<a href="https://plus.google.com/109015375265611429326" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li class="pinterest">
									<a href="https://www.instagram.com/umaboy_wood_working_machine/" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-bar">
				<div class="container">
					<div class="col-md-12 col-sm-12  col-xs-12 mainmenu-area no-padding">
						<nav class="navbar navbar-default mean-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
									<span class="icon-bar"></span> <span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="ElectricalPlus" /></a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php $pageArr = ['/lamination.php', '/auto-edge-bander.php', '/cutting.php', '/multi-boring.php', '/vacuum-press.php', '/high-speed-router.php', '/spindle-moulder.php']; ?>
								<ul class="mobile-menu nav navbar-nav">
									<li><a <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active-product" <?php   }  ?> href="index.php">Home</a></li>
									<li><a <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active-product" <?php   }  ?> href="about.php">About Us</a></li>
									<li class="product-menu">
										<a href="product.php" class="<?php if (in_array($_SERVER['SCRIPT_NAME'], $pageArr)) {
																			echo 'active-product';
																		} ?> dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <i class="fa hover-inn fa-caret-down"></i></a>
										<ul class="submenu">
											<div class="row">
												<div class="col-lg-12">
													<div class="sub-menu sub-menu-design">
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/lamination.php") {
																		echo 'text-light active';
																	} ?> nav__item">
															<a href="lamination.php" class="nav__item-link">Lamination</a>
														</li>

														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/auto-edge-bander.php") {
																		echo 'text-light active';
																	} ?> nav__item">
															<a href="auto-edge-bander.php" class="nav__item-link">Edge Banding</a>
														</li>
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/cutting.php") {
																		echo 'active';
																	} ?> nav__item">
															<a href="cutting.php" class="nav__item-link">Cutting</a>
														</li>
														<!-- <li class="nav__item">
															<a href="beam-saw.php" class="nav__item-link">Beam Saw</a>
														</li>
														<li class="nav__item">
															<a href="panel-saw.php" class="nav__item-link"
																>Panel Saw</a
															>
														</li> -->
														<!-- <li class="nav__item">
															<a href="auto-edge-bander.php" class="nav__item-link"
																>Auto Edge Bander
															</a>
														</li> -->
														<!-- <li class="nav__item">
															<a href="dust-collector.php" class="nav__item-link"
																>Dust Collector</a
															>
														</li> -->
														<!-- <li class="nav__item">
															<a href="manual-edge-bander.php" class="nav__item-link"
																>Manual Edge Bander</a
															>
														</li> -->
														<!-- <li class="nav__item">
															<a href="post-forming.php" class="nav__item-link"
																>Post Forming</a
															>
														</li> -->
														<!-- <li class="nav__item">
															<a href="roller-press.php" class="nav__item-link"
																>Roller Press</a
															>
														</li> -->
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/multi-boring.php") {
																		echo 'active';
																	} ?> nav__item">
															<a href="multi-boring.php" class="nav__item-link">Multi Boring</a>
														</li>
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/vacuum-press.php") {
																		echo 'active';
																	} ?> nav__item">
															<a href="vacuum-press.php" class="nav__item-link">Doors</a>
														</li>
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/high-speed-router.php") {
																		echo 'active';
																	} ?> nav__item">
															<a href="high-speed-router.php" class="nav__item-link">High Speed Router</a>
														</li>
														<li class="<?php if ($_SERVER['SCRIPT_NAME'] == "/spindle-moulder.php") {
																		echo 'active';
																	} ?> nav__item">
															<a href="spindle-moulder.php" class="nav__item-link">Spindle Moulder</a>
														</li>
													</div>
												</div>
												<!-- <div class="col-lg-6">
													<div class="sub-menu sub-menu-design">
													<li class="nav__item">
															<a href="cutting.php" class="nav__item-link">Cutting</a>
														</li>
														<li class="nav__item">
															<a href="cnc-machining-center.php" class="nav__item-link"
																>CNC Machining Center
															</a>
														</li>
														<li class="nav__item">
															<a href="cnc-routing.php" class="nav__item-link"
																>CNC Router</a
															>
														</li>
														<li class="nav__item">
															<a href="vacuum-press.php" class="nav__item-link"
																>Vacuum Press</a
															>
														</li>
														<li class="nav__item">
															<a href="four-side-moulder.php" class="nav__item-link"
																>Four Side Moulder</a
															>
														</li>
														<li class="nav__item">
															<a href="wide-belt sander.php" class="nav__item-link"
																>Wide Belt Sander</a
															>
														</li>
														<li class="nav__item">
															<a href="high-speed-router.php" class="nav__item-link"
																>High Speed Router</a
															>
														</li>
														<li class="nav__item">
															<a href="heavy-duty-feeder.php" class="nav__item-link"
																>High Speed Feeder</a
															>
														</li>
														<li class="nav__item">
															<a href="spindle-moulder.php" class="nav__item-link"
																>Spindle Moulder</a
															>
														</li>
													</div>
												</div> -->
											</div>
										</ul>
									</li>
									<li><a <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active-product" <?php   }  ?> href="contact.php">Contact Us</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>