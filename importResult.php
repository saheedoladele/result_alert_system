<?php

//function admin_import() {
include_once 'db.php';

  if (isset($_REQUEST['upload'])) {
    $level = $_POST['level'];
    //determin table to upload
    
    // if($level = "ND1"){
    //   $table = "nd1result";
    // }
    //  elseif($level = "ND2"){
    //   $table = "nd2result";
    // }
    //  elseif($level = "HND1"){
    //   $table = "hnd1result";
    // }
    //  elseif($level = "HND2"){
    //   $table = "hnd2result";
    // }else{
    //   echo '<script> alert("Please Select Level of Study") </script>';
    //   exit;
    // }

 

   switch ($level) {
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

    $ok = true;
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    if ($file == NULL) {
      error(_('Please select a file to import'));
      //redirect(page_link_to('admin_export'));
    }
    else {
      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
          
          
          
          $name = $filesop[0];
          $matricno = $filesop[1];
          $ccode = $filesop[2];
          $unit = $filesop[3];
          $score = $filesop[4];
          $semester = $filesop[5];
          


 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = mysqli_query($connect,"
          INSERT INTO $table SET
          matricno ='" . mysqli_real_escape_string($connect,$matricno) . "',
          name ='" . mysqli_real_escape_string($connect,$name) . "',
          ccode='" . mysqli_real_escape_string($connect,$ccode) . "',
          unit='" . mysqli_real_escape_string($connect,$unit) . "',
           score='" . mysqli_real_escape_string($connect,$score) . "',
          semester='" . mysqli_real_escape_string($connect,$semester) . "'");
        }
      }

      if ($sql) {
        // success(_("You database has imported successfully!"));
        // redirect(page_link_to('admin_export'));
        echo '<p class="alert alert-success"> Result Uploaded Successfully </p>';
      } else {
        // error(_('Sorry! There is some problem in the import file.'));
        // redirect(page_link_to('admin_export'));
          echo '<p class="alert alert-danger"> Error Occure While Uploading Result </p>';
        }
    }
  }
//}
