<?php
include_once 'db.php';




 $sClass = $_REQUEST['sClass'];
 switch ($sClass) {
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

 $output = '';  
 $sql = "SELECT * FROM $table";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
 <label><strong>Select Student [Matric Number]</strong></label>
 <select name="sMatricNo" id="sMatricNo" class="form-control">';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <option>'.$row['matricno'].'</option>  
           ';  
      }    
 }  
 // else  
 // {  
 //      $output .= '<tr>  
 //                          <td colspan="5">No record yet</td>  
 //                     </tr>';  
 // }  
 $output .= '</select>  
      </div>';  
 //echo json_encode($output);  
      echo $output;

?>