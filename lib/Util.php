<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author David
 */
class Util {
    /**
     * Static function to check if a Post request has been made
     */
    public static function isPostRequest(){
        return(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST');
    }
    
    /**
     * Static function to check if a GET request has been made
     */
    public static function isGetRequest(){
        return(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET');
    }
    
    /**
     * Static method for creating error messages in HTML pages
     */
    public static function getErrorMessageHTML($key,$arr){
        $msg = (is_array($arr) && array_key_exists($key, $arr) ? $arr[$key] : NULL);
        return (is_string($msg) && !empty($msg) ? "<p class=\"error\">$msg</p>" : "");
    }
    
     public static function checkLogout() {
        
        $logout = filter_input(INPUT_GET, 'logout');
        if ( $logout == 1 ) {
           $_SESSION['id'] = null;
            session_destroy();
        }  
    }
    
    /**
     * Static functon used to redirect if condition is not met.
     */
    public static function redirect($page){
        header("location: $page.php");
        die();
    }
    
    /**
     * Static function used to redirect user back to signup page untill password is confirmed
     */
    public static function confirmAccess() {
        if ( !isset($_SESSION['id']) || !$_SESSION['id'] ) {
           Util::redirect('signup');
        }
    }
}
