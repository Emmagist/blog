<?php

    require_once "users.php";

    if (isset($_GET['reg'])) {
        $pg = $_GET['reg'];
    }

    if ($pg == 404) {
        $full_name = $db->escape($_POST['name']); echo $full_name;exit;
    }

    //Register
    // if ($pg == 404) {
    //     $error = "";
    //     echo $full_name = $db->escape($_POST['full_name']);exit;
    //     $username = $db->escape($_POST['user_name']);
    //     $email = $db->escape($_POST['email']);
    //     $phone_number = $db->escape($_POST['tel']);
    //     $password = $db->escape($_POST['password']);
    //     $password_hash = password_hash($password, PASSWORD_DEFAULT);
    //     $ref = $db->escape($_POST['ref']);
    //     // $token = $db->entityGuid();

    //     if (empty($full_name)) {
    //         $error = " Full Name is required";
    //     }

    //     if (empty($username)) {
    //         $error = "Username is required";
    //     }

    //     if (empty($email)) {
    //         $error = "Email is required";
    //     }

    //     if (empty($phone_number)) {
    //         $error = "Phone Number is required";
    //     }

    //     if (empty($password)) {
    //         $error = "Password is required";
    //     }

    //     if ($db->validatePhoneNumber($phone_number) == false) {
    //         $error = "Provide a good email address!";
    //     }

    //     if ($user->findUserByUsername($username) > 0) {
    //         $error = "Username already exist!";
    //     }

    //     if ($user->findUserByEmail($email) > 0) {
    //         $error = "Email already exist!";
    //     }

    //     if ($user->findUserByTel($phone_number)) {
    //         $error = "Phone Number already exist!";
    //     }

    //     if ($db->validateEmail($email) == false) {
    //         $error = "Provide a good email address!";
    //     }

    //     // File upload
    //     $target_dir = "../user-image/";
    //     $target_file  = $target_dir . basename($_FILES["file_upload"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //     $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
    //     if($check == false) {
    //         $error =  "File is not an image";
    //         $uploadOk = 0;
    //     }

    //     if (file_exists($target_file)) {
    //         $error = "Sorry, file already exists.";
    //         $uploadOk = 0;
    //     }

    //     if ($_FILES["file_upload"]["size"] > 500000) {
    //         $error = "Sorry, your file is too large.";
    //         $uploadOk = 0;
    //     }

    //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //         $error = "Sorry, only JPG, JPEG, PNG files are allowed.";
    //         $uploadOk = 0;
    //     }

    //     if (empty($error)) {
    //         if ($uploadOk == 1) {
    //             $move_file = move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file);
    //             $r = $db->saveData(TBL_TEMP_DB, "full_name = '$full_name', username = '$username', email = '$email',  image = '$target_file', phone_number = '$phone_number', password = '$password_hash', ref = '$ref'"); var_dump($r);exit;
    //             $error = "done";
    //         }
    //     }

    //     echo $error;exit;
    // }

?>