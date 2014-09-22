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
                    .' JobResp = :JobResp,'
                    .' objective = :objective,'
                    .' summary = :summary,'
                    .' schoolName = :schoolName,'
                    .' degreeProgram = :degreeProgram,'
                    .' degreeType = :degreeType,'
                    .' degreeStart = :degreeStart,'
                    .' degreeFinish = :degreeFinish,'
                    .' degreeDetail = :degreeDetail,'
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
            $dbs ->bindParam(':JobResp', $contentModel->JobResp, PDO::PARAM_STR);
            $dbs ->bindParam(':objective', $contentModel->objective, PDO::PARAM_STR);
            $dbs ->bindParam(':summary', $contentModel->summary, PDO::PARAM_STR);
            $dbs ->bindParam(':schoolName', $contentModel->schoolName, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeProgram', $contentModel->degreeProgram, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeType', $contentModel->degreeType, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeStart', $contentModel->degreeStart, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeFinish', $contentModel->degreeFinish, PDO::PARAM_STR);
            $dbs ->bindParam(':degreeDetail', $contentModel->degreeDetail, PDO::PARAM_STR);
            $dbs ->bindParam(':phone', $contentModel->phone, PDO::PARAM_STR);
            $dbs ->bindParam(':address', $contentModel->address, PDO::PARAM_STR);            
            $dbs ->bindParam(':city', $contentModel->city, PDO::PARAM_STR);
            $dbs ->bindParam(':state', $contentModel->state, PDO::PARAM_STR);
            $dbs ->bindParam(':zip', $contentModel->zip, PDO::PARAM_STR);            
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
                echo '<P>Updated</p>';
            }
            else{
                $error = $dbs->errorInfo();
                error_log($error[2], 3, "logs/errors.log");
            }
            if( $this->updateMemberTheme($contentModel) ){
                $result = true;
            }
            
        }
        return $result;
    }
    
    /**
     * Updates user info in the membertheme table
     * @param UserContentModel $contentModel
     * @return type bool
     */
    public function updateMemberTheme(UserContentModel $contentModel){
        $result = false;
        
        if(null !== $this->getDB() && $contentModel instanceof UserContentModel){
            $dbs = $this->getDB()->prepare('update membertheme set themeID = :themeID where memberID = :memberID');
            $dbs ->bindParam(':memberID', $contentModel->memberID, PDO::PARAM_STR);
            $dbs ->bindParam(':themeID', $contentModel->themeID, PDO::PARAM_INT);
                        
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = true;
            }
            else{
                $error = $dbs->errorInfo();
                error_log($error[2], 3, "logs/errors.log");
            }
        }
        return $result;
    }
    
    /**
    * A public method to return a members
    * web URL from the members table.
    *
    * @return WebsiteURL
    */
    public function getTheme() {
       
        $results = array();
    
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('SELECT members.FirstName, theme.ThemeName FROM theme, membertheme, members WHERE theme.ThemeID = membertheme.ThemeID AND membertheme.MemberID = :memberID');
            $dbs->bindParam(':memberID', $_SESSION['MemberID'], PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
            
            return $results['ThemeName'];
        }
    }
    
    /**
    * A public method to return a members data from the members table by their memberID
    *
    * @param int $memberID
    * 
    * @return array
    */
     public function readByID($id){
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
     
     /**
    * A private method to return a members data from the members table by their memberID
    *
    * @param int $memberID
    * 
    * @return array
    */
     public function readByURL($url){
           $results = array();
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from members where WebsiteURL = :url limit 1');
            $dbs->bindParam(':url', $url, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
                $_SESSION['MemberID'] = $results['MemberID'];
            }        
         }   
         return $results;
     }
    
    function get_path() {
        $path = array();
        if (isset($_SERVER['REQUEST_URI'])) {
            $request_path = explode('?', $_SERVER['REQUEST_URI']);

            $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
            $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
            $path['call'] = utf8_decode($path['call_utf8']);
            if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
              $path['call'] = '';
            }
            $path['call_parts'] = explode('/', $path['call']);

            $path['query_utf8'] = urldecode($request_path[1]);
            $path['query'] = utf8_decode(urldecode($request_path[1]));
            $vars = explode('&', $path['query']);
            foreach ($vars as $var) {
                $t = explode('=', $var);
                $path['query_vars'][$t[0]] = $t[1];
            }
        }
    return $path;
    }
}
