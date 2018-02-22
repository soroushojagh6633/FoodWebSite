<?php
$server="localhost";
$user= "root";
$pass="";
$dbname="foodguide";

$dsn="mysql:host=$server;dbname=$dbname";
try{
	$connect=new PDO($dsn,$user,$pass);
	$connect->exec("SET character_set_connection ='utf8'");
	$connect->exec("SET NAMES 'utf8'");
	}
	catch(PDOException $error){
		 echo "Unable to connect ".$error->getMessage();
		}
?>