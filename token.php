<?php
require_once("qiniu/rs.php");

$type = $_GET ['type'];

$bucket = 'bianmi';
$accessKey = '6uoNKRkDEm7rUXoMoEMXffVW8nuKCfW1RRXATji4';
$secretKey = 'vlkTL_bQMFkvrMZgixBCYrEuxPbyYmovkVoi_IFV';

Qiniu_SetKeys($accessKey, $secretKey);
$putPolicy = new Qiniu_RS_PutPolicy($bucket);
if($type == "uptoken"){
	$upToken = $putPolicy->Token(null);
	echo json_encode(array("uptoken"=>$upToken));
}else if($type == "downtoken"){
	echo json_encode(array("downtoken"=>$upToken));
}
