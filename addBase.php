<?php
include_once 'api/api_aapanel_mitha.php';
include_once 'config.php';

$aapanel = new aapanel_api;
$DataBaseName = trim($_REQUEST['database']);

$AgregarBase = $aapanel->addDatabase($DataBaseName);
$InstalarBase = $aapanel->importDbase('/home/backup/database/mySite.sql',$DataBaseName);
echo json_encode(array('base'=>$AgregarBase,'contenido'=>$InstalarBase));