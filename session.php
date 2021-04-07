<?php
session_start();
if(isset($_SESSION['username'])){

}else{
	echo '<script> alert("You do not have a session open, kindly login")</script>';
	header('location:index.php');
}

?>