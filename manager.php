<?php 



	$baseName = 'panevino'; // NOMBRE DE SUB-DOMINIO
    $DataBaseInstall = addDatabase($baseName);
	$CreateSite = addSite($baseName);

    echo json_encode( array('base'=>$DataBaseInstall,'correos'=>$Correo,'site'=>$TareaSitio));

function addDatabase($baseName){
	$DataBase = 'mipos_'.$baseName; //Create the database
  
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.miSite.com/api/addBase.php?database=".$DataBase);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1200);
	$err  = curl_error($ch);
	$data = curl_exec($ch);
	curl_close($ch);
	
	if ($err) {
		echo json_encode(array("error" => $err));
		exit();
	}
	
	return json_decode($data);
}

function addSite($baseName){
  
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.miSite.com/api/addSite.php?site=".$baseName);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1200);
	$err  = curl_error($ch);
	$data = curl_exec($ch);
	curl_close($ch);
	
	if ($err) {
		echo json_encode(array("error" => $err));
		exit();
	}
	
	return json_decode($data);
}


