<?php
include_once 'db.php';
session_start();
$usernameAdmin = $_POST['usernameAdmin'];
$passwordAdmin = $_POST['passwordAdmin'];

if (empty($usernameAdmin)){
	echo "Enter Your Username";
	exit;
}
elseif(empty($passwordAdmin)){
	echo "Enter Your Password";
	exit;
}
else{
	$query = "SELECT * FROM admin WHERE username ='$usernameAdmin' and password ='$passwordAdmin'";
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