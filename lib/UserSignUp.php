<?php

/**
 * Description of NewMemberSignUp
 *
 * @author David
 */

/**
 * constructor
 */
class UserSignUp extends DB {
        
    function __construct(){
        $this->setDb();
    }

    /**
     * putting user sign up data in the data base
     * @param UserSignUpModel $dataModel
     * @return type
     */
    public function create(UserSignUpModel $dataModel){
        $result = false;
        
        $website = $dataModel->getWebsite();
        $email = $dataModel->getEmail();
        $password = sha1($dataModel->getPassword());

        if(null !== $this->getDB() && $dataModel instanceof UserSignUpModel){
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs ->bindParam(':website', $website, PDO::PARAM_STR);
            $dbs ->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $password, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = intval($this->getDB()->lastInsertId());
            }
            else{
                $error = $dbs->errorInfo();
                error_log($error[2], 3, "logs/errors.log");
            }
        }
        return $result;
    }
    
    /**
     * getting user id 
     * @param type $user_id
     * @return type
     */
    public function readByID($user_id){
        $result = "";
        
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('select website from users where user_id = :user_id limit 1');
            $dbs->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            
            if($dbs->execute() && $dbs->rowCount()> 0 ){
                $result = $dbs->fetch(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }
}
   