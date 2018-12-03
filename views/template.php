<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Controle Financeiro</title>
	    <meta name="description" content="Controle Financeiro">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo BASE_URL;?>assets/images/icons/favicon.ico">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/images/icons/themify-icons/css/themify-icons.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/images/icons/flag-icon-css/css/flag-icon.min.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/selectFX/css/cs-skin-elastic.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/jqvmap/dist/jqvmap.min.css">
	    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/home.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body ng-app='mainApp'>
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	</body>

	<script>document.write('<base href="' + document.location + '" />');</script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap/popper.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/angular-1.7.2/angular.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/angular-1.7.2/angular-route.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/app.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/tabs.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/entradas.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/saidas.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/contas.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/addconta.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/cartoes.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/addcartao.ctrl.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app/controllers/dashboard.ctrl.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/home.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/chart.js/dist/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/widgets.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jqvmap/dist/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jqvmap/dist/maps/jquery.vmap.world.js"></script>
</html>