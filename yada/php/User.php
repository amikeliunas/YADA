<?php

require_once('config.php');

class User {

    private $name;
    private $calMetric;
    /* private $gender;
      private $height;
      private $age;
      private $weight;
     */

    public function User() {

    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getCalorieMetrics() {
        return $this->calMetric;
    }

    public function setCalorieMetrics(CalorieMetrics $calMetric) {
        $this->calMetric = $calMetric;
    }

    /* public function getGender() {
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
      } */
}

?>
