<?php
include  "config/db.php";
// $protocol = $_SERVER['SERVER_PROTOCOL'];
//   // echo $protocol;
//   if (strpos($protocol, "HTTPS")) {
//     $protocol = "HTTPS://";
//   }else{
//     $protocol = "HTTP://";
//   }

//   $redirect = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

unset($_SESSION["user_guid"], $_SESSION["email"],$_SESSION["username"]);
// $db->set('login',false);
session_destroy();
header("Location: login.php");

?>