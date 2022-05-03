<?php

    require_once "investor.php";

    if (isset($_POST['register'])) {
        // echo $_GET['reg'];exit;
        $errors = [];
       $full_name = $db->escape($_POST['name']);
       $username = $db->escape($_POST['user_name']);//exit;
    //    $ref = $db->escape($_POST['ref']);
       $email = $db->escape($_POST['email']);
       $phone_number = $db->escape($_POST['tel']);
       $password = $db->escape($_POST['password']);

       $hash_password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($full_name)) {
            $errors['name'] = "Full Name is required!";
        }

        if (empty($username)) {
            $errors['username'] = "Username is required!";
        }

        if (empty($email)) {
            $errors['email'] = "Email is required!";
        }

        if (empty($phone_number)) {
            $errors['phone-number'] = "Phone Number is required!";
        }

        if (empty($password)) {
            $errors['password'] = "Password is required!";
        }

        if ($db->validateEmail($email) == false) {
            $errors['invalid-email'] = "Invalid email address";
        }

        if (Investor::getInvestorByEmail($email)) {
            $errors['email-exist'] = "Email already exist!";
        }

        if (Investor::getInvestorByUsername($username)) {
            $errors['username-exist'] = "Username already exist!";
        }

        // if ($db->validatePhoneNumber($phone_number) == false) {
        //     $errors['invalid-number'] = "Invalid phone number format";
        // }

        // File upload
        // $target_dir = "../investor_img/investor_img/";
        // $target_file  = $target_dir . basename($_FILES["file_upload"]["name"]);
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
        // if($check == false) {
        //     $errors['file-not-image'] =  "File is not an image";
        //     $uploadOk = 0;
        // }

        // if (file_exists($target_file)) {
        //     $errors['file-exist'] = "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }

        // if ($_FILES["file_upload"]["size"] > 500000) {
        //     $errors['large-file'] = "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }

        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        //     $errors['file-format'] = "Sorry, only JPG, JPEG & PNG files are allowed...!";
        //     $uploadOk = 0;
        // }

        if (empty($errors)) {
            if (! empty($_POST['ref'])) {
                // echo "how";exit;
                foreach (Investor::getReferrerCode($_POST['ref']) as $getRef) { //echo $getRef['ref_code'];exit;
                    if ($_POST['ref'] === $getRef['ref_code']) {//echo $getRef['full_name'];exit;
                        // if ($uploadOk == 1) {
                            $refer = $db->referralCode();
                            $user_guid = $db->entityGuid();
                            // $move_file = move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file);
                            $db->saveData(TBL_SYSTEM_USER, "user_guid = '$user_guid', full_name = '$full_name', username = '$username', email = '$email', ref_code = '$refer', refer = '0', phone_number = '$phone_number', password = '$hash_password'");
                            
                            foreach (Investor::getInvestorToken($getRef['user_guid']) as $token) {
                                $bonus = $token['refer'] + 1;
                                $token = $token['user_guid'];
                                $results = $db->update(TBL_SYSTEM_USER, "refer = '$bonus'", "user_guid = '$token'");

                                if ($results) { 
                                    if (Investor::getReferralUserToken($token) > 0) {
                                        // foreach ($results as $result) {
                                            $new_bonus = $bonus * 500;
                                            $db->update(TBL_REF_BONUS, "total_amount = '$new_bonus'", "user_guid = '$token'");
                                        // }
                                        header("Location: ../login.php");
                                    }else{
                                        
                                        // foreach ($results as $result) {
                                            $new_bonus = $bonus * 500;//echo $new_bonus;exit;
                                            $db->saveData(TBL_REF_BONUS, "user_guid = '$token', total_amount = '$new_bonus'");
                                        // }
                                        header("Location: ../login.php");
                                    }

                                    
                                }
                            }
                        // }
                    }else{
                        $errors['invalid-ref'] = "Invalid referrer code!";
                        // header("Location: ../invalid-page.php");
                    }
                    
                }
                
            }else{
                // if ($uploadOk == 1) {
                    $ref = uniqid();//echo $ref;exit;
                    $user_guid = $db->entityGuid();//echo $user_guid;exit;
                    // $move_file = move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file);
                    $result = $db->saveData(TBL_SYSTEM_USER, "user_guid = '$user_guid', full_name = '$full_name', username = '$username', email = '$email', ref_code = '$ref', refer = '0', phone_number = '$phone_number', password = '$hash_password'"); 
                    header("Location: ../login.php");
                // }
            }
        }else{
            $errors['wrong'] = "Something went wrong!";
        }
        
        echo json_encode($errors);
    }

    if (isset($_POST['login'])) {
        $errors = [];
        $email = $db->escape($_POST['email']);
       $password = $db->escape($_POST['password']);

       if (empty($email)) {
            $errors['email'] = "Email is required!";
        }

        if (empty($password)) {
            $errors['password'] = "Password is required!";
        }

        if (empty($errors)) {
            if (Investor::getInvestorByUsernameOrEmail($email) > 0) {
                foreach (Investor::getInvestorByUsernameOrEmail($email) as $userInfo) {
                    if (password_verify($password, $userInfo['password'])) {
                        $_SESSION['token'] = $userInfo['user_guid'];
                        $_SESSION['email'] = $userInfo['email'];
                        $_SESSION['username'] = $userInfo['username'];
                        $db->set('login', true);
                        header('Location: dashboard.php');
                    }
                }
            }
        }
    }

?>