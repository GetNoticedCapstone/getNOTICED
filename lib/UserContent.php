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
class UserContent {
    
  function __construct() {
        $this->setDb();
    }
    
    public function getWebsite()
    {
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select website from users where user_id = :user_id limit 1');
            $dbs->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = $dbs->fetch(PDO::FETCH_ASSOC);
                $name = $result['website'];
            }
            
        }
        return $name;
    }
    
    public function getContent()
    {
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select title, theme, address, phone, email, content from about_page where user_id = :user_id limit 1');
            $dbs->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = $dbs->fetch(PDO::FETCH_ASSOC);
            }
            
        }
        return $result;
    }
    
    public function newSite(array $site)
    {
        $result = false;
        
        if (null !== $this->getDB() ){
            $dbs = $this->getDB()->prepare('update about_page set title = :title, theme = :theme, address = :address, phone = :phone, email = :email, content = :content where user_id = :user_id');
            $dbs->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
            $dbs->bindParam(':title', $site['title'], PDO::PARAM_STR);
            $dbs->bindParam(':theme', $site['theme'], PDO::PARAM_STR);
            $dbs->bindParam(':address', $site['address'], PDO::PARAM_STR);
            $dbs->bindParam(':phone', $site['phone'], PDO::PARAM_STR);
            $dbs->bindParam(':email', $site['email'], PDO::PARAM_STR);
            $dbs->bindParam(':content', $site['content'], PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = true;
            }
            
        }
        return $result;
    }
}
