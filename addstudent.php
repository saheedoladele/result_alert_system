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
		<p class="alert alert-success"> <strong>Add Student:</strong> Carefully Enter Student Information below</p>
		<p id="errMsg"></p>
		<form method="post">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
				<label><strong>Matric Number:</strong></label>
							<input type="text" name="matricnumber" placeholder="Enter Matric Number" class="form-control" id="matricnumber" required="">
						</div>
						<div class="form-group">
							<label><strong>Surname:</strong></label>
							<input type="text" name="surname" placeholder="Enter Surname" class="form-control" id="surname" required="">
						</div>
						<div class="form-group">
							<label><strong>OtherNames:</strong></label>
							<input type="text" name="othername" placeholder="Enter OtherNames" class="form-control" id="othername" required="">
						</div>

						<div class="form-group">
							<label><strong>Email Address:</strong></label>
							<input type="text" name="email" placeholder="info@example.com" class="form-control" id="email" required="">
						</div>

				</div>

				<div class="col-lg-6">
						<div class="form-group">
				<label><strong>Gender:</strong></label>
				<select name="gender" id="gender" class="form-control" style="background-color: transparent; border-bottom-style: solid; border-bottom-color: rgb(60,179,113); border-bottom-width: 2px; color: rgb(60,179,113);">
					<option>--Select--</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-group">
				<label><strong>Study Level:</strong></label>
				<select name="level" id="level" class="form-control" style="background-color: transparent; border-bottom-style: solid; border-bottom-color: rgb(60,179,113); border-bottom-width: 2px; color: rgb(60,179,113);">
					<option>--Select--</option>
					<option>ND1</option>
					<option>ND2</option>
					<option>HND1</option>
					<option>HND2</option>
				</select>
			</div>
			<div class="form-group">
				<label><strong>Accademic Section:</strong></label>
				<select name="section" id="section" class="form-control" style="background-color: transparent; border-bottom-style: solid; border-bottom-color: rgb(60,179,113); border-bottom-width: 2px; color: rgb(60,179,113);">
					<option>--Select--</option>
					<option>2018/19</option>
					<option>2019/20</option>
					<option>2020/21</option>
					<option>2021/22</option>
				</select>
			</div>

			<div class="form-group">
							<label><strong>Phone No:</strong></label>
							<input type="text" name="phoneno" placeholder="Phone No" class="form-control" id="phoneno" required="">
						</div>


				</div>
			</div>

			<div class="form-group">
				
				<button class="btn btn-success btn-sm" id="save"><i class="icon-save"></i> Save Record</button>
				<p id="msg"></p>
			</div>
		</form>
		
		<hr>
		<p>OR Upload an excel file, with the required template, get the required <a href="#">template HERE </a></p>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label><strong>Select Level:</strong></label>
				<select name="sLevel" id="sLevel" class="form-control" style="background-color: transparent; border-bottom-style: solid; border-bottom-color: rgb(60,179,113); border-bottom-width: 2px; color: rgb(60,179,113);">
					<option>--Level--</option>
					<option>ND1</option>
					<option>ND2</option>
					<option>HND1</option>
					<option>HND2</option>
				</select>
			</div>
			<div class="form-group">
				<label>Choose File(.csv, xlv)</label>
				<input type="file" name="file" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn-sm" type="submit" name="upload"><i class="icon-upload"></i> Upload</button>
			</div>
		</form>
		<?php
		if(isset($_POST['upload'])){
			include_once 'importStudent.php';
		}
		?>
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