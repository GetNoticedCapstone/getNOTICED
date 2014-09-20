<?php

/**
 * Class for populating the AdminTables
 */


class AdminTables extends DB {
    
    function __construct() {
        $this->setDb();
    }
    
/* public methods to retrieve data from the database */

    //return all active members
    public function readActiveMembers(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from Members, MemberStatus where MemberIDM = MemberIDS and StatusCode = "A"');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }  
            return $results;
    }
    
    //return all new members
    public function readNewMembers(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from Members, MemberStatus where MemberIDM = MemberIDS and StatusCode = "A" and DateNew = CURDATE()');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }        
            return $results;
    }
    
    //return all canceled memberships
    public function readCanceledMembers(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from members, memberstatus where MemberIDM = MemberIDS and StatusCode = "C"');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }        
            return $results;
    }
    
    //return all registered admins
    public function readAdmins(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from admin');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }        
            return $results;
    }

    //return member dates
    public function readMemberDates(){
        $results = array();

        if ( null !== $this->getDB() ) {
           $dbs = $this->getDB()->prepare('select * from members, signin, memberstatus where MemberIDM = MemberID and MemberIDS = MemberID');

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        }        
            return $results;
    }
    
    //return number of new members for today
    public function countNewMembers(){
        
        $dbs = $this->getDB()->prepare
            ('select * from MemberStatus where StatusCode = "A" and DateNew = CURDATE()');
        $dbs->execute();
        $countNew = $dbs->rowCount();
        
        return $countNew;
    }
    
    //return number of active members
    public function countActiveMembers(){
        
        $dbs = $this->getDB()->prepare
            ('select * from memberstatus where StatusCode = "A"');
        $dbs->execute();
        $countActive = $dbs->rowCount();
        
        return $countActive;
    }
    
    //return number of canceled memberships
    public function countCanceledMembers(){
        
        $dbs = $this->getDB()->prepare
            ('select * from memberstatus where StatusCode = "C"');
        $dbs->execute();
        $countCanceled = $dbs->rowCount();
        
        return $countCanceled;
    }
    
    //return number of registered admins
    public function countAdminMembers(){
        
        $dbs = $this->getDB()->prepare
            ('select * from admin');
        $dbs->execute();
        $countAdmin = $dbs->rowCount();
        
        return $countAdmin;
    }
    
    
    //functions to populate the tables
    
    
    public function newMemberTable(){
        
        $newMemberResults = $this->readNewMembers();
        
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Date New</th>';
            echo '<th>Website</th>';
            echo '<th>Phone</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                    
            foreach ($newMemberResults as $key => $value) {
             echo '<tr>';   
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['DateNew'] ,'</td>';
             echo '<td>', $value['WebsiteURL'] ,'</td>';
             echo '<td>', $value['PrimaryPhone'] ,'</td>';
             echo '</tr>';
             //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
             //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
    
    public function activeMemberTable(){
        
        $activeMbrResults = $this->readActiveMembers();
        
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Date New</th>';
            echo '<th>Website</th>';
            echo '<th>Phone</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                    
            foreach ($activeMbrResults as $key => $value) {
             echo '<tr>';    
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['DateNew'] ,'</td>';
             echo '<td>', $value['WebsiteURL'] ,'</td>';
             echo '<td>', $value['PrimaryPhone'] ,'</td>';
             echo '</tr>';
             //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
             //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
    
    public function canceledMemberTable(){
        
        $canceledMbrResults = $this->readCanceledMembers();
        
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Date New</th>';
            echo '<th>Website</th>';
            echo '<th>Phone</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                    
            foreach ($canceledMbrResults as $key => $value) {
             echo '<tr>';   
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['DateNew'] ,'</td>';
             echo '<td>', $value['WebsiteURL'] ,'</td>';
             echo '<td>', $value['PrimaryPhone'] ,'</td>';
             echo '</tr>';
             //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
             //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
    
    public function adminTable(){
        
        $adminResults = $this->readAdmins();
        
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Admin Name</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                    
            foreach ($adminResults as $key => $value) {
             echo '<tr>';   
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['AdminName'] ,'</td>';
             echo '</tr>';
             //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
             //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
    
     public function memberDatesTable(){
        
        $memberDatesResults = $this->readMemberDates();
        
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Date Enrolled</th>';
            echo '<th>Email</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                    
            foreach ($memberDatesResults as $key => $value) {
             echo '<tr>';   
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['DateNew'] ,'</td>';
             echo '<td>', $value['Email'] ,'</td>';
             echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
    
    public function tableList(){

            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered table-hover">';
            echo '<thead>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';   
            echo '<td><a href="#newMemberModal" role="button" data-toggle="modal">New Members</a></td>';
            echo '<td>Active Members</td>';
            echo '<td>Canceled Members</td>';
            echo '<td>Registered Admins</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
    }
       
}

