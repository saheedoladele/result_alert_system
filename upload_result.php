<?php
include_once 'session.php';
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
<div class="container" >
	<div class="row">
	<?php 
	if($role == 'Admin'){
		include_once 'left.php';
	}else {
		include_once 'leftLect.php';
	}
	?>
	<div class="col-lg-9">
		<p class="alert alert-success"> <strong>Upload Result:</strong> You can upload a prepared student's result in excel file</p>

		
		<p><strong>NOTE: </strong> Ensure you upload the proper template get the required <a href="sample/result.csv">Sample Data Here </a></p>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label><strong>Select Level</strong></label>
				<select name="level" id="level" class="form-control">
					<option>--Level--</option>
					<option>ND1</option>
					<option>ND2</option>
					<option>HND1</option>
					<option>HND2</option>
				</select>
			</div>
			<div class="form-group">
				<label>Choose File(.csv, xlv)</label>
				<input type="file" name="file" class="form-control" style="background-color: transparent;">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-sm" type="submit" name="upload" id="upload"><i class="icon-upload"></i> Upload </button>
			</div>
		</form>
		<?php
		if(isset($_POST['upload'])){

			include_once 'importResult.php';
		}
		?>
		
	</div>
	
</div>
</div>


<div style="height:35px;">

</div>
<?php include_once 'footer.php'  ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>