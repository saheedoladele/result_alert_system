<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>

<style type="text/css">
	body{
	
	}
	
	/*******/
	
  .jumbotronSection{
      height: 400px;
      background-color: transparent;
      border:1px solid green;
      width:60%;
      margin: auto;
        }
      .main-content{

      }
      .main-content::before{
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: url('images/3.jpg');
        opacity: .4;
        content: "";
        z-index: -1;
        background-repeat:no-repeat;
        background-position:center;
        background-size:cover;
      }
   
 .col-lg-6{
     padding-top: 10px;
     border-radius:5px;
 }
.col-lg-6:hover{
    border: 1px solid green;
    box-shadow: 3px 3px green;
    cursor: pointer;
    background: #fff;
    color: green;
    transition: .5s ease;
    margin-top:10px;
}
.main-content{
	
		
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;

}
</style>
</head>
<body>
	<p class="text-center"><img src="images/logo1.png" style="margin-top: 20px;"></p>
	<br>
	<br>
	<main class="main-content">
		<div class="container">
			<div class="jumbotron jumbotronSection">
            <div class="row">
			
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
               <a href="loginAdmin.php"> <img src="images/acct.png">
                <strong>Administrator</strong>
                <p>An Administartor/Coordinator should click on this link</p>
               </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                   <a href="lecturerLogin.php"> <img src="images/form.png">
                    <strong>Lecturer/Technologist</strong>
                    <p>A registered Lecturer/Technologist  should click this link</p>
                </a>
            </div>
           
            
        </div>
			</div>
		</div>
	</main>




<?php include_once 'footer.php' ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
</body>
</html>
