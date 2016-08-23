<?php

 
  $userName = $_POST["userName"];
  $password1 = $_POST["password"];
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
  	$sql="SELECT * FROM users1 where email ='$userName' and password='$password1'";

  	$result=$dbh->query($sql);;
	

	$num=$result->rowCount();

	if ($num==0)
	{
		echo "failure";
	}
	else
	{
		if(!isset($_SESSION))
		{
  		  session_start();
		}
	    $_SESSION['email']=$userName;
        //header("location:.php");
		echo "success";
	}

    //echo "success";
?>