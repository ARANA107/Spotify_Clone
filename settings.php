<?php
include("includes/includedFiles.php");

 ?>

<div class="entifyInfo">
  <div class="centerSection">
<div class="userInfo">
<h1><?php echo $userLoggedIn->getFirstAndLastName() ?></h1>
</div>
</div>
<div class="buttonItems">
  <div class="button" onclick="openPage('updateDetails.php')">User Details</div>
  <div class="button" onclick="logout()">Logout</div>
</div>
</div>
