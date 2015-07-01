<?php
$userdomain=array_shift(explode(".",$_SERVER['HTTP_HOST']));
if($userdomain!='')
{
	$settingFile=$userdomain.".settings.ini.php";
	$config1=require("settings/$settingFile");
	return $config1;
}
?>