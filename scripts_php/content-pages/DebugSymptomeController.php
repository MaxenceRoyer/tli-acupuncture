<?php
	include_once(dirname( __FILE__ ) . "/../controllers/SymptomeController.php");

	$SymptomeController = new SymptomeController();

	$allSymptomesLimit3 = $SymptomeController->getAllSymptomes(3);
	
	$symptome1 = $SymptomeController->getSymptome(1);
	
	$symptomeNotExist = $SymptomeController->getSymptome(-1);
?>