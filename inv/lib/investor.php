<?php

    require_once "conf/db.php";

   class Investor {
       public static function getInvestorByEmail($email){
            global $db;
            return $db->selectData(TBL_SYSTEM_USER, "*", "email = '$email'");
       }

       public static function getInvestorByUsername($username){
            global $db;
            return $db->selectData(TBL_SYSTEM_USER, "*", "username = '$username'");
       }

       public static function getReferrerCode($ref){
        global $db;
        return $db->selectData(TBL_SYSTEM_USER, "*", "ref_code = '$ref'");
      }

      public static function getInvestorToken($token){
        global $db;
        return $db->selectData(TBL_SYSTEM_USER, "*", "user_guid = '$token'");
      }

      public static function getReferralUserToken($token){
          global $db;
          return $db->selectData(TBL_REF_BONUS, "*", "user_guid = '$token'");
     }

     public static function getInvestorByUsernameOrEmail($email){
          global $db;
          return $db->selectData(TBL_SYSTEM_USER, "*", "email = '$email' OR username = '$email'");
     }
   }

   $investor = new Investor;

?>