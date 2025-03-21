<?php

session_start();
require "connection.php";

if(isset($_SESSION["user"])){

    $mail = $_SESSION["user"]["email"];
    // $type = $_POST["type"];
    $pid = $_POST["p"];
    $feedback = $_POST["f"];

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::insUpdelete("INSERT INTO `feedback`(`product_id`,`user_email`,`feedback`,`date`) VALUES 
    ('".$pid."','".$mail."','".$feedback."','".$date."' )");

    echo "1";

}
