<?php

  $name =$_REQUEST["name"];
  $userName = $_REQUEST["userName"];
  $password1 = $_REQUEST["password"];
$hostname='localhost';
$username='root';
$password='';
try{
    $dbh=new PDO("mysql:host=$hostname;dbname=macapp",$username, $password);
}
catch(PDOException $e)
{
    echo 'connection failed:' .$e->getMessage();
}
  	$count = $dbh->exec("INSERT INTO users1 VALUES('','$name', '$userName', '$password1')");
	echo "success";
?>