<?php 
	
	require_once 'templates/header.php';
	include_once("controller/Controller.php");
 
	$controller = new Controller();
	$controller->getCatagory();
	require_once 'templates/content.php';
	$controller->getItem();
	require_once 'templates/footer.php';



 ?>