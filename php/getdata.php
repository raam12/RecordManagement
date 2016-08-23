<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>User Id</th>
	    <th>First Name</th>
	    <th>Last Name</th>
        <th>Company</th>
        <th>Image</th>
		<th>Email</th>
        <th>Password</th>
		<th>Mobile</th>
	    <th>Title</th>
        <th>Profile</th>
        <th>Language</th>
        <th>Is Active</th>
        <th>Confirm Code</th>
        <th>Action</th>
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from list");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['id']; ?></td>
	    <td><?php echo $row['firstname']; ?></td>
	    <td><?php echo $row['lastname']; ?></td><td>
          <?php echo $row['company']; ?></td>
          
	    <td><img src="<?php echo "php/images/"; echo $row['photoname']; echo ".png"?>" alt="" border=3 height=40 width=40></td>
		<td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['profile']; ?></td>
        <td><?php echo $row['language']; ?></td>
        <td><?php echo $row['isactive']; ?></td>
        <td><?php echo $row['confirmcode']; ?></td>
	    <td>
            
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
    
  <div class="form-group">
    <label for="firstname">firstname</label>
    <input type="text" class="form-control" id="firstname<?php echo $row['id']; ?>" value="<?php echo $row['firstname']; ?>">
  </div>
    
  <div class="form-group">
    <label for="lastname">lastname</label>
    <input type="text" class="form-control" id="lastname<?php echo $row['id']; ?>" value="<?php echo $row['lastname']; ?>">
  </div>

  <div class="form-group">
    <label for="photoname">Photo</label>
    <input type="text" class="form-control" id="photoname<?php echo $row['id']; ?>" value="<?php echo $row['photoname']; ?>">
    </div>
    
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email<?php echo $row['id']; ?>" value="<?php echo $row['email']; ?>">
  </div>
    
   <div class="form-group">
    <label for="password">password</label>
    <input type="text" class="form-control" id="password<?php echo $row['id']; ?>" value="<?php echo $row['password']; ?>">
  </div> 
   <div class="form-group">
    <label for="mobile">mobile</label>
    <input type="number" class="form-control" id="mobile<?php echo $row['id']; ?>" value="<?php echo $row['mobile']; ?>">
  </div>
     <div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title<?php echo $row['id']; ?>" value="<?php echo $row['title']; ?>">
  </div>
    <div class="form-group">
    <label for="profile">profile</label>
    <input type="text" class="form-control" id="profile<?php echo $row['id']; ?>" value="<?php echo $row['profile']; ?>">
  </div>
     <div class="form-group">
    <label for="language">language</label>
    <input type="text" class="form-control" id="language<?php echo $row['id']; ?>" value="<?php echo $row['language']; ?>">
  </div>
    <div class="form-group">
    <label for="isactive">isactive</label>
    <input type="text" class="form-control" id="isactive<?php echo $row['id']; ?>" value="<?php echo $row['isactive']; ?>">
  </div>
    <div class="form-group">
    <label for="confirmcode">confirmcode</label>
    <input type="text" class="form-control" id="confirmcode<?php echo $row['id']; ?>" value="<?php echo $row['confirmcode']; ?>">
  </div>
          <div class="form-group">
   <label for="email">Company</label>
   <select id="company<?php echo $row['id']; ?>" name="select" class="main-form" style="width:575px;height:31px;">
   <option value="">None Selected</option>
       
                <?php
               
           include "config.php";
           $res1 = $conn->query("select * from company");
           while ($row1 = $res1->fetch_assoc()){
               if($row['company']==$row1['name'])
               {
           ?>
           <option value="<?php echo $row1['name']; ?>" selected>
              <?php echo $row1['name'];?>
           </option>
           <?php
               }
               else
               {?>
              <option value="<?php echo $row1['name']; ?>">
              <?php echo $row1['name'];?>
               </option>
             <?php  }
           }
           ?>
       
</select>
 </div>
</form>
      
<div class="bgColor">
<div class="targetLayerClass"  id="targetLayer<?php echo $row['id']; ?>"><img src="<?php echo "php/images/"; echo $row['photoname']; echo ".png"?>" alt="" border=3 height=40 width=40></div>
<div id="uploadFormLayer">
<label>Upload Image File:</label><br/>
<input id="userImage<?php echo $row['id']; ?>"  type="file" class="inputFile"/>
<input type="button" onclick="imageUpload2('<?php echo $row['id']; ?>')" value="Upload Image" />

</div>
</div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row['id']; ?>')" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	    
	    </td>
	  </tr>
<?php
}
?>
	</tbody>
      </table>
