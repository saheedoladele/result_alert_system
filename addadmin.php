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
		<p class="alert alert-success"> <i class="icon-user"></i><strong> Add Admin:</strong> Provide new admin information here</p>
		<p id="createErr"></p>
		<form method="post">
			<div class="row">
				<div class="col-lg-6">
					
						<div class="form-group">
							<label><strong>Surname:</strong></label>
							<input type="text" name="sur_admin" placeholder="Enter Surname" class="form-control" id="sur_admin" required="">
						</div>
						<div class="form-group">
							<label><strong>OtherNames:</strong></label>
							<input type="text" name="other_admin" placeholder="Enter OtherNames" class="form-control" id="other_admin" required="">
						</div>
				</div>
				

				<div class="col-lg-6">
			<div class="form-group">
							<label><strong>Username:</strong></label>
							<input type="text" name="user_admin" placeholder="Enter Username" class="form-control" id="user_admin" required="">
						</div>
			<div class="form-group">
							<label><strong>Password:</strong></label>
							<input type="password" name="pass_admin" placeholder="Enter Password" class="form-control" id="pass_admin" required="">
						</div>
				</div>
			</div>

			<div class="form-group">
				
				<button class="btn btn-success" id="add_admin"><i class="icon-plus"></i> Add</button>
				<p id="createSuccess"></p>
			</div>
		</form>
		<hr>
		
		
		
		
	</div>
	
</div>
</div>


<?php include_once 'footer.php'  ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
</body>
</html>