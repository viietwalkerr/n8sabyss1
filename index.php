<?php

session_start();
//
// if (isset($_SESSION['username']))
// {
//   $_SESSION['msg'] = "You must log in first";
//   header('location: loginPage.php');
// }
// if (isset($_GET['logout']))
// {
//   session_destroy();
//   unset($_SESSION['username']);
//   header("location: loginPage.php");
// }

  include 'INCLUDES/base.php';

?>

  <!-- Banner -->
  <div class="content">
    
        <h2>Welcome to N8's Abyss</h2>
      
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
  	    <?php endif ?>


        <input type="button" class="button" value="Get Started" onclick="document.getElementById('demo').innerHTML = Date()" >

        <button type="button" class="button" onclick="document.getElementById('demo').innerHTML = Date()">
          Click me to display Date and Time.</button>

          <p id="demo"></p>

          




  </div>
  <?php include 'INCLUDES/footer.php';?>
