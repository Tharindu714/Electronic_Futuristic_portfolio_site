<?php
  session_start();
  require "connection.php";

    $length = sizeof($_FILES);    //We can get a length of array using sizeof
    if ($length <= 3 && $length > 0) {

      $allowed_img_extension = array("image/jpeg", "image/jpg", "image/png", "image/svg+xml");
      for ($x = 0; $x < $length; $x++) {
        if (isset($_FILES["img" . $x])) {

          $image_file = $_FILES["img" . $x];
          $file_ex = $image_file["type"];

          if (in_array($file_ex, $allowed_img_extension)) {

            $new_img_ex;
            if ($file_ex == "image/jpg") {
              $new_img_ex = ".jpg";
            } else if ($file_ex == "image/jpeg") {
              $new_img_ex = ".jpeg";
            } else if ($file_ex == "image/png") {
              $new_img_ex = ".png";
            } else if ($file_ex == "image/svg+xml") {
              $new_img_ex = ".svg";
            }

            $file_name = "resource//gallery//" . $x . "_" . uniqid() . $new_img_ex;
            move_uploaded_file($image_file["tmp_name"], $file_name);

            Database::insUpdelete("INSERT INTO `amp_photo`(`code`)
      VALUES ('" . $file_name . "')");
         } else {
          echo ("invalid Image type");
        }
      }
    }

    echo ("Image Saved Successfully");

  } else {
    echo ("Invalid Image count");
  }