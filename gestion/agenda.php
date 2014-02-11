<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CFP - Agenda</title>
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
  
  <link rel="shortcut icon" type="image/x-icon" href="./img/logosite.png"/>
</head>

<body>
	<div class="container">

		<!-- BARRE DE NAVIGATION-->
		<div class="row clearfix">
			<div class="col-md-12 column">
				<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
					<div class="navbar-header">
						 <span class="navbar-brand">CFP</span>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<!-- AGENDA -->
							<li class="active">
								<a href="./agenda.php" ><i class="glyphicon glyphicon-calendar"></i> Agenda</a>
							</li>
							<!-- FORMATIONS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Formations<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./formations.php">Consulter</a></li>
										<li><a href="./creerFormation.php">Créer</a></li>
									</ul>
							</li>
							<!-- FORMATEURS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Utilisateurs<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./formateurs.php">Consulter</a></li>
										<li><a href="./creerFormateur">Créer</a></li>
									</ul>
							</li>
							<!-- FACTURES -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-euro"></i><i class="glyphicon glyphicon-arrow-down"></i> Factures<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./factures.php">Consulter</a></li>
										<li><a href="./creerFacture">Créer</a></li>
									</ul>
							</li>
							<!-- RETRIBUTIONS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-euro"></i><i class="glyphicon glyphicon-arrow-up"></i> Retributions<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./retributions.php">Consulter</a></li>
										<li><a href="./creerRetribution">Créer</a></li>
									</ul>
							</li>
							<!-- TARIFS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-credit-card"></i> Tarifs<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./tarifs.php">Consulter</a></li>
										<li><a href="./creerTarif">Créer</a></li>
									</ul>
							</li>
							</ul>
							<!-- UTILISATEUR -->
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Utilisateur<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li><a href="./modifierMonProfil.php">Modifier Mon Profil</a></li>
											<li><a href="./seDeconnecter">Se Déconnecter</a></li>
										</ul>
								</li>
							</ul>	
					</div>
				</nav>
			</div>
		</div>

		<div class="row text-right">
			
			<!-- TITRE -->
			<br><br><br>
			<h2 class="text-center">Agenda</h2>

			<!-- BOUTONS -->
			<div class="btn-group">
		       	<a class="btn btn-default" href="#"><i class="glyphicon glyphicon-chevron-left"></i> Sem. Préc.</a>
		       	<a class="btn btn-default" href="#">Sem. Suiv. <i class="glyphicon glyphicon-chevron-right"></i></a>
		    </div>
		    <br><br>

		</div>

		<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
					<h3 class="text-center">Lundi date</h3>
					<table class="table table-condensed table-hover">
						<tbody>
							<tr class="success text-center"><td class="text-right">8h00</td><td>8 car. max</td></tr>
							<tr class="text-center"><td class="text-right">8h30</td><td>mmmmmmmm</td></tr>
							<tr class="success text-center"><td class="text-right">9h00</td></tr>
							<tr class=" text-center"><td class="text-right">9h30</td></tr>
							<tr class="success text-center"><td class="text-right">10h00</td></tr>
							<tr class="text-center"><td class="text-right">10h30</td></tr>
							<tr class="success text-center"><td class="text-right">11h00</td></tr>
							<tr class="text-center"><td class="text-right">11h30</td></tr>
							<tr class="success text-center"><td class="text-right">12h00</td></tr>
							<tr class="text-center"><td class="text-right">12h30</td></tr>
							<tr class="success text-center"><td class="text-right">13h00</td></tr>
							<tr class="text-center"><td class="text-right">13h30</td></tr>
							<tr class="success text-center"><td class="text-right">14h00</td></tr>
							<tr class="text-center"><td class="text-right">14h30</td></tr>
							<tr class="success text-center"><td class="text-right">15h00</td></tr>
							<tr class="text-center"><td class="text-right">15h30</td></tr>
							<tr class="success text-center"><td class="text-right">16h00</td></tr>
							<tr class="text-center"><td class="text-right">16h30</td></tr>
							<tr class="success text-center"><td class="text-right">17h00</td></tr>
							<tr class="text-center"><td class="text-right">17h30</td></tr>
							<tr class="success text-center"><td class="text-right">18h00</td></tr>
							<tr class="text-center"><td class="text-right">18h30</td></tr>
							<tr class="success text-center"><td class="text-right">19h00</td></tr>
							<tr class="text-center"><td class="text-right">19h30</td></tr>

						</tbody>
					</table>
				</div>
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>