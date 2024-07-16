<?php
include_once 'api/api_aapanel_mitha.php';
include_once 'config.php';
$aapanel = new aapanel_api;


$SiteName = trim($_REQUEST['site']);

$AddSite = $aapanel->addSite($SiteName.'.miSite.com', $SiteName.'.miSite.com',$SiteName.'.miSite.com', 0,  'php', '73', '80', false, null,  null, false, null, null, 1,  0);


if($SiteName){
    $AddFTP = $aapanel->addFtp($SiteName.'.miSite.com','mipos_'.$SiteName);
    $AddContent = false;
}

copy('/home/wwwroot/miSite.zip', '/home/wwwroot/'.$SiteName .'.miSite.com/miSite.zip');
copy('/home/wwwroot/installer.php', '/home/wwwroot/'.$SiteName .'.miSite.com/installer.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://".$SiteName.".miSite.com/installer.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);
curl_close($ch);

echo json_encode(array('site'=>$AddSite,'ftp'=>$AddFTP,'content'=>$AddContent,'zip'=>$output));



