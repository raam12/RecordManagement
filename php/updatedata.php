<?php
include "config.php";
error_reporting(E_ERROR);
if(isset($_GET['id'])){
$stmt = $conn->prepare("update list set firstname=?, lastname=?, photoname=?, email=?, password=?, mobile=?, title=?, profile=?, language=?, isactive=?, confirmcode=?,company=? where id=?");
$stmt->bind_param('sssssssssssss', $firstname, $lastname, $photoname, $email, $password, $mobile, $title, $profile, $language, $isactive, $confirmcode,$companyName,$id);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$photoname = $_POST['photoname'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$title = $_POST['title'];
$profile = $_POST['profile'];
$language = $_POST['language'];
$isactive = $_POST['isactive'];
$confirmcode = $_POST['confirmcode'];
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