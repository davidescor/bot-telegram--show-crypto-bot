<?php

include("core/config.php");
include("core/func.php");
include("core/api.php");

	$website = "https://api.telegram.org/bot".$botToken;

	$update = file_get_contents('php://input');
	$update = json_decode($update, true);

	$chatId = $update["message"]["chat"]["id"];
	$message = strtolower($update["message"]["text"]);

	switch ($message) {
		case '/help':
				$response = 'You can ask for a cryptocurrency without having to put a command. For example <strong> bitcoin </strong>, or also by symbol <strong> btc </strong>.';
				sendMessage($chatId, $response);
			break;
		
		default:
			for ($i = 0; $i <= 100; $i++) {
			    if($name[$i]==$message || $symbol[$i] == $message){
					$auxResponse = ucfirst($name[$i])." has a value of ".round($priceUsd[$i],2)."$.";
					$response = $auxResponse;
					sendMessage($chatId, $response,);
					break;
			    }
			}
			break;
	}

?>