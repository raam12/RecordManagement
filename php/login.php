<?php
//header( 'Content-type: text/xml' );
include_once('db-fetch.php');
error_reporting(E_ERROR);

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$result = mysql_query ( "select * from list where email='$email' and password='$password'");

while ($row = mysql_fetch_assoc($result)) {

    
   
// echo( htmlentities( $row['profile'] ) ) ;
   echo $row['profile']  ;
                                        }

mysql_free_result($result);
?>