<?php

	header('Content-Type: application/json');

	if(isset($_GET['product'])){
		$data = array();

		$productName = str_replace(" ","+",$_GET['product']);

		$productLink = "http://placehold.it/1024x768?text=".$productName;


		$data[] = $productLink;

		echo json_encode($data);
	}
	else{
		echo json_encode("http://placehold.it/1024x768?text=error+no+product");
	}
