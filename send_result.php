<?php
include_once 'db.php';
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
	<?php include_once 'left.php'; ?>
	<div class="col-lg-9">
		<p class="alert alert-success"> <strong>Send Result:</strong> Select Class and Click Send</p>
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group">
			<label><strong>Select Semester:</strong></label>
			<select name="rsemester" id="rsemester" class="form-control">
				<option></option>
				<option>1</option>
				<option>2</option>
				
			</select>
		</div>
		</div>
		<div class="col-lg-8">
			<div class="form-group">
			<label><strong>Select Class:</strong></label>
			<select name="rLevel" id="rLevel" class="form-control">
				<option></option>
				<option>ND1</option>
				<option>ND2</option>
				<option>HND1</option>
				<option>HND2</option>
			</select>
		</div>
		</div>
	</div>
	
	
		<div id="output">
		
	
	</div>	
	</div>
	
</div>
</div>


<?php include_once 'footer.php'  ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
<script type="text/javascript" src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

