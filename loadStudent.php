<?php
include_once 'db.php';


 $sMatricNo = $_REQUEST['sMatricNo'];
 $dClass = $_REQUEST['dClass'];

 switch ($dClass) {
      case 'ND1':
        $table = "nd1rec";
        break;
      case 'ND2':
        $table = "nd2rec";
        break;
      case 'HND1':
        $table = "hnd1rec";
        break;
      case 'HND2':
        $table = "hnd2rec";
        break;
      default:
        echo '<script> alert("Please Select Level of Study") </script>';
        break;
    }
;
 $output = '';  
   
 $sql = "SELECT * FROM $table WHERE matricno='$sMatricNo'";
 $result = mysqli_query($connect, $sql);  
 $output .= '  
 <ul class="list-group list-group-flush">';  
 if(mysqli_num_rows($result) > 0)  
 {  
      //while($row = mysqli_fetch_array($result))  
     // {  
          $row = mysqli_fetch_array($result);
           $output .= '  
                <li class="list-group-item myList"><strong>Matric Number: </strong> <span id="rMatricNumber">'.$row['matricno'].'</span></li> 
                <li class="list-group-item myList"><strong>Name(s): </strong><span id="rName"> '.$row['surname']." ".$row['othername'].'</span></li>
                <li class="list-group-item myList"><strong>Email: </strong> <span id="mails"> '.$row['email'].'</span></li>
                <li class="list-group-item myList"><strong>Phone No: </strong> '.$row['phoneno'].'</li>
                
           ';  
      //}    
 }  
  
 $output .= '</ul>  
      </div>';  
 //echo json_encode($output);  
      echo $output;

?>