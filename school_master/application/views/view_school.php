<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<title>View School Details</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<style>
   
</style>
</head>
<body>
<div class="view_school-form">

<div class="container mt-5">
       <table class="table table-bordered table-striped" id="users">
       <thead>
          <tr>
             <!-- <th>Id</th> -->
             <th>School Name</th>
             <th>Location</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
           
          <?php foreach($user as $single_school){ ?>
         
          <tr>
             <td><?php echo $single_school->SCHOOL_NAME; ?></td>
             <td><?php echo $single_school->LOCATION; ?></td>
             <td>
              <a href="<?php echo base_url('index.php/edit_school/index/'.$single_school->ID);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('index.php/edit_school/delete/'.$single_school->ID);?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         <?php } ?>
        
       </tbody>
     </table>
  
<div class="row">
	<div class="col-md-3">
		<a href="<?php echo site_url('create_school');?>" class="btn btn-warning btn-lg btn-block" style="color:#fff;">Add More School Details</a>
	</div>
	<div class="col-md-3">
		<a href="<?php echo site_url('Logout');?>" class="btn btn-danger btn-lg btn-block" style="color:#fff;">Log Out</a>
	</div>
</div>
  
</div>

</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function () {
    $('#users').DataTable();
} );
</script>           
