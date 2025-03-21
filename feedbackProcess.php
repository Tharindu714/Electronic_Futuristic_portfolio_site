<?php
require "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];

if (empty($name)) {
  echo ("Please Enter Your Name");
} else if (empty($email)) {
  echo ("Please Enter Your email");
} else if (empty($feedback)) {
  echo ("Entering Your Feedback is the most required");
}else if(strlen($feedback) < 10 || strlen($feedback) > 250){
  echo ("You are exceeding the word limit <br> Type 10-250 characters allowed");
} else {

  Database::insUpdelete("INSERT INTO `feedback`

    (`user_name`,`feedback`,`email`)
    VALUES ('" . $name . "' ,'" . $feedback . "' ,'" . $email . "')");

  echo ("Submitted Successfully");
}