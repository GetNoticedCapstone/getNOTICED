<?php

class logout {
    //put your code here
    
    
    public static function checkLogout() {
        
        $logout = filter_input(INPUT_GET, 'logout');
        
        echo $logout;
        
        if ( $logout == 1 ) {
            $_SESSION['login'] = null;
            $_SESSION['userID'] = 0;
            session_destroy();
        }
        
    }
    
    public static function confirmAccess() {
        if ( $_SESSION['login'] !== true ) {
            Util::redirect('loginPage');           
        }
    }
    
    
}
