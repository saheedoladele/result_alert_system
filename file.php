<?php

// /* Getting file name */
// $filename = $_FILES['file']['name'];

// /* Location */
// $location = "upload/".$filename;
// $uploadOk = 1;
// $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

// /* Valid Extensions */
// $valid_extensions = array("jpg","jpeg","png");
//  Check file extension 
// if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
//    $uploadOk = 0;
// }

// if($uploadOk == 0){
//    echo 0;
// }else{
//    /* Upload file */
//    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
//       echo $location;
//    }else{
//       echo 0;
//    }
// }
?>
<?php
$newFileName = 1234567;

if(isset($_FILES["file"]["type"]))
{
 $fileinfo = @getimagesize($_FILES["file"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
$_FILES["file"]["name"] = $newFileName.".".$file_extension;
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}elseif($width > 140 || $height > 160){
echo '<span id="invalid"><b>Invalid Dimension, check image width and height </b></span>';
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
echo "<b>Temp file:</b> " . $width . "<br>";
echo "<b>Temp file:</b> " . $height . "<br>";
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
?>