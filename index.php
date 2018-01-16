<?php 
	
	require_once 'templates/header.php';
	include_once("controller/Controller.php");
 
	$controller = new Controller();
	$controller->invoke();
	require_once 'templates/content.php';
	require_once 'templates/footer.php';



 ?>