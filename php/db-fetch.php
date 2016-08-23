<?php
error_reporting(E_ERROR);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhelp";

  
      $conn = mysql_connect($servername, $username, $password);
	  $db   = mysql_select_db($dbname);
	  

	  /*// Check connection
	 if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	 }
	 echo "Connected successfully";*/
	  
?>