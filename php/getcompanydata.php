<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Company Id</th>
	    <th>Company Name</th>
	    <th>Location</th>
          <th>Actions</th>
	  </tr>
	</thead>
	<tbody>
<?php
include "config.php";
$res = $conn->query("select * from company");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['id']; ?></td>
	    <td><?php echo $row['name']; ?></td>
	    <td><?php echo $row['location']; ?></td>
        <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletecompanydata('<?php echo $row['id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true">
            </span></a>
</td>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id']; ?>">Edit Company</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="firstname">Company Name</label>
    <input type="text" class="form-control" id="companyName<?php echo $row['id']; ?>" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Location</label>
    <input type="text" class="form-control" id="location<?php echo $row['id']; ?>" value="<?php echo $row['location']; ?>">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatecompanydata('<?php echo $row['id']; ?>')" class="btn btn-primary">Save changes</button>
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