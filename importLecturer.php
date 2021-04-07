<?php

//function admin_import() {
include_once 'db.php';

  if (isset($_REQUEST['upload'])) {
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
          $staffid = $filesop[0];
          $surnames = $filesop[1];
          $othernames = $filesop[2];
          $title = $filesop[3];
          $username = $filesop[4];
          $password = $filesop[5];
         

 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = mysqli_query($connect,"
            INSERT INTO lecturers SET
            staffid ='" . mysqli_real_escape_string($connect,$staffid) . "',
            surnames ='" . mysqli_real_escape_string($connect,$surnames) . "',
            othernames='" . mysqli_real_escape_string($connect,$othernames) . "',
            title='" . mysqli_real_escape_string($connect,$title) . "',
            username='" . mysqli_real_escape_string($connect,$username) . "',
            password='" . mysqli_real_escape_string($connect,$password) . "'");
        }
      }

      if ($sql) {
        // success(_("You database has imported successfully!"));
        // redirect(page_link_to('admin_export'));
        echo '<script> alert("Upload Done")</script>';
      } else {
        // error(_('Sorry! There is some problem in the import file.'));
        // redirect(page_link_to('admin_export'));
        echo '<script> alert("Error Uploading file")</script>';
        }
    }
  }
//}
