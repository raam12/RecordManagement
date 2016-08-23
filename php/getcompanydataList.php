<?php
include "config.php";
$res = $conn->query("select * from company");

$myArray = array();
while ($row = $res->fetch_assoc()) 
{
    $id = $row['id'];
    $companyName= $row['name'];

    $obj['id'] = $id;
    $obj['companyName'] = $companyName;   
    array_push($myArray, $obj);
}
$js_array = json_encode($myArray);

print $js_array;

?>