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

<head>
<title>Welcome to spotify!</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div id="nowPlayingBarContainer">
  <div id="nowPlayingBar">

    <div id="nowPlayingLeft">

    </div>

    <div id="nowPlayingCenter">
      <div class="content playerControls">
        <div class="buttons">

          <button class="controlButton shuffle" title="Shuffle Button">
            <img src="assets/images/icons/shuffle.png" alt="Shuffle">
           </button>

           <button class="controlButton previous" title="previous Button">
             <img src="assets/images/icons/previous.png" alt="previous">
            </button>

            <button class="controlButton play" title="play Button">
              <img src="assets/images/icons/play.png" alt="play">
             </button>

             <button class="controlButton pause" title="pause Button" style="display: none;">
               <img src="assets/images/icons/pause.png" alt="play">
              </button>

             <button class="controlButton next" title="next Button">
               <img src="assets/images/icons/next.png" alt="next">
              </button>

              <button class="controlButton repeat" title="repeat Button">
                <img src="assets/images/icons/repeat.png" alt="repeat">
               </button>
        </div>
      </div>
    </div>

    <div id="nowPlayingRight">

    </div>

  </div>
</div>





</body>
</html>
