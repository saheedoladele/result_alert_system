<?php
include_once 'db.php';
$resArr = array();

$sMatricNo = $_REQUEST['sMatricNo'];
 $dClass = $_REQUEST['dClass'];
 $mysemester = $_REQUEST['mysemester'];

 switch ($dClass) {
      case 'ND1':
        $table = "nd1result";
        $table2 = "nd1gpa";
        break;
      case 'ND2':
        $table = "nd2result";
        $table2 = "nd2gpa";
        break;
      case 'HND1':
        $table = "hnd1result";
        $table2 = "hnd1gpa";
        break;
      case 'HND2':
        $table = "hnd2result";
        $table2 = "hnd2gpa";
        break;
      default:
        echo '<script> alert("Please Select Level of Study") </script>';
        break;
    }
//get student GPA
  $getQL = "SELECT gpa FROM $table2 WHERE matricno='$sMatricNo' and semester='$mysemester'";
  $res= mysqli_query($connect,$getQL);
  $get = mysqli_fetch_array($res);
  $gpa = $get['gpa'];
 $output = '';  
   
 $sql = "SELECT * FROM $table WHERE matricno='$sMatricNo' and semester='$mysemester'";
 $result = mysqli_query($connect, $sql);  
 $output .= '  
 <ul class="list-group list-group-flush">';  
 if(mysqli_num_rows($result) > 0)  
 {  
     // while($row = mysqli_fetch_array($result))  
     // {  
      $row = mysqli_fetch_array($result);
        $resArr[] = $row['ccode'].":".$row['score'];    
    //  } 
      $output .= '  
               <li class="list-group-item myList"><strong>Your Result: </strong> <textarea class="form-control" id="res">'.implode(", ", $resArr).' GPA: '.$gpa.'</textarea></li>
                <li class="list-group-item myList"><button class="btn btn-success btn-sm" id="emailResult"><i class="icon-envelope"></i> Send Via Email</button> | <button class="btn btn-warning btn-sm" id="phoneResult"><i class="icon-phone"></i> Send Via Phone</button></li> 
                <li class="list-group-item myList"><span id="emailSuccess"> </span></li> 
                
           ';    
 
  
 $output .= '</ul>  
      </div>';  
  }else{
    $output .= '<li class="list-group-item myList" style="color:red;"> No Result found for this semester </li> ';
  }
 //echo json_encode($output);  
      echo $output;
?>