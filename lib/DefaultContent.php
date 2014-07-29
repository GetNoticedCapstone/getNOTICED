<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultContent
 *
 * @author David
 */
class DefaultContent {
    function __construct() {
        
    }
    
    private $info = array(
            "title" => "My Name",
            "theme" => "themeOne",
            "address" => "727 king st",
            "phone" => "4016261234",
            "email" => "your email",
            "content" => "write something",
            "active" => 1           
        );
    
        public function getInfo() {
            return $this->info;
        }

}
