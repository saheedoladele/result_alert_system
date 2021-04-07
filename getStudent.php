<?php
include_once 'db.php';

 $rLevel = $_REQUEST['rLevel'];
 switch ($rLevel) {
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
 <p class="text-right"><button class="btn btn-success btn-sm"><i class="icon-envelope"></i> Email Message</button> | <button class="btn btn-warning btn-sm"><i class="icon-phone"></i> Phone Message</button></p>
      <div class="table-responsive">  
           <table class="table table-bordered table-hover">  
                <tr>  
                     <th width="10%">Matric No</th>  
                     <th width="40%">Name(s)</th>  
                     <th width="40%">Phone No</th>  
                     <th width="10%">Email</th>  
                      <th width="10%">Result</th>
                     <th width="10%"><input type="checkbox" name="selectAll" id="selectAll">Select All</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>   
                     <td class="matricno" data-id1="'.$row["id"].'" width="50%" contenteditable>'.$row["matricno"].'</td>  
                     <td class="surname" data-id2="'.$row["id"].'" contenteditable>'.$row["surname"]." ".$row["othername"].'</td>  
                     <td class="phoneno" data-id2="'.$row["id"].'" contenteditable>'.$row["phoneno"].'</td>
                     <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td>
                     <td class="result" data-id2="'.$row["id"].'" contenteditable id="sResult"></td>
                     <td width="100%"><input type="checkbox" name="msg" class=""></td>  
                </tr>  
           ';  
      }  
      
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="5">No record yet</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 //echo json_encode($output);  
      echo $output;
// <button type="button" name="delete_msg" data-id3="'.$row["id"].'" class="btn btn-xs btn-success btn_mail"><i class="icon-envelope"></i></button> <button type="button" name="delete_msg" data-id3="'.$row["id"].'" class="btn btn-xs btn-warning btn_phone"><i class="icon-phone"></i></button>
?>