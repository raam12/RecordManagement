<?php
include "config.php";

error_log("New Data Called...\n", 3, "php.log");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$companyName = $_POST['companyName'];
$photoname = $_POST['photoname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$title = $_POST['title'];
$profile = $_POST['profile'];
$language = $_POST['language'];
$isactive = $_POST['isactive'];
$confirmcode = $_POST['confirmcode'];

if($firstname != null && $lastname != null && $companyName != null && $photoname != null && $email != null && $mobile != null && $title != null && $profile != null && $language != null && $isactive != null && $confirmcode != null){
$stmt = $conn->prepare("INSERT INTO list VALUES ('',?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param('ssssssssssss', $firstname, $lastname, $email, $password, $mobile, $title, $profile, $language, $isactive, $confirmcode,$photoname,$companyName);

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