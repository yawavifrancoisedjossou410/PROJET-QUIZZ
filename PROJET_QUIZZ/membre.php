<?php
session_start();
require_once "fonctions/bdd.php";
include_once "fonctions/contact.php";
$bdd = bdd();
if(!empty($_POST))
    $erreur = contact();
?>
<!DOCTYPE>
<php lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>ATELIER IIA</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/img/image/logo_1.jpg">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.min.css"/>
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="conference-page" style="background-image: url(assets/img/conference_bg.svg);">
	<header class="conference-header-fixed header-fixed">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="container">
			<div class="row conference-header-row">
				<div class="col-sm-3 col-lg-2 col-xl-3">
					<a href="index.php" class="logo"><img src="assets/img/image/logo.jpg" alt="logo" width="70px" height="70px"></a>
				</div>
				<div class="col-sm-9 col-lg-8 col-xl-6">
					<nav class="nav-menu menu">
						<ul class="nav-list">
							<li class="active-page">
								<a href="#">home</a>
							</li>
							<li><a href="#about">ATELIERIIA</a></li>
							<li><a href="#events">évenements</a></li>
							<li><a href="#register">Inscription</a></li>
							<li><a href="journal.php" class="btn">Journal universitaire</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section class="s-conference-slider">
			<div class="conference-slide" style="background-image: url(assets/img/image/2.jpg);">
				<div class="container">
					<div class="conference-slide-item">
						<div class="date">21dec 2019</div>
						<div class="conference-slider-title">Dedicated To</div>
						<h2 class="title"><span>Your Success</span></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="register" class="s-buy-ticket">
		<div class="container">
			<h2 class="title-conference"><span>Devenir membre de l'Atelier IIA</span></h2>
			<div class="row">
				<div class="col-md-2">
					<p></p>
				</div>
				<div class="col-md-4">
					<div class="buy-ticket-left">
						<div class="ticket-contact-cover">
							<div class="ticket-contact-item">
								<br>
								<h5>Nous contactez</h5>
								<br>
								<ul>
									<li><span>Nome:</span>Sow Rokhaya</li>
									<li><span>Téléphone:</span><a href="">77 700-00-00</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					        <?php
                            if(isset($erreurs)) :
                            if($erreurs) :
                            foreach($erreurs as $erreur) :
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="message erreur"><?= $erreur ?></div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            else :
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="message confirmation">Merci! On vous contactera dés que possible</div>
                                </div>
                            </div>
                            <?php
                            endif;
                            endif;
                            ?>
					<div class="buy-ticket-form">
						<form id='contactform' action="" method="POST" name="contactform">
							<h5></h5>
							<ul class="form-cover">
								<li class="inp-cover inp-name"><input id="name" name="name" type="text" name="your-name" placeholder="Name" value="<?php if(isset($_POST["name"])) echo $_POST["name"] ?>"></li>					
								<li class="inp-cover inp-name"><input id="prenom" name="prenom" type="text" name="your-name" placeholder="Prénom" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"] ?>"></li>
								<li class="inp-cover inp-email"><input id="niveau" name="niveau" type="text" name="your-email" placeholder="Niveau" value="<?php if(isset($_POST["niveau"])) echo $_POST["niveau"] ?>"></li>
								<li class="inp-cover inp-email"><input id="email" name="email" type="email" name="your-email" placeholder="E-mail" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>"></li>
								<li class="inp-text"><textarea id="comments" value="<?php if(isset($_POST["comments"])) echo $_POST["comments"] ?>" name="your-text" placeholder="Vos motivations..."></textarea></li>
							</ul>
							<br><br><br>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn"><span>J'adhére</span></button>
							</div>
						</form>
						<div id="message"></div>
					</div>
				</div>
				<div class="col-md-2">
					<p></p>
				</div>
			</div>
		</div>
	</section>
	<footer style="background-image: url(assets/img/bg-about-home2.png);">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-4">
				</div>
				<div class=" col-12 col-sm-6 col-lg-4">
					<div class="footer-copyright"><a target="_blank" href="">ATELIERIIA</a> © 2020. All Rights Reserved.</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4">
				</div>
			</div>
		</div>
	</footer>


	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>


	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/rx-lazy.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=you_googlemap_key"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</body>
</php>
