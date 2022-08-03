<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Create New School</title>
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
.create_school-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.create_school-form h2 {
	color: #fff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.create_school-form h2:before, .create_school-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.create_school-form h2:before {
	left: 0;
}
.create_school-form h2:after {
	right: 0;
}
.create_school-form .hint-text {
	color: #fff;
	margin-bottom: 30px;
	text-align: center;
}
.create_school-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.create_school-form .form-group {
	margin-bottom: 20px;
}
.create_school-form input[type="checkbox"] {
	margin-top: 3px;
}
.create_school-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.create_school-form .row div:first-child {
	padding-right: 10px;
}
.create_school-form .row div:last-child {
	padding-left: 10px;
}    	
.create_school-form a {
	color: #fff;
	text-decoration: underline;
}
.create_school-form a:hover {
	text-decoration: none;
}
.create_school-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.create_school-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="create_school-form">
		<h2>Create a New School</h2>
		<!-- <p class="hint-text">Sign in to start your session</p> -->




		<?php echo form_open('create_school',['name'=>'create_school','autocomplete'=>'off']);?>

        <div class="form-group">
			<?php if($this->session->flashdata('error')){?>
				<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
			<?php } ?>

			<?php echo form_input(['name'=>'school_name','class'=>'form-control','value'=>set_value('school_name'),'placeholder'=>'Enter your School Name']); ?>
			<?php echo form_error('school_name',"<div style='color:red'>","</div>");?>       	
        </div>

		<div class="form-group">
			<?php echo form_input(['name'=>'location','class'=>'form-control','value'=>set_value('location'),'placeholder'=>'Enter Location']); ?>
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