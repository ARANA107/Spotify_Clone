<?php
include("includes/classes/Account.php");
$account = new Account();
$account->register();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
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
       <input id="loginUsername" name="loginUsername" type="text" placeholder="ex. ash mathews" required></p>
    <p><p> <label for="loginPassword">Password: </label>
      <input id="loginPassword" name="loginPassword" type="password" placeholder="your password"></p>

<button type="submit" name="loginButton">Log In</button>
      </form>



      <form id="registerForm" action="register.php" method="POST">
     <h2>Create your free account</h2>

     <p> <label for="username" >Username: </label>
       <input id="username" name="username" type="text" placeholder="ex. ash mathews" required></p>

       <p> <label for="firstname" >First Name: </label>
         <input id="firstname" name="firstname" type="text" placeholder="ex. ash" required></p>

         <p> <label for="lastname" >Last name: </label>
          <input id="lastname" name="lastname" type="text" placeholder="ex. mathews" required></p>

           <p> <label for="email1" >email: </label>
             <input id="email1" name="email1" type="email" placeholder="ex. ash19@gmail.com" required></p>

             <p> <label for="email2" >Confirm Email: </label>
               <input id="email2" name="email2" type="email" placeholder="ex.ash19@gmail.com " required></p>

    <p> <label for="password1">Password: </label>
      <input id="password1" name="password1" type="password" placeholder="your password"></p>

      <p> <label for="password2">Confirm Password: </label>
        <input id="password2" name="password2" type="password" placeholder="your password"></p>

    <button type="submit" name="registerButton">Sign Up</button>
      </form>

    </div>
  </body>
</html>
