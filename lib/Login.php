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
        
    private $email;
    private $password;
    
    function __construct() {
        $this->setDb();
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST, 'email'));
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
        
   public static function processLogin(Login $loginModel){
        $allowAccess = false;
        
        if( null != $this->getDB() && $loginModel instanceof Login ){
            $dbs = $this->getDB()->prepare('select * from members where email = :email AND password = :password limit 1');
            $dbs->bindParam(':email', $loginModel->getEmail(), PDO::PARAM_STR);
            $dbs->bindParam(':password', $loginModel->getPassword(), PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                    
                    $result = $dbs->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['userID'] = $result['user_id'];
                    $allowAccess = true;
                }
        }
        
        return $allowAccess;
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
