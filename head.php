<?php
	if (isset($_GET["title"])){
		$title = $_GET["title"];
	}
	else {$title = "ABC GmbH";}



?>

<!DOCTYPE html>
<html lang="de">

    <head>
	    <meta charset="utf-8">
	    <title><?php echo $title ?></title>
	    <meta name="description"
		content="160 Zeichen zum beschreiben des Inhalts">
	    <link href="style.css" type="text/css" rel="stylesheet" />
	    <!--[if IE]>
	    <script
		src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			
    </head>

    <body>
		
		<header>
			<!-- <p> Das ist unsere Kopfzeile </p> -->
			<nav>

		    <ul class="nav-menu">
			    <li class="nav-item"><a href="index.php?title=start">Startseite</a></li>
			    <li class="nav-item"><a href="regist.php?title=Registrierung">Registrierung</a></li>
			    <li class="nav-item"><a href="shop.php?title=Shop">Shop</a></li>
			    <li class="nav-item"><a href="kontakt.php?title=Kontakt">Kontakt</a></li>
			    <li class="nav-item"><a href="impressum.php?title=Impressum">Impressum</a></li>
		    </ul>
			
			
	    </nav>
		</header>
		
		<div class="main">