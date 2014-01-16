
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IQCloud - Inscription</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/inscription.css" rel="stylesheet" type="text/css">
<link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
<link rel="SHORTCUT ICON" href="img/IQcloudico.ico" />
</head>
<body>
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">IQCloud</a>
	</div>
	<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-8" style="height: 1px; ">
	  <ul class="nav navbar-nav">
		<li><a href="accueil.php">Accueil</a></li>
		<li><a href="connexion.php">Se connecter</a></li>
		<li class="active"><a href="#">Inscription</a></li>
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
		<form class="form-horizontal" role="form" action="register.php" method="post">
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<input type="email" name="email" class="form-control" id="email" placeholder="Email">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
				  <input type="password" name="passe" class="form-control" id="passe" placeholder="Mot de passe">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
				  <input type="password" name="passe2" class="form-control" id="passe2" placeholder="Confirmation Mot de passe">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
				  <div class="checkbox">
					<label>
					  <input name="accept" type="checkbox"> Accepter les <a href="conditions.html" onclick="window.open(this.href, 'exemple', 'height=200, width=400, top=100, left=100, toolbar=no, menubar=yes, location=no, resizable=yes, scrollbars=no, status=no'); return false;">conditions d'utilisation</a>
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-md-12 col-xs-12 col-sm-12">
				  <button type="submit" class="btn btn-default btn-lg btn-block" name="register">S'inscrire</button>
				</div>
			  </div>
			</form>

		</div>
		<div class="col-md-4 col-sm-3">
		</div>
	</div>
</div>



<footer>
	<div class="row footertop">
		<div class="col-md-3 col-xs-12 col-sm-3 centre_image">
		
			<img width="80" height="50" src="img/CloudIQ.png" alt="IQCloud">
		</div>
		<div class="col-md-3 col-xs-4 col-sm-3 centre">
			<h5 class="prebotfont">IQcloud</h5>
			<ul>
				<li><a href="connexion.html">Se connecter</a></li>
				<li><a href="inscription.html">Inscription</a></li>
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