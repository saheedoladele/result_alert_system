<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>

<style type="text/css">
	body{
		background-image: url('images/cap.jpg');
		background-color: cover;
		background-position: center;
	}
</style>
</head>
<body>
	<p class="text-center"><a href="index.php"><img src="images/logo1.png" style="margin-top: 20px;"></a></p>
<div class="row">
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-4">
		
		<p class="loginTitle"> <i class="icon-lock"></i> Lecturer/Technician Login Here</p>
		<p id="loginErr"></p>
		<div class="loginWrapper">
			<form method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" placeholder="Enter Username" class="form-control" id="usernameLecturer">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" placeholder="Enter Password" class="form-control" id="passwordLecturer">
			</div>
			<div class="form-group">
				
				<button class="btn btn-success btn-sm btn-block" id="loginLecturer"><i class="icon-key"></i> Login</button>
				<p id="logApprove"></p>
			</div>
		</form>
		</div>
	</div>
	
</div>

<?php include_once 'footer.php' ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
<!-- <script type="text/javascript" src="js/newJSFile.js"></script> -->
</body>
</html>