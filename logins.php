<?php
include_once 'db.php';
session_start();
$usernameLecturer = $_POST['usernameLecturer'];
$passwordLecturer = $_POST['passwordLecturer'];

if (empty($usernameLecturer)){
	echo "Enter Your Username";
	exit;
}
elseif(empty($passwordLecturer)){
	echo "Enter Your Password";
	exit;
}
else{
	$query = "SELECT * FROM lecturers WHERE username ='$usernameLecturer' and password ='$passwordLecturer'";
	$result = mysqli_query($connect,$query);
	$find = mysqli_num_rows($result);
	if($find > 0){
		$get = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $get['username'];
		
		echo "login";
	}
	else{
		echo "Invalid Login Paramaters";
	}

}
?>