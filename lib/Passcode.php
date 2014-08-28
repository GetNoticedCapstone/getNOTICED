<?php

/*
 * Description of Passcode
 */
class Passcode extends DB{
    //put your code here
    
    private $password;
    private $email;
    
    function __construct() {
        $this->setDb();
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST, 'email'));
    }
    
    /*
     * A public function to get the passcode 
     */
    public function getPassword() {
        return $this->password;
    }
    
    /*
     * A public function to set the passcode
     */
    public function setPassword($password) {
        $this->password = $password;
    }
    
    /*
     * A public function to get the email 
     */
    public function getEmail() {
        return $this->email;
    }

    /*
     * A public function to set the email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /*
    * A public function to check if the passcode is valid
    * 
    * @return boolean
    */
    public function isValidLogin(Passcode $loginModel ){
        
        $isValid = false;
        
            if ( null !== $this->getDB() && $loginModel instanceof Passcode) {

                $dbs = $this->getDB()->prepare('select * from signin where email = :email AND password = :password limit 1');
                $dbs->bindParam(':email', $loginModel->getEmail(), PDO::PARAM_STR);
                $dbs->bindParam(':password', $loginModel->getPassword(), PDO::PARAM_STR);

                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                    
                    $result = $dbs->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['userID'] = $result['MemberID'];
                    $isValid = true;
                } 
                else{
                    echo '<p>Failing validation</p>';
                    $error = $dbs->errorInfo();
                    error_log($error[2], 3, "logs/errors.log");
                }
                    var_dump($_SESSION['userID']);
             }
         
         return $isValid;
    }
}