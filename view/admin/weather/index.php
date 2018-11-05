<?php
	$key = "0a50e51e98124f2b803110455181001";
    $city = 'bogra';
    $url = "http://api.apixu.com/v1/current.json?key=$key&q=rangpur" ;
    
    //$url2 = "http://api.apixu.com/v1/current.json?key=0a50e51e98124f2b803110455181001&q=Paris";

    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    
    $json_output=curl_exec($ch);
    $weather = json_decode($json_output);
	echo "Temperature: " . $weather->current->temp_c;
	echo "Temperature2: " . $weather->current->feelslike_c;
	echo "Temperature2: " . $weather->current->temp_f;