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
     * A public method to create a user in the signin table
     * 
     * @param UserSignUpModel $signUpModel
     * 
     * @return $_SESSION['MemberID']
     */
    public function createSignIn(UserSignUpModel $signUpModel){
        $result = 0;

        if(null !== $this->getDB() && $signUpModel instanceof UserSignUpModel){
            $dbs = $this->getDB()->prepare('insert into signin set email = :email, password = :password');
            $dbs ->bindParam(':email', $signUpModel->email, PDO::PARAM_STR);
            $dbs ->bindParam(':password', $signUpModel->password, PDO::PARAM_STR);
                    
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = intval($this->getDB()->lastInsertId());               
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
    * @param UserSignUpModel $signUpModel
    *
    * @return boolean
    */  
    public function createMembers(UserSignUpModel $signUpModel) {
        $result = false;
                
        //INSERT INTO ABOUT_PAGE VALUES
         if ( null !== $this->getDB() ) {
            
            $dbs = $this->getDB()->prepare('insert into members set memberID = :memberID, websiteURL = :websiteURL');
            $dbs->bindParam(':memberID', $_SESSION['MemberID'], PDO::PARAM_INT);           
            $dbs->bindParam(':websiteURL', $signUpModel->websiteURL, PDO::PARAM_INT);           
                        
            if ( $dbs->execute() && $dbs->rowCount()) {
                $result = true;
            }                
         }           
        return $result;
    }
    
    /**
    * A public method to create a new entry into the memberstatus
    * table.
    *
    * @return boolean
    */  
    public function createMemberStatus() {
        $result = false;
                
        //INSERT INTO ABOUT_PAGE VALUES
         if ( null !== $this->getDB() ) {
            $status = "A";
             
            $dbs = $this->getDB()->prepare('insert into memberstatus set memberID = :memberID, statuscode = :statuscode, datenew = :datenew');
            $dbs ->bindParam(':memberID', $_SESSION['MemberID'], PDO::PARAM_STR);
            $dbs ->bindParam(':statuscode', $status, PDO::PARAM_STR);
            $dbs ->bindParam(':datenew', date('Y-m-d'), PDO::PARAM_STR);           
                        
            if ( $dbs->execute() && $dbs->rowCount()) {
                $result = true;
            }                
         }           
        return $result;
    }
    
    /**
    * A public method to create a new entry into the memberstatus
    * table.
    *
    * @return boolean
    */  
    public function createMemberTheme() {
        $result = false;
                
        //INSERT INTO ABOUT_PAGE VALUES
         if ( null !== $this->getDB() ) {
            $theme = "One";
             
            $dbs = $this->getDB()->prepare('insert into membertheme set memberID = :memberID, themeID = :themeID');
            $dbs ->bindParam(':memberID', $_SESSION['MemberID'], PDO::PARAM_STR);
            $dbs ->bindParam(':themeID', $theme, PDO::PARAM_STR);           
                        
            if ( $dbs->execute() && $dbs->rowCount()) {
                $result = true;
            }                
         }           
        return $result;
    }
    
    /**
    * A private method to return a members
    * data from the signin table by their memberID
    *
    * @param int $memberID
    * 
    * @return array
    */
     public function readByID($id){
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
     
     public function websiteTaken(UserSignUpModel $signinModel) {
        
        $website = $signinModel->getWebsiteURL();
        $isTaken = false;
        
            if ( null !== $this->getDB() ) {

                $dbs = $this->getDB()->prepare('select websiteURL from members where website = :website limit 1');
                $dbs->bindParam(':website', $website, PDO::PARAM_STR);

                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    $isTaken = true;
                } 

             }
         
         return $isTaken;
    }
}