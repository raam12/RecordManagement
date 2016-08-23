<?php
include "config.php";

error_log("New Data Called...\n", 3, "php.log");

$companyName = $_POST['companyName'];
$location = $_POST['location'];

if($companyName != null && $location != null){
$stmt = $conn->prepare("INSERT INTO company VALUES ('',?,?)");
$stmt->bind_param('ss', $companyName, $location);

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data added sucessfully.
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> data error.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Isi semua form area.
</div>
<?php
}
?>