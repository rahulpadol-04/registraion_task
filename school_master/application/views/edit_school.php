<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Edit School Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.editSchool-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.editSchool-form h2 {
	color: #fff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.editSchool-form h2:before, .editSchool-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.editSchool-form h2:before {
	left: 0;
}
.editSchool-form h2:after {
	right: 0;
}
.editSchool-form .hint-text {
	color: #fff;
	margin-bottom: 30px;
	text-align: center;
}
.editSchool-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.editSchool-form .form-group {
	margin-bottom: 20px;
}
.editSchool-form input[type="checkbox"] {
	margin-top: 3px;
}
.editSchool-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.editSchool-form .row div:first-child {
	padding-right: 10px;
}
.editSchool-form .row div:last-child {
	padding-left: 10px;
}    	
.editSchool-form a {
	color: #fff;
	text-decoration: underline;
}
.editSchool-form a:hover {
	text-decoration: none;
}
.editSchool-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.editSchool-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="editSchool-form">
		<h2>Edit School Details</h2>
	
		<?php echo form_open('edit_school/edit',['name'=>'edit_school','autocomplete'=>'off']);?>

        <div class="form-group">
		<?php echo form_hidden(['name'=>'ID','$user->ID']); ?>

        	<!-- <input type="hidden" name="ID" class="form-control" id="formGroupExampleInput" value="<?php echo $user->ID ?>" >     -->
			<?php if($this->session->flashdata('error')){?>
				<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
			<?php } ?>

			<?php echo form_input(['name'=>'school_name','value' =>$user->SCHOOL_NAME,'class'=>'form-control','placeholder'=>'Enter your School Name']); ?>
			<?php echo form_error('school_name',"<div style='color:red'>","</div>");?>       	
        </div>

		<div class="form-group">
			<?php echo form_input(['name'=>'location','value' =>$user->LOCATION,'class'=>'form-control','placeholder'=>'Enter Location']); ?>
			<?php echo form_error('location',"<div style='color:red'>","</div>");?>       				
        </div>

		<div class="form-group">
			<?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>
        </div>
    </form>
    <?php echo form_close();?>
</div>
</body>
</html>
