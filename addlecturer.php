<?php
session_start();
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>
</head>
<body>
<!--navBar -->
<?php include_once 'nav.php'; ?>
<!--navbarEnd -->
<br>
<div class="container">
	<div class="row">
	<?php 
	if($role == 'Admin'){
		include_once 'left.php';
	}else {
		include_once 'leftLect.php';
	}
	?>
	<div class="col-lg-9">
		<p class="alert alert-success"> <i class="icon-list"></i><strong> Add Lecturer:</strong> Provide the lecturer information here</p>
		<p id="errMessage"></p>
		<form method="post">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
				<label><strong>Staff ID:</strong></label>
							<input type="text" name="staffid" placeholder="Enter Staff ID" class="form-control" id="staffid" required="">
						</div>
						<div class="form-group">
							<label><strong>Surname:</strong></label>
							<input type="text" name="surnames" placeholder="Enter Surname" class="form-control" id="surnames" required="">
						</div>
						<div class="form-group">
							<label><strong>OtherNames:</strong></label>
							<input type="text" name="othernames" placeholder="Enter OtherNames" class="form-control" id="othernames" required="">
						</div>
				</div>
				

				<div class="col-lg-6">
						<div class="form-group">
				<label><strong>Title:</strong></label>
				<select name="title" id="title" class="form-control" style="background-color: transparent; border-bottom-style: solid; border-bottom-color: rgb(60,179,113); border-bottom-width: 2px; color: rgb(60,179,113);">
					<option>--Title--</option>
					<option>Mr.</option>
					<option>Mrs.</option>
					<option>Dr.</option>
					<option>Prof.</option>
				</select>
			</div>
			<div class="form-group">
							<label><strong>Username:</strong></label>
							<input type="text" name="username" placeholder="Enter Username" class="form-control" id="username" required="">
						</div>
			<div class="form-group">
							<label><strong>Password:</strong></label>
							<input type="password" name="password" placeholder="Enter Password" class="form-control" id="password" required="">
						</div>
				</div>
			</div>

			<div class="form-group">
				
				<button class="btn btn-success btn-sm" id="addBtn"><i class="icon-save"></i> Save Record</button>
				<p id="addLecturersuccess"></p>
			</div>
		</form>
		<hr>
		<!-- <p>OR Upload an excel file, with the required template, get the required <a href="#">template HERE </a></p>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Choose File(.csv, xlv)</label>
				<input type="file" name="file" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-sm" type="submit" name="upload"><i class="icon-upload"></i> Upload</button>
			</div>
		</form> -->
		
		
		
	</div>
	
</div>
</div>


<?php include_once 'footer.php'  ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
</body>
</html>