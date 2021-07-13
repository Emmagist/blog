<?php

    require_once "../config/db.php";

    if (isset($_GET['data'])) {
        $data = $_GET['data'];
    }

    if ($data == 20) {
        echo $full_name = $db->escape($_POST['full_name']);exit;
        $email = $db->escape($_POST['email']);
        $subject = $db->escape($_POST['subject']);
        $token = $db->escape($_POST['token']);
        $message = $db->escape($_POST['message']);
        $date = date("Y-m-d");

        if(isset($full_name, $email, $subject, $message)){
            $db->saveData(TBL_MESSAGE, "full_name = '$full_name', email = '$email', user_guid = '$token', message = '$message', subject = '$subject', xdate = '$date'");
            echo json_encode("Message Sent...");
        }
    }

    if ($data == 002) {
        echo $full_name = $db->escape($_POST['name']);exit;
        $email = $db->escape($_POST['email']);
        $subject = $db->escape($_POST['subject']);
        $token = $db->escape($_POST['token']);
        $message = $db->escape($_POST['message']);
        $date = date("Y-m-d");

        if(isset($full_name, $email, $subject, $message)){
            $db->saveData(TBL_MESSAGE, "full_name = '$full_name', email = '$email', user_guid = '$token', message = '$message', subject = '$subject', xdate = '$date'");
            echo json_encode("Message Sent...");
        }
    }

    if ($data == 02) {
        echo $full_name = $db->escape($_POST['name']);exit;
        $email = $db->escape($_POST['email']);
        $subject = $db->escape($_POST['subject']);
        $token = $db->escape($_POST['token']);
        $message = $db->escape($_POST['message']);
        $date = date("Y-m-d");

        if(isset($full_name, $email, $subject, $message)){
            $db->saveData(TBL_MESSAGE, "full_name = '$full_name', email = '$email', user_guid = '$token', message = '$message', subject = '$subject', xdate = '$date'");
            echo json_encode("Message Sent...");
        }
    }

?>