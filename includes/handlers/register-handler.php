<?php

function sanitizeFormPassword($inputText){
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeFormUsername($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  return $inputText;
}

function sanitizeFormString($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}



if(isset($_POST['registerButton'])){
  // echo "Register button was pressed";
  $username = sanitizeFormUsername( $_POST['username']);

  $firstname = sanitizeFormString( $_POST['firstname']);

  $lastname = sanitizeFormString( $_POST['lastname']);

  $email1 = sanitizeFormString( $_POST['email1']);

  $email2 = sanitizeFormString( $_POST['email2']);

  $password1 = sanitizeFormPassword( $_POST['password1']);

  $password2 = sanitizeFormPassword( $_POST['password2']);

  $wasSuccessful = $account->register($username,$firstname,$lastname,$email1,$email2,$password1,$password2);

if($wasSuccessful){
  $_SESSION['userLoggedIn'] = $username;
  header("Location: index.php");
}

}
?>
