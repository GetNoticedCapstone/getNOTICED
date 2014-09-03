<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserContentModel
 *
 * @author 001294496
 */
class UserContentModel {
    
    public $memberID;
    public $theme;
    public $firstName;
    public $lastName;
    public $jobTitle;
    public $gitHub;
    public $facebook;
    public $linkedIn;
    public $skill1;
    public $skill2;
    public $skill3;
    public $mostRecentJob;
    public $startDate;
    public $endDate;
    public $jobResponse;
    public $objective;
    public $summary;
    public $schoolName;
    public $degreeProgram;
    public $degreeType;
    public $enterDate;
    public $additionalDetail;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $zip;
    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
    /**
    * A public method to map all the variables to a value
    *
    * @param Array $paramArr
    *
    * @return Void
    */ 
    public function map($paramArr) {        
        if ( is_array($paramArr) && count($paramArr) ) {                   
            foreach ($paramArr as $key => $value) {
                $method = 'set'.ucfirst($key);
                if( method_exists($this, $method) ) {
                    $this->$method($value);
                }
            }
        }       
    }
    
    public function getMemberID() {
        return $this->memberID;
    }
    
    public function getTheme() {
        return $this->theme;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function getGitHub() {
        return $this->gitHub;
    }

    public function getFaceBook() {
        return $this->faceBook;
    }

    public function getLinkedIn() {
        return $this->linkedIn;
    }

    public function getSkill1() {
        return $this->skill1;
    }

    public function getSkill2() {
        return $this->skill2;
    }

    public function getSkill3() {
        return $this->skill3;
    }

    public function getMostRecentJob() {
        return $this->mostRecentJob;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getJobResponse() {
        return $this->jobResponse;
    }

    public function getObjective() {
        return $this->objective;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getSchoolName() {
        return $this->schoolName;
    }

    public function getDegreeProgram() {
        return $this->degreeProgram;
    }

    public function getDegreeType() {
        return $this->degreeType;
    }

    public function getEnterDate() {
        return $this->enterDate;
    }

    public function getAdditionalDetail() {
        return $this->additionalDetail;
    }
    
    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getZip() {
        return $this->zip;
    }
        
    public function setMemberID($memberID) {
        $this->theme = $memberID;
    }
    
    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
    }

    public function setGitHub($gitHub) {
        $this->gitHub = $gitHub;
    }

    public function setFaceBook($faceBook) {
        $this->faceBook = $faceBook;
    }

    public function setLinkedIn($linkedIn) {
        $this->linkedIn = $linkedIn;
    }

    public function setSkill1($skill1) {
        $this->skill1 = $skill1;
    }

    public function setSkill2($skill2) {
        $this->skill2 = $skill2;
    }

    public function setSkill3($skill3) {
        $this->skill3 = $skill3;
    }

    public function setMostRecentJob($mostRecentJob) {
        $this->mostRecentJob = $mostRecentJob;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    public function setJobResponse($jobResponse) {
        $this->jobResponse = $jobResponse;
    }

    public function setObjective($objective) {
        $this->objective = $objective;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function setSchoolName($schoolName) {
        $this->schoolName = $schoolName;
    }

    public function setDegreeProgram($degreeProgram) {
        $this->degreeProgram = $degreeProgram;
    }

    public function setDegreeType($degreeType) {
        $this->degreeType = $degreeType;
    }

    public function setEnterDate($enterDate) {
        $this->enterDate = $enterDate;
    }

    public function setAdditionalDetail($additionalDetail) {
        $this->additionalDetail = $additionalDetail;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }


}
