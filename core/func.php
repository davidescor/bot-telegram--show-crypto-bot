<?php

	function sendMessage($chatId, $response){
	    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
		file_get_contents($url);
	}

?>