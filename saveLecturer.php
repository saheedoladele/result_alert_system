<?php
include_once 'db.php';

$staffid = $_POST['staffid'];
$surnames = $_POST['surnames'];
$othernames = $_POST['othernames'];
$title = $_POST['title'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = 'Lecturer';

if (empty($staffid) || empty($surnames) || empty($othernames)||empty($title)||empty($username)||empty($password)){
	echo "Required fields left unfill";
	exit;
}else{
	//writing SQL query
	$query = "INSERT into lecturers (staffid,surnames,othernames,title,username,password,role) VALUES ('$staffid','$surnames','$othernames','$title','$username','$password','$role')";
	$result = mysqli_query($connect,$query);
	if(!$result){
		echo "Whoops! error occure while saving record! ";
	}else{
		echo "Great!, Lecturer Added Successfully!";
	}
}
?>