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
     * @param UserSignUpModel $signUpModel
     * @return type
     */
    public function createSignIn(UserSignUpModel $signUpModel){
        $result = 0;

        if(null !== $this->getDB() && $signUpModel instanceof UserSignUpModel){
            $dbs = $this->getDB()->prepare('insert into signin set email = :email, password = :password');
            $dbs ->bindParam(':email', $signUpModel->email, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $signUpModel->password, PDO::PARAM_STR);
            
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
    * A public method to create a new entry into the members
    * table.
    *
    * @param int $id
    *
    * @return boolean
    */  
    public function createMembers( $id ) {
        $result = false;
                
        //INSERT INTO ABOUT_PAGE VALUES
         if ( null !== $this->getDB() ) {
            
            $dbs = $this->getDB()->prepare('insert into members set memberID = :memberID');
            $dbs->bindParam(':memberID', $id, PDO::PARAM_INT);            
                        
            if ( $dbs->execute() && $dbs->rowCount()) {
                $result = true;
            }                
         }           
        return $result;
    }
    
    /**
    * A public method to return a members
    * info from the signin table.    * 
    *
    * @param int $id 
    *
    * @return array
    */
    public function read($id = 0) {
       if ($id !== 0) {
           return $this->readByID($id);
       } else {
           return $this->readAll();
       }
        
    }
    
    /**
    * A private method to return a members
    * data from the signin table by their memberID
    *
    * @param int $memberID
    * 
    * @return array
    */
     private function readByID($id){
           $results = array();
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from signin where memberID = :memberID limit 1');
            $dbs->bindParam(':memberID', $id, PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
        
         }   
           
           return $results;
     }
}