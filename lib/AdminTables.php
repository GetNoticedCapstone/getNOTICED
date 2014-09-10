<?php

/**
 * Description of AdminTables
 */


class AdminTables extends DB {
    
    function __construct() {
        $this->setDb();
    }
    
    /**
    * A public method to return the members
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
           return $this->readMembers();
       }
        
    }  
        
    public function readActiveMembers(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from members, memberstatus where MemberIDM = MemberIDS and StatusCode = "A"');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }  
            return $results;
    }
    
    public function readNewMembers(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from members, memberstatus where MemberIDM = MemberIDS and StatusCode = "A" and DateNew = CURDATE()');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }

        }        
            return $results;
    }
        
}

