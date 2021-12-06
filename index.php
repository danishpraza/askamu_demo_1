<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<title>Dashboard | askamu</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
            <link href="https://superadmin.askamu.com/style/default/css/mdb.min.css" rel="stylesheet"/>

		<link href="style/templates/css/style.css" rel="stylesheet" />
		<link href="style/templates/css/styles.css" rel="stylesheet" />
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
		
		<script src="style/templates/js/all.min.js"></script>
		<script src="style/templates/js/feather.min.js"></script>
	</head>
<style>
.bg_black_dark_1 { background-color:#1e1e2f !important;}
.bg_black_light_1 { background-color:#26293b !important;}
a{color:white;}
</style>	
	<body class="nav-fixed bg_black_dark_1 text-white">
	
	<?php
	include("sidenave_menu.php");
	?>
<div id="layoutSidenav">
	<?php
	include("left_menu.php");
	include("dashboard.php");
	?>
</div><!--// layoutSidenav -->




	<script src="style/templates/js/email-decode.min.js"></script>
        <script type="text/javascript" src="https://superadmin.askamu.com/style/default/js/mdb.min.js"></script>
	<script src="style/templates/js/bootstrap.bundle.min.js"></script>
	<script src="style/templates/js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
	<script src="style/templates/js/datatables-simple-demo.js"></script>
	<script src="style/templates/js/litepicker.js"></script>
	<script src="style/templates/js/sb-customizer.js"></script>
	<script src="style/templates/js/beacon.min.js"></script>
	</body>
</html>
