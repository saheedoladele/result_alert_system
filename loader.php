<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.loader {
    text-align: center;    
}
.loader span {
    display: inline-block;
    vertical-align: middle;
    width: 10px;
    height: 10px;
    margin: 50px auto;
    background: black;
    border-radius: 50px;
    -webkit-animation: loader 0.9s infinite alternate;
    -moz-animation: loader 0.9s infinite alternate;
}
.loader span:nth-of-type(2) {
    -webkit-animation-delay: 0.3s;
    -moz-animation-delay: 0.3s;
}
.loader span:nth-of-type(3) {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
}
@-webkit-keyframes loader {
  0% {
    width: 10px;
    height: 10px;
    opacity: 0.9;
    -webkit-transform: translateY(0);
  }
  100% {
    width: 24px;
    height: 24px;
    opacity: 0.1;
    -webkit-transform: translateY(-21px);
  }
}
@-moz-keyframes loader {
  0% {
    width: 10px;
    height: 10px;
    opacity: 0.9;
    -moz-transform: translateY(0);
  }
  100% {
    width: 24px;
    height: 24px;
    opacity: 0.1;
    -moz-transform: translateY(-21px);
  }
}

/************************************/
#facebook{
	margin-top:30px;
	float:left;
}
.facebook_block{
	background-color:#9FC0FF;
	border:2px solid #3B5998;
	float:left;
	height:30px;
	margin-left:5px;
	width:8px;
        opacity:0.1;
	-webkit-transform:scale(0.7);
	-webkit-animation-name: facebook;
 	-webkit-animation-duration: 1s;
 	-webkit-animation-iteration-count: infinite;
 	-webkit-animation-direction: linear;
	
	}
#block_1{
 	-webkit-animation-delay: .3s;
 }
#block_2{
 	-webkit-animation-delay: .4s;
}
#block_3{
 	-webkit-animation-delay: .5s;
}
#block_3{
 	-webkit-animation-delay: .6s;
}
@-webkit-keyframes facebook{
	0%{-webkit-transform: scale(1.2);opacity:1;}
	100%{-webkit-transform: scale(0.7);opacity:0.1;}
}
	</style>
</head>
<body>
<div class="loader">
    <span></span>
    <span></span>
    <span></span>

     <div id='facebook' >
             <div id='block_1' class='facebook_block'></div>
             <div id='block_2' class='facebook_block'></div>
             <div id='block_3' class='facebook_block'></div
             	<div id='block_4' class='facebook_block'></div></div>

</div>
</body>
</html>