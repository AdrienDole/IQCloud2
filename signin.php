<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IQCloud - Connexion</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/connexion.css" rel="stylesheet" type="text/css">
<link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
<link rel="SHORTCUT ICON" href="img/IQcloudico.ico" />
</head>
<body>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="accueil.php">IQCloud</a>
	</div>
	<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: auto;">
	  <ul class="nav navbar-nav">
		<li><a href="accueil.php">Accueil</a></li>
		<li class="active"><a href="#">Se connecter</a></li>
		<li><a href="inscription.php">Inscription</a></li>
	  </ul>
	</div>
</div>

<div class="container">
	<div class="row pplan" id="anim1">
		<div class="col-md-12 col-xs-12 col-sm-12  pplan">
				<img src="img/CloudIQ.png" class="img-responsive" alt="logo" width="400">
		</div>
	</div>
	<div class="row" id="anim2">
		<div class="col-md-4 col-sm-3">
		</div>
		<div class="col-md-4 col-xs-12 col-sm-6">
		<form class="form-horizontal" role="form" method="post" action="test2.php">
		  <div class="form-group">
			<div class="col-md-12 col-xs-12 col-sm-12  splan">
				<input type="email" name="email" class="form-control" id="email" placeholder="Email">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-12 col-xs-12 col-sm-12">
			  <input type="password" name="passe" class="form-control" id="passe" placeholder="Mot de passe">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-12 col-xs-12 col-sm-12">
			  <div class="checkbox">
				<label>
				  <input name="accept" type="checkbox"> Se rappeler de moi
				</label>
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-12 col-xs-12 col-sm-12">
			  <button type="submit" name="register" class="btn btn-default btn-lg btn-block">Se connecter</button>
			</div>
		  </div>
		</form>
		</div>
		<div class="col-md-4 col-sm-3">
		</div>
	</div>
</div>
<?php 
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=iqcloud', 'root', 'root');
				}
					catch(Exception $e)
				{
			        die('Erreur : '.$e->getMessage());
				}
				session_start();
				$loginOK = false;
				$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
				$passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
				$passe = sha1($passe).bonjour;
				$requete = $bdd->query('SELECT * from users where email="'.$email.'"');
				while ($donnees = $requete->fetch())
				{
    				if ($donnees['email']==$email) 
    				{
    					if ($donnees['password']==$passe) 
    					{
    						$loginOK = true;
    					}
    					else
    					{
    						$loginOK = false;
    					}

    				}

	    				if ($loginOK) 
						{
						  $_SESSION['email'] = $donnees['email'];
						  $_SESSION['nom'] = $donnees['nom'];
						  $_SESSION['prenom'] = $donnees['prenom'];
						
						}	  
					
						if (!$loginOK)  
						{
							echo "Email ou mot de passe incorrect";
						}
				}
?>	 	
				

<footer>
	<div class="row footertop">
		<div class="col-md-3 col-xs-12 col-sm-3 centre_image">
		
			<img width="80" height="50" src="img/CloudIQ.png" alt="IQCloud">
		</div>
		<div class="col-md-3 col-xs-4 col-sm-3 centre">
			<h5 class="prebotfont">IQcloud</h5>
			<ul>
				<li><a href="connexion.php">Se connecter</a></li>
				<li><a href="inscription.php">Inscription</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-xs-4 col-sm-3 centre">
			<h5 class="prebotfont">Assistance</h5>
			<ul>
				<li><a href="contact.php">Contactez-nous</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-xs-4 col-sm-3 centre">
			<h5 class="prebotfont">À propos de nous</h5>
			<ul>
				<li><a href="conditions.html">Condition d'utitlisation</a></li>
			</ul>
		</div>
	</div>
	<div class="row footerbot">
		<div class="col-md-12 col-xs-12 col-sm-12 centre botfont">
			<h4>Suivez-nous</h4>
			</br>
		</div>
	</div>
	<div class="row footerbot">
		<div class="col-md-12 col-xs-12 col-sm-12 centre">
			<img width="27" height="28" src="img/fb.png" alt="Facebook">
			<img width="27" height="28" src="img/twitter.png" alt="Twitter">
		</div>
		<div class="col-md-12 col-xs-12  col-sm-12">
		</br>
		<p class="centre botfont">©2013 - IQCloud</p>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>