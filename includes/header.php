<?php

//SESSION_DESTROY()  to logout will be added later
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
  header("Location: register.php");
}
?>

<html>

<head>
  <title>Welcome to spotify!</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</head>
<body>

  <div id="mainContainer">

    <div id="topContainer">
      <?php include("includes/navBarContainer.php"); ?>
      <div id="mainViewContainer">
        <div id="mainContent">