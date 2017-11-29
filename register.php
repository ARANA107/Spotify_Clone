<?php


include("includes/classes/Account.php");
include("includes/classes/Constants.php");
$account = new Account();
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValues($name){
  if(isset($_POST[$name])){
    echo $_POST[$name];
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to slotify!</title>
  </head>
  <body>

    <div id="inputContainer">

      <form id="loginForm" action="register.php" method="POST">
     <h2>Login to your account</h2>

     <p> <label for="loginUsername" >Username: </label>
       <input id="loginUsername" name="loginUsername" type="text" placeholder="ex. ash1234" required></p>
    <p><p> <label for="loginPassword">Password: </label>
      <input id="loginPassword" name="loginPassword" type="password" placeholder="your password"></p>

<button type="submit" name="loginButton">Log In</button>
      </form>



      <form id="registerForm" action="register.php" method="POST">
     <h2>Create your free account</h2>

     <p>
       <?php echo $account->getError(Constants:: $usernameCharacters); ?>
       <label for="username" >Username: </label>
       <input id="username" name="username" type="text" placeholder="ex. ash mathews" value="<?php getInputValues('username') ?>" required></p>

       <p>
         <?php echo $account->getError(Constants::$firstnameCharacters); ?>
         <label for="firstname" >First Name: </label>
         <input id="firstname" name="firstname" type="text" placeholder="ex. ash" value="<?php getInputValues('firstname') ?>" required></p>

         <p>
           <?php echo $account->getError(Constants::$lastnameCharacters); ?>
           <label for="lastname" >Last name: </label>
          <input id="lastname" name="lastname" type="text" placeholder="ex. mathews" value="<?php getInputValues('lastname') ?>" required></p>

           <p>
             <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
             <?php echo $account->getError(Constants::$emailInvalid); ?>
             <label for="email1" >email: </label>
             <input id="email1" name="email1" type="email" placeholder="ex. ash19@gmail.com" value="<?php getInputValues('email1') ?>" required></p>

             <p>

               <label for="email2" >Confirm Email: </label>
               <input id="email2" name="email2" type="email" placeholder="ex.ash19@gmail.com " value="<?php getInputValues('email2') ?>" required></p>

    <p>
      <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
      <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
      <?php echo $account->getError(Constants::$passwordCharacters); ?>
            <label for="password1">Password: </label>
      <input id="password1" name="password1" type="password" placeholder="your password"></p>

      <p>
        <label for="password2">Confirm Password: </label>
        <input id="password2" name="password2" type="password" placeholder="your password"></p>

    <button type="submit" name="registerButton">Sign Up</button>
      </form>

    </div>
  </body>
</html>
