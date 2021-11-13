<?php

    require "config/db.php";
    // require_once "../config/emailVerification.php";

    class Users {

        public function findUserByEmail($email){
            global $db;
            return $db->selectData(TBL_SYSTEM_USER, "*", "email = '$email'");
        }

        public function findUserByUsername($username){
            global $db;
            return $db->selectData(TBL_SYSTEM_USER, "*", "username = '$username'");
        }

        public function findUserByTel($phone_number){
            global $db;
            return $db->selectData(TBL_SYSTEM_USER, "*", "phone_number = '$phone_number'");
        }

        public function getAllCategory(){
            global $db;
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "status = '0'", "9");
        }

        public function getAllCategoryByToken($token){
            global $db;
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "sub_category = '$token' AND status = '0'", "15");
        }

        public function getAllCategoryByName($name){
            global $db;
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "category = '$name' AND status = '0'", "5");
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
                                    INNER JOIN bloglist_topic 
                                    ON bloglist.topic_id = bloglist_topic.entity_guid 
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
        }

        public function getLatestNews($date){
            global $db;
            return $db->selectRandLimit(TBL_BLOG_LIST, "*", "log = '$date' AND category = 'news'", "5");
        }

        public function getSingleNews($news){
            global $db;
            return $db->selectData(TBL_BLOG_LIST, "*", "entityguid = '$news'");
        }

        public function readyMore(){
            global $db;
            return $db->selectLimitAsc(TBL_BLOG_LIST, "*", "status = '0'", "title", "10");
        }

        public function getSubCategoryByToken($token){
            global $db;

            return $db->selectData(TBL_SUB_CATEGORY, "*", "entity_guid = '$token'");
        }

        public function getNewsCategory(){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM blog_category
                                    INNER JOIN blog_sub_category 
                                    ON blog_category.entity_guid = blog_sub_category.category 
                                    WHERE blog_category.category = 'news'
            ");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
        }
        public function getRelatedCategory($category){
            global $db;
            $rows = [];
            $result = $db->query("SELECT * FROM blog_category
                                    INNER JOIN blog_sub_category 
                                    ON blog_category.entity_guid = blog_sub_category.category 
                                    WHERE blog_category.category = '$category'
            ");
            if (!empty($result)) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }
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

        public function getUrl($url, $get){
            if ($url == 'news') {
                echo "news-page.php?news=".$get;
            }else {
                echo "single-page.php?en=".$get;
            }
            // elseif ($url == 'news') {
            //     echo "news-page.php?news=".$get;
            // }elseif($url == 'business'){
            //     echo 'business.php?business='.$get;
            // }elseif($url == 'music'){
            //     echo 'music.php?music='.$get;
            // }elseif($url == 'video'){
            //     echo 'video.php?video='.$get;
            // }
        }

        // public function getPreviousDays(){
        //     getdate()
        // }
    }
    $user = new Users;

?>