<?php
include_once 'db.php';

$matricno = $_POST['matricno'];
$level = $_POST['level'];
$semester = $_POST['semester'];
$gpa = $_POST['gpa'];

switch ($level) {
      case 'ND1':
        $table = "nd1gpa";
        break;
      case 'ND2':
        $table = "nd2gpa";
        break;
      case 'HND1':
        $table = "hnd1gpa";
        break;
      case 'HND2':
        $table = "hnd2gpa";
        break;
      default:
        echo '<script> alert("Please Select Level of Study") </script>';
        break;
    }

if (empty($matricno) || empty($level) || empty($semester)||empty($gpa)){
	echo "Required fields left unfill";
	exit;
}
else{
	//getdat
	$getQL = "SELECT * FROM $table WHERE matricno='$matricno' && semester='$semester'";
	$rows = mysqli_num_rows(mysqli_query($connect,$getQL));
	if($rows <= 0){

	//writing SQL query
	$query = "INSERT into $table (matricno,level,semester,gpa) VALUES ('$matricno','$level','$semester','$gpa')";
	$result = mysqli_query($connect,$query);
	if(!$result){
		echo "Whoops! error occure while Saving GPA! ";
	}else{
		echo "Great!, Student GPA saved Successfully!";
	}
	}else{
		echo "GPA Already Added, Do you wanna Update? ".'<button class="btn btn-warning btn-sm" id="updateGPA"><i class="icon icon-update"></i> Yes </button>';

	}
}
?>