<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CFP - Formations</title>
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
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<!-- AGENDA -->
							<li>
								<a href="./agenda.php" ><i class="glyphicon glyphicon-calendar"></i> Agenda</a>
							</li>
							<!-- FORMATIONS -->
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Formations<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./formations.php">Consulter Les Formations</a></li>
										<li><a href="./creerFormation.php">Encoder Une Formation</a></li>
									</ul>
							</li>
							<!-- CLIENTS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon glyphicon-home"></i> Clients<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./institutions.php">Consulter Les Clients</a></li>
										<li><a href="./creerInstitution.php">Encoder Un Client</a></li>
									</ul>
							</li>
							<!-- UTILISATEURS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Utilisateurs<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./formateurs.php">Consulter Les Utilisateurs</a></li>
										<li><a href="./creerFormateur">Encoder Un Utilisateur</a></li>
									</ul>
							</li>
							<!-- FACTURES -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-euro"></i><i class="glyphicon glyphicon-arrow-down"></i> Factures<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./factures.php">Consulter Les Factures</a></li>
										<li><a href="./creerFacture">Encoder Une Facture</a></li>
										<li><a href="./creerFacture">Encoder Un Paiement</a></li>
									</ul>
							</li>
							<!-- RETRIBUTIONS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-euro"></i><i class="glyphicon glyphicon-arrow-up"></i> Retributions<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./retributions.php">Consulter Les Retributions</a></li>
										<li><a href="./creerRetribution">Encoder Une Rétribution</a></li>
									</ul>
							</li>
							<!-- TARIFS -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-credit-card"></i> Tarifs<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li><a href="./tarifs.php">Consulter Les Tarifs</a></li>
										<li><a href="./creerTarif">Encoder Un Tarif</a></li>
									</ul>
							</li>
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								<!-- MESSAGERIE -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-envelope"></i> Messagerie<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li><a href="./boiteDeReception.php">Boite De Réception</a></li>
											<li><a href="./nouveauMessage.php">Nouveau Message</a></li>
										</ul>
								</li>
								<!-- UTILISATEUR -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> -Pseudo-<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li><a href="./modifierMonProfil.php">Modifier Mon Profil</a></li>
											<li><a href="./seDeconnecter"><i class="glyphicon glyphicon glyphicon-off"></i> Se Déconnecter</a></li>
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
			<h2 class="text-center">Formations</h2>
		
			<!-- BOUTONS -->
			<div class="btn-group">
		       	<a class="btn btn-default active" href="#">En Cours</a>
		       	<a class="btn btn-default" href="#">Archivées</a>
		    </div>
		    <br><br>

		</div>

		<div class="row clearfix">

			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th>
							Numéro
						</th>
						<th>
							Facturée*
						</th>
						<th>
							Intitulé
						</th>
						<th>
							Commentaires
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
						</td>
					</tr>
					<tr class="active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
			<ul class="pagination">
				<li>
					<a href="#">Préc.</a>
				</li>
				<li>
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">Suiv.</a>
				</li>
			</ul>
			<p class="text-muted">
				* Cette formation est facturée à tous les clients pour toutes les séances jusqu'au jour d'aujourd'hui.
			</p>
		</div>
	</div>

</body>
</html>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>