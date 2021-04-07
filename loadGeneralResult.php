<?php
include_once 'db.php';
$resArr = array();

 $rLevel = $_REQUEST['rLevel'];
 $rsemester = $_REQUEST['rsemester'];

 switch ($rLevel) {
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
  $getQL = "SELECT * FROM gpa WHERE semester='$rsemester'";
  $res= mysqli_query($connect,$getQL);
  $get = mysqli_fetch_array($res);
  $gpa = $get['gpa'];
 $output = '';  
   
 $sql = "SELECT * FROM $table";
 $result = mysqli_query($connect, $sql);  
 $output .= '  
 <ul class="list-group list-group-flush">';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
        $resArr[] = $row['ccode'].":".$row['score'];  
          
      } 
       $output .= '  
                <span class="">'.implode(", ", $resArr).' GPA: '.$gpa.'</span> 
           '; 
 $output .= '</ul>  
      </div>';  
  }else{
    $output .= '<li class="list-group-item myList" style="color:red;"> No Result found for this semester </li> ';
  }
 //echo json_encode($output);  
      echo $output;
?>