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
    public function createMember(UserSignUpModel $dataModel){
        $result = 0;

        if(null !== $this->getDB() && $dataModel instanceof UserSignUpModel){
            $dbs = $this->getDB()->prepare('insert into signin set email = :email, password = :password');
            $dbs ->bindParam(':email', $dataModel->email, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $dataModel->password, PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = intval($this->getDB()->lastInsertId());
                echo '<P>Created</p>';
            }
            else{
                echo '<P>Failed</p>';
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