<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserContent
 *
 * @author David
 */
class UserContent extends DB {
    
  function __construct() {
        $this->setDb();
    }
    
    /**
     * Updates user info in the members table
     * @param UserContentModel $contentModel
     * @return type bool
     */
    public function updateMember(UserContentModel $contentModel){
        $result = false;

        if(null !== $this->getDB() && $contentModel instanceof UserContentModel){
            $dbs = $this->getDB()->prepare('update members set'
                    .' firstName = :firstName,'
                    .' lastName = :lastName,'
                    .' jobTitle = :jobTitle,'
                    .' gitHub = :gitHub,'
                    .' faceBook = :faceBook,'
                    .' linkedIn = :linkedIn,'
                    .' skill1 = :skill1,'
                    .' skill2 = :skill2,'
                    .' skill3 = :skill3,'
                    .' mostRecentJob = :mostRecentJob,'
                    .' startDate = :startDate,'
                    .' endDate = :endDate,'
                    .' JobResponsibilities = :JobResponsibilities,'
                    .' objective = :objective,'
                    .' summary = :summary,'
                    .' schoolName = :schoolName,'
                    .' degreeProgram = :degreeProgram,'
                    .' degreeType = :degreeType,'
                    .' enterDate = :enterDate,'
                    .' additionalDetail = :additionalDetail,'
                    .' phone = :phone,'
                    .' address = :address,'
                    .' city = :city,'
                    .' state = :state,'
                    .' zip = :zip'
                    .' where memberID = :memberID');
            $dbs ->bindParam(':memberID', $contentModel->memberID, PDO::PARAM_STR);
            $dbs ->bindParam(':firstName', $contentModel->firstName, PDO::PARAM_STR);
            $dbs ->bindParam(':lastName', $contentModel->lastName, PDO::PARAM_STR);
            $dbs ->bindParam(':jobTitle', $contentModel->jobTitle, PDO::PARAM_STR);
            $dbs ->bindParam(':gitHub', $contentModel->gitHub, PDO::PARAM_STR);
            $dbs ->bindParam(':faceBook', $contentModel->faceBook, PDO::PARAM_STR);
            $dbs ->bindParam(':linkedIn', $contentModel->linkedIn, PDO::PARAM_STR);
            $dbs ->bindParam(':skill1', $contentModel->skill1, PDO::PARAM_STR);
            $dbs ->bindParam(':skill2', $contentModel->skill2, PDO::PARAM_STR);
            $dbs ->bindParam(':skill3', $contentModel->skill3, PDO::PARAM_STR);
            $dbs ->bindParam(':mostRecentJob', $contentModel->mostRecentJob, PDO::PARAM_STR);
            $dbs ->bindParam(':startDate', $contentModel->startDate, PDO::PARAM_STR);
            $dbs ->bindParam(':endDate', $contentModel->endDate, PDO::PARAM_STR);
            $dbs ->bindParam(':JobResponsibilities', $contentModel->JobResponsibilities, PDO::PARAM_STR);
            $dbs ->bindParam(':objective', $contentModel->objective, PDO::PARAM_STR);
            $dbs ->bindParam(':summary', $contentModel->summary, PDO::PARAM_STR);
            $dbs ->bindParam(':schoolName', $contentModel->schoolName, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeProgram', $contentModel->degreeProgram, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeType', $contentModel->degreeType, PDO::PARAM_STR);
            $dbs ->bindParam(':enterDate', $contentModel->enterDate, PDO::PARAM_STR);
            $dbs ->bindParam(':additionalDetail', $contentModel->additionalDetail, PDO::PARAM_STR);
            $dbs ->bindParam(':phone', $contentModel->phone, PDO::PARAM_STR);
            $dbs ->bindParam(':address', $contentModel->address, PDO::PARAM_STR);            
            $dbs ->bindParam(':city', $contentModel->city, PDO::PARAM_STR);
            $dbs ->bindParam(':state', $contentModel->state, PDO::PARAM_STR);
            $dbs ->bindParam(':zip', $contentModel->zip, PDO::PARAM_STR);
            
            var_dump($contentModel);
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
                echo '<P>Updated</p>';
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
    * A public method to return a members
    * info from the members table.    * 
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
    * A private method to return a members data from the members table by their memberID
    *
    * @param int $memberID
    * 
    * @return array
    */
     private function readByID($id){
           $results = array();
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from members where memberID = :memberID limit 1');
            $dbs->bindParam(':memberID', $id, PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
        
         }   
           
           return $results;
     }
}
