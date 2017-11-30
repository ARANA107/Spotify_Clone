<?php
class Account {
private $con;
private $errorArray;
public function __construct($con){
  $this->con=$con;
$this->errorArray=array();
  }

  public function login($un, $pw) {

    $pw = md5($pw);

    $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");

    if(mysqli_num_rows($query) == 1) {
      return true;
    }
    else {
      array_push($this->errorArray, Constants::$loginFailed);
      return false;
    }

  }

public function register($un,$fn,$ln,$e1,$e2,$pw1,$pw2){
  $this->validateUsername($un);
  $this->validateFirstname($fn);
  $this->validateLastname($ln);
  $this->validateEmail($e1,$e2);
  $this->validatePassword($pw1,$pw2);

  if(empty($this->errorArray)){
    //insert into database, since there are no errors
    return $this->insertUserDetails($un,$fn,$ln,$e1,$pw1);
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

private function insertUserDetails($un,$fn,$ln,$e1,$pw1){
$encryptedPW = md5($pw1); //Password will be encrypted
$profilePic = "assets/images/profile-pics/pic.jpg";
$date = date("Y-m-d");

$result = mysqli_query($this->con,"INSERT INTO users VALUES ('','$un','$fn','$ln','$e1','$encryptedPW','$date','$profilePic')");
echo result;
return $result;
}                                                            //first one is blank bcus it is id and it is auto increment

  private function validateUsername($un){
  if(strlen($un) > 25 || strlen($un) < 5){
    array_push($this->errorArray, Constants::$usernameCharacters);
    return;
  }
  $checkUsernameQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username='$un'");
  if(mysqli_num_rows($checkUsernameQuery) != 0){
    array_push($this->errorArray, Constants::$usernameTaken);
    return;
  }
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
$checkEmailQuery = mysqli_query($this->con,"SELECT email FROM users WHERE email='$e1'");
if(mysqli_num_rows($checkEmailQuery) != 0){
  array_push($this->errorArray, Constants::$emailTaken);
  return;
}
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
