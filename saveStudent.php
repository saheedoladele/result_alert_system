<?php
include_once 'db.php';

$matricno = $_POST['matricno'];
$surname = $_POST['surname'];
$othername = $_POST['othername'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$level = $_POST['level'];
$section = $_POST['section'];


switch ($level) {
	case 'ND1':
	  $table = "nd1rec";
	  break;
	case 'ND2':
	  $table = "nd2rec";
	  break;
	case 'HND1':
	  $table = "hnd1rec";
	  break;
	case 'HND2':
	  $table = "hnd2rec";
	  break;
	default:
	  echo '<script> alert("Please Select Level of Study") </script>';
	  break;
  }


if (empty($matricno) || empty($surname) || empty($othername)||empty($gender)||empty($level)||empty($section)){
	echo "Required fields left unfill";
	exit;
}else{
	//writing SQL query
	$query = "INSERT into $table (matricno,surname,othername,gender,email, phoneno, level,section) VALUES ('$matricno','$surname','$othername','$gender','$email','$phoneno','$level','$section')";
	$result = mysqli_query($connect,$query);
	if(!$result){
		echo "Whoops! error occure while saving record! ".mysqli_error($connect);
	}else{
		echo "Great!, Student Added Successfully!";
	}
}
?>

