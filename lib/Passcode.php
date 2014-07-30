<?php


class Passcode {
    
    /**
     * Global private var
     */
    private $password;
    private $email;
    
    /**
     * Constuctor
     */
    function __construct() {
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST,'email'));
    }
    
    /**
     * Get password
     */
    public function getPassword(){
        return $this->password;
    }
    
    /**
     * Get email
     */
    public function getEmail() {
        return $this->email;
    }

        
    /**
     * Set password
     */
    public function setPassword($password){
        $this->passcode = $password;
    }
    
    /**
     *  Set Email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

        
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPassword() === Config::PASS_CODE ? true : false );
    }
    
}
