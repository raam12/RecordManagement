<?php
include "config.php";
error_reporting(E_ERROR);
if(isset($_GET['id'])){
$stmt = $conn->prepare("update company set name=?, location=? where id=?");
$stmt->bind_param('sss', $companyName, $location, $id);

$companyName = $_POST['companyName'];
$location = $_POST['location'];
$id = $_GET['id'];

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data successfully updated.
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> same data, data error.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> error.
</div>
<?php
}
?>