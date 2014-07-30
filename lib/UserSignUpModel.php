<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignupModel
 *
 * @author David
 */
class UserSignUpModel {
    private $website;
    private $email;
    private $password;
    
    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
    public function map($paramArr){
        if(! is_array($paramArr)){
            return false;
        }
        if(array_key_exists('website', $paramArr)){
            $this->setWebsite($paramArr['website']);
        }
        if(array_key_exists('email', $paramArr)){
            $this->setEmail($paramArr['email']);
        }
        if(array_key_exists('password', $paramArr)){
            $this->setPassword($paramArr['password']);
        }
       
    }
    public function getWebsite() {
        return $this->website;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getUser_id() {
        return $this->user_id;
    }
    public function setWebsite($website) {
        $this->website = $website;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

   
}
