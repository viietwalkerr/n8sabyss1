<?php


include 'REGISTRATION/server.php';


// $dbh = new PDO('mysql:host=localhost;dbname=n8sabyssphp', 'n8sabyssphp', 'n8sabyssphpadmin');



  ?>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <title>N8's Abyss</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <link rel="stylesheet" href="CSS/player.css">
    <script type="text/javascript" src="JAVASCRIPT/myscripts.js"></script>

</head>
<body onload="load()">
<header>
    <button onclick="topFunction()" id="backToTopBtn" title="Go to top"><span>Back to Top</span></button>
    <!--
    <div id="header">

    </div>
  -->

  <nav class="topnav">
      <!--
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      -->
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="quotes.php">Quotes</a></li>
      <li><a href="theabyss.php">The Abyss</a></li>
    </ul>

    <!--
    <div class="topnav-centered">
      <input type="text" placeholder="Search..">
    </div>
    -->


    <div class="nav-profile topnavUser">
      <!-- if authenticated -->
      <?php
      if (isset($_SESSION['username'])) : ?>

      <div class="dropdown">
        <button onclick="myDropdown()" class="dropbtn">Profile</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="profile.php">Profile</a>
            <a href="#about">Settings</a>
            <a href="contact.php">Contact</a>
            <a href="index.php?logout='1'">Logout</a>
          </div>
      </div> <!-- end of dropdown -->
      <?php endif ?>

      <!-- if not authenticated -->
      <?php
      if(!isset($_SESSION['username'])) : ?>
      <div class="dropdown">
        <button onclick="myDropdown()" class="dropbtn">Profile</button>
        <div id="myDropdown" class="dropdown-content">

          <!-- logged in user -->
            <a href="loginPage.php">Login</a>
            <a href="registrationPage.php">Register</a>
            <a href="contact.php">Contact</a>
        </div>
          <a href="loginPage.php">Login</a>
          <?php endif?>
      </div> <!-- end of dropdown -->
    </div> <!-- end of nav-profile -->
  </nav> <!-- end of topnav -->

  <div id="mySidenav" class="sidenav">
    <h2>N8sAbyss</h2>
      <!--
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      -->
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="quotes.php">Quotes</a>
    <a href="theabyss.php">The Abyss</a>
    <?php
      if (isset($_SESSION['username'])) : ?>
      <a href="profile.php">Profile</a>
    <?php endif ?>


    <img src="./ASSETS/images/smoking panda.jpg" id="background"/>
    <audio src="./ASSETS/music/Juice WRLD - Maze.mp3" id="song"></audio>
    <br><br>
    <br><br><br>

    <div class="container">
      <div class="box"></div>
      <img src="./ASSETS/images/smoking panda.jpg" id="thumbnail" style="width:150px; height:150px;" />
      <br><br>
      <img src="./assets/icons/backward.png" onclick="previousSong()" id="previous-song" />
      <img src="./ASSETS/icons/play.png" onclick="playPause()" id="play-pause" />
      <img src="./assets/icons/forward.png" onclick="nextSong()" id="next-song" />
      <div class="song-artist">Juice WRLD</div>
      <div class="song-title">Maze</div>

      <input
        type="range"
        id="progress-bar"
        min="0"
        max=""
        value="0"
        onchange="changeProgressBar()"
      />

      <input
        type="range"
        id="volume-bar"
        min="0"
        max="50"
        value="25"
        onchange="changeVolume()"
      />

      <div class="currentTime"></div>
      <div class="durationTime"></div>
    </div> <!-- end div container -->

    <script src="JAVASCRIPT/player.js"></script>

    <label class="switch" placeholder="Darkmode">
      <!-- <input id="checkboxDarkmode" type="checkbox" name="checkboxDarkmode" onclick="darkmodeFunction()">
      -->
      <input id="checkbox" type="checkbox" name="checkbox" onclick="darkmodeFunction(); save()">
        <span class="slider round"></span>
    </label>

  </div> <!-- end of sidenav -->


  <script>
  //makes topnav links active
  for (var i = 0; i < document.links.length; i++)
  {
      if (document.links[i].href == document.URL)
      {
          document.links[i].className = 'active';
      }
  }
  </script>

</header>

    

