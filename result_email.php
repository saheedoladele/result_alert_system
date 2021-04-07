<?php
$mysubject= "Semester Result";
  $rMatricNumber = htmlspecialchars($_POST['rMatricNumber']);
  $rName = htmlspecialchars($_POST['rName']);
  $emailResult = htmlspecialchars($_POST['emailResult']);

  $reSemester = htmlspecialchars($_POST['reSemester']);
  $reLevel = htmlspecialchars($_POST['reLevel']);
  
  $to = htmlspecialchars($_POST['mails']);
?>
<?php $message ='
	<style type="text/css">
	ul{
		list-style: none;
		line-height: 30px;
		font-size: 15px;
		width: 500px;
	}
	ul li{
		border-bottom: 1px solid black;

	}
	.msgWrapper{
		border: 1px solid black;
		width: 600px;
		padding-left: 10px;
	}
	.top{
		text-align: center;
		line-height: 20px;
	}
</style>
<div class="msgWrapper">
<div class="top">
	<h2>Department of Computer Engineering</h2>
	<h4>The Polytechnic, Ibadan</h4>
	<h3 style="text-transform: uppercase;">Student Semester Result</h3>
</div>
<ul>
	<li><strong>Name(s): </strong> Oladele Saheed </li>
	<li><strong>Matric Number: </strong> 2018070445535 </li>
	<li><strong>Level: </strong> ND1 </li>
	<li><strong>Semester: </strong> 1 </li>
	<li><strong>Result(s): </strong> COM111: 67, COM122: 45 </li>
</ul>
<p><strong>Remark: </strong> Try and put more effort, particularly in those courses, where your performance is low</p>
</div>
';
?>
<?php

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$email2 = "soladele4all@yahoo.com";
  
  $headers .= "From: ".'Department of Computer Engineering' . "\r\n" ."CC: $email2";
  
  //echo $headers;
  $message = mail($to,$mysubject,$message,$headers);
  
  if ($message) {
    
    echo "Result Successfully sent via Email";
  }else{
    echo 'Oops! It seem there is error sending result';
  }
?>


