<?php

    require_once "../config/db.php";

    // if (isset($_GET['reg'])) {
    //     $full_name = $db->escape($_POST['full_n']); echo $full_name;exit;
    // }

    if (isset($_GET['log'])) {
       echo $email = $db->escape(($_POST['email']));exit;
    }

?>