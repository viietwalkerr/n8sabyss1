<?php

session_start();
// include 'REGISTRATION/server.php';
include 'INCLUDES/base.php';


 ?>

 <style type="text/css">
   .error-msg {
     position: relative;
     visibility: hidden;
     color: red;
     width: 300px;
   }
   </style>


 <div class="content">
  
     <h2>Please login to your account</h2>
   
   <div class="accountScreens">

     <Fieldset>
       <legend>Login</legend>
       <form class="form" name="LoginForm" method="post" action="loginPage.php" onsubmit="return validate()">


               <br>
               <input type="text" name="username" id="username" placeholder="Username" required />
               <span id="username_err" class="error-msg">Error Message</span>

               <br><br>
               <input type="password" name="password" id="password" placeholder="Password" onchange="validate_password()" />
               <span id="passwd_err" class="error-msg">Error Message</span>


               <br/><br/><input type="submit" name="login" id="login" value="Login" />

              <p>
                 Forgot Password? <a href="login.php">Reset Password</a>
              </p>
              <p>
                Don't have an account? <a href="registrationPage.php">Register Here</a>



       </form>
     </fieldset>
   </div>
 </div>
