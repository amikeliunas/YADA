<?php

require_once('config.php');

class User {

    private $username;
    private $firstname;
    private $lastname;
    private $password;
    private $gender;
    private $height;
    private $age;
    private $weight;
    private $activityLevel;
    private $calculatorId;

    public function User() {
        
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getActivityLevel() {
        return $this->activityLevel;
    }

    public function setActivityLevel($lvl) {
        $this->activityLevel = $lvl;
    }

    public function setCalculatorId($cid) {
        $this->calculatorId = $cid;
    }

    public function getCalculatorId() {
        return $this->calculatorId;
    }

}

?>
