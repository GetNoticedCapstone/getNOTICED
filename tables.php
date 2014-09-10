<?php 
function newMemberTable(){
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
 /*                      
    foreach ($newMemberResults as $key => $value) {
     echo '<td>', $key ,'</td>';
     echo '<td>', $value['FirstName'] ,'</td>';
     echo '<td>', $value['LastName'] ,'</td>';
     echo '<td>', $value['DateNew'] ,'</td>';
     echo '<td>', $value['WebsiteURL'] ,'</td>';
     echo '<td>', $value['PrimaryPhone'] ,'</td>';
     //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
     //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
}
  */
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
function activeMemberTable(){
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-bordered table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>First Name</th>';
    echo '<th>Last Name</th>';
    echo '<th>City</th>';
    echo '<th>State</th>';
    echo '<th>Website</th>';
    echo '<th>Phone</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    /*
    foreach ($activeMemberResults as $key => $value) {
    echo '<td>', $key ,'</td>';
    echo '<td>', $value['FirstName'] ,'</td>';
    echo '<td>', $value['LastName'] ,'</td>';
    echo '<td>', $value['City'] ,'</td>';
    echo '<td>', $value['State'] ,'</td>';
    echo '<td>', $value['WebsiteURL'] ,'</td>';
    echo '<td>', $value['PrimaryPhone'] ,'</td>';
    //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';
    //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';
    }
     * 
     */
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
