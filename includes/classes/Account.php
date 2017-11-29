<?php
class Account {

public function __construct(){

  }

public function register(){
  $this->validateUsername($username);
  $this->validateFirstname($firstname);
  $this->validateLastname($lastname);
  $this->validateEmail($email1,$email2);
  $this->validatePassword($password1,$password2);
}

  private function validateUsername($un){
echo "blah blah blah";
  }

  private function validateFirstname($fn){

  }

  private function validateLastname($ln){

  }

  private function validateEmail($e1,$e2){

  }

  private function validatePassword($p1,$p2){

  }

}
 ?>
