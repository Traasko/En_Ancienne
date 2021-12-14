<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>En Ancienne</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../images/favicon.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/custom.css">


		<SCRIPT language="JavaScript">
  function cacherDiv() {
       document.getElementById("reussie").style.display = "none";
  }
	function cacherDiv2() {
			 document.getElementById("erreur").style.display = "none";
	}
	</SCRIPT>
	<?php
		ini_set('display_errors', 'off');
		if($_GET['msg'] == 2) { ?>
		<body onload="setTimeout(cacherDiv2,2000);">
			<div id="erreur" class="erreur">
				<?php echo "Veuillez réessayer plus tard !";}?>
			</div>
		</body>

	<?php
		ini_set('display_errors', 'off');
		if($_GET['msg'] == 1) { ?>
			<body onload="setTimeout(cacherDiv,2000);">
				<div id="reussie" class="message">
					<?php echo "Message envoyé avec succès !";}?>
				</div>
			</body>
<body>
	<!-- Navbar -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="../index.html">
					<img src="../images/logo.jpg"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="../index.html">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="voiture.html">Voiture</a></li>
						<li class="nav-item"><a class="nav-link" href="mariage.html">Mariage</a></li>
						<li class="nav-item"><a class="nav-link" href="tarif.html">Tarifs</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Navbar -->

	<!-- Haut de page -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- Haut de page -->

	<!-- Contact -->
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Avez-vous une question ?</p>
						<p>N'hésitez pas à nous en faire part, nous vous répondrons dans les meilleurs délais !</p>
					</div>
				</div>
			</div>
			<section class="contact-us">
					<div class="container">
						<div class="row">
                    <div class="col-lg-7" style="text-align:center">
                        <form action="../traitement/contact.php" method="POST" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" required/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required/>
                                </div>
																<div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="sujet" placeholder="Sujet" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Envoyer</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="map">
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d674384.9617768443!2d1.9422624086630276!3d48.68031781779822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e1c403a68c17%3A0x10b82c3688b2570!2s%C3%8Ele-de-France!5e0!3m2!1sfr!2sfr!4v1637321694290!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        </div>
                    </div>
                </div>
					</div>
			</section>
		</div>
	</div>
	<!-- Fin Contact -->

	<!-- Information -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Téléphone</h4>
						<p class="lead">06.64.19.91.38 | 06.59.50.32.12</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>E-mail</h4>
						<p class="lead">en.ancienne@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Position</h4>
						<p class="lead">Île-de-France</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Information -->

	<!-- Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Navigation</h3>
					<p><a href="../index.html">Accueil</a></p>
					<p><a href="voiture.html">Voiture</a></p>
					<p><a href="mariage.html">Mariage</a></p>
					<p><a href="contact.php">Contact</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Tarifs</h3>
					<p><span class="text-color">1h ou transfert :</span> 300€</p>
					<p><span class="text-color">2h :</span> 400€ | 3h : 400€</p>
					<p><span class="text-color">4h :</span> 600€ | 5h : 690€</p>
					<p><span class="text-color">90€ par heure </span>supplémentaire</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Informations</h3>
					<p class="lead">Île-de-France</p>
					<p class="lead">06.64.19.91.38 | 06.59.50.32.12</a></p>
					<p class="lead">en.ancienne@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Réseaux sociaux</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/location.voiture.ancienne/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">&copy; 2021 | En Ancienne</p>
						<p class="company-name"><a href="../images/Mentions_légales.pdf">Mentions légales</a> | <a href="../images/Politique_confidentialité.pdf">Politique de Confidentialité</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		<script src="../js/jquery.superslides.min.js"></script>
		<script src="../js/images-loded.min.js"></script>
		<script src="../js/isotope.min.js"></script>
		<script src="../js/baguetteBox.min.js"></script>
		<script src="../js/jquery.mapify.js"></script>
		<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>
