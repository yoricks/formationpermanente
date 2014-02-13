<?php error_reporting(E_ALL) ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CFP - Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
	<div class="container">
		<!-- TITRE -->
		<br>
		<h2 class="text-center">Connexion au CFP</h2>

		<br>
		<!-- FORMULAIRE -->
		<div class="col-md-4 column"></div>
		<div class="row clearfix">
			<div class="col-md-4 column text-center">
				<form role="form" class="form-inline">
					<div class="form-group">
						 <label for="Adresse Email">Adresse Email</label>
						 <input type="email" class="form-control" placeholder="Email" id="email" />
					</div>
					<div class="form-group">
						 <label for="Mot De Passe">&nbsp;Mot de Passe</label>
						 <input type="motDePasse" class="form-control" placeholder="Mot De Passe" id="motDePasse" />
					</div>
					<br>
					<div class="checkbox">
						 <label><input type="checkbox" /> Se souvenir de moi</label>
					</div>
					<br>
					<button type="submit" class="btn btn-default">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-user"></i> Connexion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
					<br><br>
				<!-- ALERTES -->
				<?php if (isset($_SESSION['mauvaisLogin'])) { ?>
					<div class="alert alert-dismissable alert-danger">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						 <strong>Attention!</strong> Email ou mot de passe incorrect!
						 <a href="#" class="alert-link">Mot de passe oublié ?</a>
					</div>
				<?php } else { ?>
					<a href="#" class="alert-link">Mot de passe oublié ?</a>
				<?php } ?>
				</form>
			</div>
		</div>
		<div class="col-md-4 column"></div>

	</div>
</body>
</html>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>