<?php
class Account {

private $errorArray;
public function __construct(){
$this->errorArray=array();
  }

public function register($un,$fn,$ln,$e1,$e2,$pw1,$pw2){
  $this->validateUsername($un);
  $this->validateFirstname($fn);
  $this->validateLastname($ln);
  $this->validateEmail($e1,$e2);
  $this->validatePassword($pw1,$pw2);

  if(empty($this->errorArray)){
    //insert into database, since there are no errors
    return true;
  }else{
return false;
  }
}

public function getError($error){
  if(!in_array($error, $this->errorArray)){
    $error = "";
  }
  return "<span class='errorMessage'>$error</span>";
}

  private function validateUsername($un){
  if(strlen($un) > 25 || strlen($un) < 5){
    array_push($this->errorArray, Constants::$usernameCharacters);
    return;
  }
  //todo: check if username exists!
  }

  private function validateFirstname($fn){
    if(strlen($fn) > 25 || strlen($fn) < 2){
      array_push($this->errorArray, Constants::$firstnameCharacters);
      return;
  }
}

  private function validateLastname($ln){
    if(strlen($ln) > 25 || strlen($ln) < 2){
      array_push($this->errorArray, Constants::$lastnameCharacters);
      return;
  }
}

  private function validateEmail($e1,$e2){
if($e1 != $e2){
  array_push($this->errorArray, Constants::$emailsDoNotMatch);
  return;
}


if(!filter_var($e1, FILTER_VALIDATE_EMAIL)){
  array_push($this->errorArray, Constants::$emailInvalid);
  return;
}
//todo: check that username already have not been used!
  }

  private function validatePassword($p1,$p2){
    if($p1 != $p2){
      array_push($this->errorArray, Constants::$passwordsDoNotMatch);
      return;
    }

    if(preg_match('/[^A-Za-z0-9]/',$p1)){
      array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
      return;
    }

    if(strlen($p1) > 30 || strlen($p1) < 5){
      array_push($this->errorArray, Constants::$passwordCharacters);
      return;
    }
  }

}
 ?>
