<?php

        
class Validator {
    //put your code here
    
    public static function emailIsValid( $str ) {
       if ( is_string($str) && !empty($str) && preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$str) != 0 ) {
           return true;
       }        
       return false; 
    }

     public static function websiteIsValid( $str ) {
       if ( is_string($str) && !empty($str)) {
           return true;
       }        
       return false; 
    }
    
    public static function passwordIsValid( $str ) {
       if ( is_string($str) && !empty($str) ) {
           return true;
       }        
       return false; 
    }
  
    public static function loginIsValidPost()
    {
        if( array_key_exists("email", $_POST) || array_key_exists("password", $_POST) )
        {
            return false;
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        return Validator::loginIsValid($email, $password);
    }
    
    public static function loginIsValid($email, $password ) {

      if ( !Validator::emailIsValid($email) || !Validator::passwordIsValid($password) )
      {
          return false;
      }

      $password = sha1($password);
      $dbCls = new DB();
      $db = $dbCls->getDB();
      if ( NULL != $db ) {
          $stmt = $db->prepare('select * from users where email = :emailValue and password = :passwordValue limit 1');
          $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
          $stmt->bindParam(':passwordValue', $password, PDO::PARAM_STR);
          $stmt->execute();
          $result = $stmt->fetch(PDO::FETCH_ASSOC);

          if ( is_array($result) &&  count($result) ) return true;
      }
      return false;
    }

}
