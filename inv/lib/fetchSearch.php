<?php

    require "../config/db.php";

    if (isset($_POST['search'])){
        
        $value = $db->escape($_POST['v']);

        $result = $db->searchData(TBL_CLASS, "*", "class", "$value", "6");
        // $count = count($result);
        if ($result ==0) {
            echo $respond = " No Record Found";
        }else {
             foreach ($result as $key) {
                echo $val = "<ul >
                     <li style='list-style:none'><a href='course-details.php?clid=".$key['id']."'>" . $key['class']. "</a></li></ul>";
             }
        }
       
        
    }

?>