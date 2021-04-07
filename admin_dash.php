<?php
//session_start();
include_once 'db.php';
include_once 'session.php'; 

$query = "SELECT * FROM admin WHERE username ='".$_SESSION['username']."'";
$getQL = mysqli_query($connect,$query);
$myData = mysqli_fetch_assoc($getQL);
$name = $myData['name'];
$role = $myData['role'];
$_SESSION['role'] = $role;
?>
<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>
<style type="text/css">
	a{
		width: auto;
	}
</style>
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
		<p class="alert alert-success"> <strong>Welcome  <?php echo $name.'('.$role.')' ?></strong> Kindly note that everything you do here is very important</p>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="addStudent.php">
				<i class="icon-user 2x"></i>
				<h4>Add Student</h4>
			</a>
			</div>
			
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="addSlecturer.php"><i class="icon-plus 2x"></i>
				<h4>Add Lecturer</h4></a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="single_result.php"><i class="icon-envelope 2x"></i>
				<h4>Send Result</h4></a>
			</div>
		</div>
<p></p>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="Upload_result.php"><i class="icon-upload 2x"></i>
				<h4>Upload Result</h4></a>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="#"><i class="icon-pencil 2x"></i>
				<h4>Compute Result</h4></a>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" id="menus">
				<a href="logout.php"><i class="icon-power-off 2x"></i>
				<h4>Logout</h4></a>
			</div>
		</div>
		
	</div>
	
</div>
</div>


<?php include_once 'footer.php' ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>