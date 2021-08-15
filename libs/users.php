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
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "status = '0'", "9");
        }

        public function getTechnology(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM bloglist
                                    INNER JOIN blog_category 
                                    ON bloglist.category = blog_category.category 
                                    WHERE bloglist.category = 'technology' AND status = '0' 
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
                                    ON bloglist.category = blog_category.category 
                                    WHERE bloglist.category = 'sport' AND status = '0' 
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
                                    ON bloglist.category = blog_category.category 
                                    WHERE bloglist.category = 'business' AND status = '0' 
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
                                    ON bloglist.category = blog_category.category 
                                    WHERE bloglist.category = 'entertainment' AND status = '0' 
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

            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "log = '$date' AND category = 'news'", "3");
            // $rows = [];
            // $result = $db->query("SELECT * FROM bloglist
            //                         INNER JOIN blog_category 
            //                         ON bloglist.category = blog_category.name 
            //                         WHERE bloglist.category = 'news'
            //                         AND  bloglist.log = '$date'
            //                         ORDER BY RAND() LIMIT 3");
            // if (!empty($result)) {
            //     while ($row = $result->fetch_assoc()) {
            //         $rows[] = $row;
            //     }
            //     return $rows;
            // }
        }

        public function readyMore(){
            global $db;
            return $db->selectLimitAsc(TBL_BLOG_LIST, "*", "status = '0'", "title", "10");
        }

        public function getAllSchoolsLimited(){
            global $db;
            return $db->selectRandLimit("", "*", "", "7");
        }

        public function getContentsByCourseIdLimit($id){
            global $db;
            return $db->selectLimit("", "*", "class_id = '$id'", "contents", "1");
        }

        public function getViewCounts($ip, $count, $date){
            global $db;
            $sql = $db->selectData(TBL_PAGE_COUNT, "*", "ip = '$ip', log = '$date'");
            if (count($sql) >= 1) {
                # code...
            }elseif (count($sql) == 1) {
                $db->update(TBL_PAGE_COUNT, "ip = '$ip', count = '$count', log = '$date'", "ip = '$ip', log = '$date'");
            }else {
                $db->saveData(TBL_PAGE_COUNT, "ip = '$ip', count = '$count', log = '$date'");
            }
        }
    }
    $user = new Users;

?>