<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
error_reporting(E_ERROR);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT profile FROM list';

mysql_select_db('config_php');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_assoc($retval))
{
    echo "profile  :{$row['profile']}  <br> ".
         
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>