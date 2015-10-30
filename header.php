<?php require "config.php" ?>
<?php
	error_reporting(0);
	session_start();
	ob_start();
?>
<?php require "functions.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Project!</title>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/Project/style.css">
		<link rel="stylesheet" type="text/css" href="/Project/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/Project/css/font-awesome.css">

		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="/Project/js/java.js"></script>
		<script type="text/javascript" src="/Project/js/bootstrap.js"></script>
	</head>
	<body>

	<?php 
		if(!isset($_SESSION["login"])){	
			include 'default-navbar.php';
		}else{
			include 'navbar.php';
		}

	?>

<!--/body/-->