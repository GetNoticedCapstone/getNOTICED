<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author David
 */
class Login extends DB {
    //put your code here
        
   public static function processLogin(){
        $_SESSION["allowAccess"] = false;
        if (isset($_POST["password"]) && $_POST["password"] == $_POST["password"]){
         $_SESSION["allowAccess"] = true;
         $_session["email"] = $_POST["email"];
         header("Location:index.php");
        }
}
    /*function that confirms youre login process if
     *  not confirmed you stay on the login page*/
public static function confirmAccess(){
        if ( ! isset($_SESSION["allowAccess"]) 
                || $_SESSION["allowAccess"] != true){
            header("Location:login.php");
        }
    }
    
    /**
     * checking user login against database
     * @param SignupModel $vlModel
     * @return boolean
     */
    public function validLogin(SignupModel $vlModel){
        $email = $vlModel->getEmail();
        $valid = false;
        
        if ( null !== $this->getDB() ){
            $dbs = $this->getDB()->prepare('select user_id, password from users where email = :email limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0){
                
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
            $validPassword = sha1($vlModel->getPassword());
            if ($results['password'] == $validPassword){
                $valid = true;
                $_SESSION['id'] = $results['user_id'];
            }
            
        }
        return $valid;
    }
    
    /**
     * 
     * checking for website name in database
     */
    public function webNameExists(UserSignUpModel $webModel){
        $webname = $webModel->getWebsite();
        $exists = false;
        
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('select website from users where website = :website limit 1');
            $dbs->bindParam(':website', $webname, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $exists = true;
            }
            return $exists;
        }
    }
    
    /**
     * Checking database to see if email is present
     * @param UserSignUpModel $emailModel
     * @return boolean
     */
    public function emailExists(UserSignUpModel $emailModel){
        $email = $emailModel->getEmail();
        $exists = false;
        
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select email from users where email = :email limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $exists = true;
            }
            
        }
        return $exists;
        
    }

    
}
