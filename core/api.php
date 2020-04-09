<?php

	$url = 'https://api.coincap.io/v2/assets';
	$data = file_get_contents($url);
	$characters = json_decode($data, true);

	$name = [];
	$symbol = [];
	$priceUsd = [];


	for($i = 0; $i <= 99; $i++){

		$name[$i] = strtolower($characters['data'][$i]['name']);
		$symbol[$i] = strtolower($characters['data'][$i]['symbol']);
		$priceUsd[$i] = $characters['data'][$i]['priceUsd'];

	}

?>