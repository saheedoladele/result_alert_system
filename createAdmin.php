<?php
include_once 'db.php';

$sur_admin = $_POST['sur_admin'];
$other_admin = $_POST['other_admin'];
$user_admin = $_POST['user_admin'];
$pass_admin = $_POST['pass_admin'];

$name = $sur_admin." ".$other_admin;
$created_date = date('Y-m-d');
$created_by ="admin";

$role = 'Admin';
if (empty($sur_admin) || empty($other_admin) || empty($user_admin)||empty($pass_admin)){
	echo "Required fields left unfill";
	exit;
}else{
	//writing SQL query
	$query = "INSERT into admin (name,username,password,created_by,created_date,role) VALUES ('$name','$user_admin','$pass_admin','$created_by','$created_date','$role')";
	$result = mysqli_query($connect,$query);
	if(!$result){
		echo "Whoops! error occure while saving record! ";
	}else{
		echo "Great!, Admin Added Successfully!";
	}
}

?>