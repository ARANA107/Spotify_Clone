<?php

//SESSION_DESTROY()  to logout will be added later
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
  header("Location: register.php");
}
 ?>

<html>
<body>
hello!
</body>
</html>
