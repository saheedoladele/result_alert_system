<?php
include_once 'db.php';
include_once 'session.php';

$role = $_SESSION['role'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>
<style type="text/css">
	.myList{
		background-color: transparent;
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
		<p class="alert alert-success"> <strong><i class="icon-pencil"></i> Compute Result:</strong> Select Class and Click Send</p>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
			<label><strong>Select Semester:</strong></label>
			<select name="semester" id="semester" class="form-control">
				<option></option>
				<option>1</option>
				<option>2</option>
				
			</select>
		</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
			<label><strong>Select Class:</strong></label>
			<select name="myClass" id="myClass" class="form-control">
				<option></option>
				<option>ND1</option>
				<option>ND2</option>
				<option>HND1</option>
				<option>HND2</option>
			</select>
		</div>
		</div>
		<div class="col-lg-6" id="outputs">
			
		</div>
	</div>
	<div id="results">
		
	</div>
	
	<div id="getResult">
		
	</div>
	<p id="addGpaSuccess"></p>
	</div>
	
</div>
</div>


<?php include_once 'footer.php'  ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
</body>
</html>
<script type="text/javascript">

</script>