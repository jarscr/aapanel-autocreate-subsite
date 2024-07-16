<?php
include_once 'api/api_aapanel_mitha.php';
include_once 'config.php';

$aapanel = new aapanel_api;
$DataBaseName = trim($_REQUEST['database']);

$addDatabase = $aapanel->addDatabase($DataBaseName);
$importSQLDatabase = $aapanel->importDbase('/home/backup/database/mySite.sql',$DataBaseName);
echo json_encode(array('base'=>$addDatabase,'content'=>$importSQLDatabase));