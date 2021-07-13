<?php

    require "config/init.php";
    require_once "config/emailVerification.php";

    class Users {
        // public function findUserByEmail($email){
        //     global $db;
        //     return $db->selectData(TBL_STUDENT, "*", "email = '$email'");
        // }

        // public function getAllUsers($token){
        //     global $db;
        //     return $db->selectData(TBL_STUDENT, "*", "user_guid ='$token'");
        // }

        // public function getCourses(){
        //     global $db;
        //     return $db->selectData(TBL_CLASS, "*");
        // }

        // public function getSchool(){
        //     global $db;
        //     return $db->selectData(TBL_SCHOOL, "*");
        // }

        // public  function  getAllClassesBySchoolId($id){
        //     global  $db;
        //     $rows = [];
        //     $result = $db->query("SELECT * FROM classes
        //                             INNER JOIN schools 
        //                             ON classes.schoolid = schools.schoolid  
        //                             WHERE classes.schoolid = '$id'");
        //     if (!empty($result)) {
        //         while ($row = $result->fetch_assoc()) {
        //             $rows[] = $row;
        //         }
        //         return $rows;
        //     }
        // }

        // public  function  getTotalAmountPurchased($order_id){
        //     global  $db;
        //     $rows = [];
        //     $result = $db->query("SELECT * FROM total_amount
        //                             INNER JOIN purchased_courses 
        //                             ON total_amount.order_id = purchased_courses.order_id  
        //                             WHERE total_amount.order_id = '$order_id'");
        //     if (!empty($result)) {
        //         while ($row = $result->fetch_assoc()) {
        //             $rows[] = $row;
        //         }
        //         return $rows;
        //     }
        // }


        public function getAllCategory(){
            global $db;
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "", "9");
        }

        public function getTechnology(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.name 
                                    WHERE bloglist.category = 'Technology' 
                                    ORDER BY RAND() LIMIT 2");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
            // return $db->selectRandLimit(TBL_BLOG_LIST, "*", "", "9");
        }

        public function getSport(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.name 
                                    WHERE bloglist.category = 'Sport' 
                                    ORDER BY RAND() LIMIT 2");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function getBusiness(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.name 
                                    WHERE bloglist.category = 'Business' 
                                    ORDER BY RAND() LIMIT 2");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function getEntertainment(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.name 
                                    WHERE bloglist.category = 'Entertainment' 
                                    ORDER BY RAND() LIMIT 2");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function getLatest($date){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.name 
                                    WHERE bloglist.category = 'News'
                                    AND  bloglist.log = '$date'
                                    ORDER BY RAND() LIMIT 3");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        // public function relatedClasses(){
        //     global $db;
        //     return $db->selectRandLimit(TBL_CLASS, "*", "", "4");
        // }

        public function courseDetails($id){
            global $db;
            return $db->selectData("", "*", "id = '$id'");
        }

        public function getAllSchoolsLimited(){
            global $db;
            return $db->selectRandLimit("", "*", "", "7");
        }

        public function getContentsByCourseIdLimit($id){
            global $db;
            return $db->selectLimit("", "*", "class_id = '$id'", "contents", "1");
        }

        public function getTopicByCourseIdLimit($id){
            global $db;
            return $db->selectLimit("", "*", "class_id = '$id'", "topic", "1");
        }

        public function getTitleByTopicId($id){
            global $db;
            return $db->selectData("", "*", "topic_id = '$id'");
        }

        public function getContentsByTopicId($id){
            global $db;
            return $db->selectData("", "*", "content_id = '$id'");
        }

    }
    $user = new Users;

?>