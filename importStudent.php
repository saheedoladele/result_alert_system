<?php

//function admin_import() {
include_once 'db.php';
$level = $_POST['sLevel'];

  if (isset($_REQUEST['upload'])) {
    $level = $_POST['sLevel'];
    //determin table to upload
    
  
    switch ($level) {
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
          $matricno = $filesop[0];
          $surname = $filesop[1];
          $othername = $filesop[2];
          $gender = $filesop[3];
          $email = $filesop[4];
          $phoneno = $filesop[5];
          $level = $filesop[6];
          $section = $filesop[7];
         


 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = mysqli_query($connect,"
            INSERT INTO $table SET
            matricno ='" . mysqli_real_escape_string($connect,$matricno) . "',
            surname ='" . mysqli_real_escape_string($connect,$surname) . "',
            othername='" . mysqli_real_escape_string($connect,$othername) . "',
            gender='" . mysqli_real_escape_string($connect,$gender) . "',
             email='" . mysqli_real_escape_string($connect,$email) . "',
              phoneno='" . mysqli_real_escape_string($connect,$phoneno) . "',
            level='" . mysqli_real_escape_string($connect,$level) . "',
            section='" . mysqli_real_escape_string($connect,$section) . "'");
        }
      }

      if ($sql) {
        // success(_("You database has imported successfully!"));
        // redirect(page_link_to('admin_export'));
        echo "Upload successfully into"." ".$table;

      } else {
        // error(_('Sorry! There is some problem in the import file.'));
        // redirect(page_link_to('admin_export'));
        // echo '<script> alert("Error Uploading file")</script>';
        echo mysqli_error($connect);
        }
    }
  }
//}
