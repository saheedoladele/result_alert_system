<?php
include_once 'db.php';
//function that return student point
function Point($score){
  if($score < 40){
    $pt = 0;
  }elseif ($score >=40 && $score < 45) {
    $pt = 2;
  }
  elseif ($score >=45 && $score < 50) {
    $pt = 2.25;
  }
  elseif ($score >=50 && $score < 55) {
    $pt = 2.50;
  }
  elseif ($score >=55 && $score < 60) {
    $pt = 2.75;
  }
  elseif ($score >=60 && $score < 65) {
    $pt = 3.0;
  }
  elseif ($score >=65 && $score < 70) {
    $pt = 3.25;
  }
  elseif ($score >=70 && $score < 75) {
    $pt = 3.50;
  }
  elseif ($score >=75 && $score < 100) {
    $pt = 4;
  }else{
    $pt = 0;
  }
  return $pt;
}

//function that return student grade
function Grade($score){
  if($score < 40){
    $grd = 'F';
  }elseif ($score >=40 && $score < 45) {
    $grd = 'D2';
  }
  elseif ($score >=45 && $score < 50) {
    $grd = 'D1';
  }
  elseif ($score >=50 && $score < 55) {
    $grd = 'C2';
  }
  elseif ($score >=55 && $score < 60) {
    $grd = 'C1';
  }
  elseif ($score >=60 && $score < 65) {
    $grd = 'B2';
  }
  elseif ($score >=65 && $score < 70) {
    $grd = 'B1';
  }
  elseif ($score >=70 && $score < 75) {
    $grd = 'A2';
  }
  elseif ($score >=75 && $score < 100) {
    $grd = 'A1';
  }else{
    $grd = 'F';
  }
  return $grd;
}

//function return gpa


function Remerk($gpa)
{

  if($gpa >=3.5 && $gpa <= 4.0)
      {
        $rem = 'Distinction';
      }
      elseif($gpa >=3.0 && $gpa <= 3.49)
      {
        $rem = 'Upper Credit';
      }
      elseif($gpa >=2.5 && $gpa <= 2.99)
      {
        $rem = 'Lower Credit';
      }
      elseif($gpa >=2.0 && $gpa <= 2.49)
      {
        $rem = 'Pass';
      }
      elseif($gpa >=0.0 && $gpa <= 1.99)
      {
        $rem = 'Fail';
      }
      else{
        $rem = "Invalid parameter";
      }
      return $rem;
}

$matricNumber = $_REQUEST['matricNumber'];
 $myClass = $_REQUEST['myClass'];
 $semester = $_REQUEST['semester'];

 switch ($myClass) {
      case 'ND1':
        $table = "nd1result";
        break;
      case 'ND2':
        $table = "nd2result";
        break;
      case 'HND1':
        $table = "hnd1result";
        break;
      case 'HND2':
        $table = "hnd2result";
        break;
      default:
        echo '<script> alert("Please Select Level of Study") </script>';
        break;
    }
;
 $output = '';  
   
 $sql = "SELECT * FROM $table WHERE matricno='$matricNumber' && semester='$semester'";
 $result = mysqli_query($connect,$sql);
 $rows = mysqli_num_rows($result);

 if($rows > 0){
 $output .= '  
 <table class="table table-bordered">
<tr><th>Course Code</th><th>Course Unit</th><th>Score</th><th>Point</th><th>Grade</th></tr>
 ';  
 if(mysqli_num_rows($result) > 0)  
 {  
  $sumUnit = 0;
  $sumPoint = 0;
      while($row = mysqli_fetch_array($result))  
      {  
      $sumUnit +=$row['unit'];
      $sumPoint +=Point($row['score'])*$row['unit'];
      $output .= '  
                  <tr><td>'.$row['ccode'].'</td><td>'.$row['unit'].'</td><td>'.$row['score'].'</td><td>'.Point($row['score'])*$row['unit'].'</td><td>'.Grade($row['score']).'</td> </tr>
               ';
}
$output .='<tr style="background:rgba(60,169,100,.4); color:white; font-weight:bold; font-size:15px;"><td><strong>TOTALS: </strong></td><td>'.$sumUnit.'</td><td></td><td>'.$sumPoint.'</td><td></td>  </tr>
          <tr style="background:rgba(60,169,100,.7); color:white; font-weight:bold; font-size:18px;"><td><strong>GPA: </strong></td><td id="gpa">'.$sumPoint / $sumUnit.'</td><td></td><td></td><td></td>  </tr>';
              $output .='</table><li class="list-group-item myList"><button class="btn btn-success" id="saveGPA"><i class="icon-save"></i> Save Result</button></li> 
                
           ';    
 }  
  
 $output .= '</ul>  
      </div>';  
  }else{
     $output .= '  
      <table class="table table-bordered">
      <tr><th>Course Code</th><th>Course Unit</th><th>Score</th><th>Point</th></tr>
      <tr style="color:red;"><td colspan="4"><i class="icon-times"></i> No Record Found for this semester </td></tr>
 '; 
  } 
 //echo json_encode($output);  
      echo $output;



?>