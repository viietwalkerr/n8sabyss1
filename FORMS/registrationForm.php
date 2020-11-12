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
    <header>
      <h2>Register an Account</h2>
    </header>
    <div class="accountScreens">

      <Fieldset>
        <legend>Registration</legend>
        <form name="RegistrationForm" method="post" action="registrationPage.php" onsubmit="return validate()">
          <?php
          include ('INCLUDES/errors.php');
          ?>
                <br>
                <input type="text" name="username" id="username" placeholder="Username" required />
                <span id="username_err" class="error-msg">Error Message</span>

                <br><br>
                <input type="text" name="firstname" id="firstname" placeholder="First Name" onblur="validate_firstname()" onchange="validate_firstname()" />
                <span id="firstname_err" class="error-msg">Error Message</span>

                <br><br>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" onblur="validate_lastname()" onchange="validate_lastname()" />
                <span id="lastname_err" class="error-msg">Error Message</span>

                <br><br>
                <input name="email" id="email" type="email" placeholder="Email@address.com" onblur="validate_email()" onchange="validate_email()" />
                <span id="email_err" class="error-msg">Error Message</span>

                <br><br>
                <input type="password" name="password_1" id="password_1" placeholder="Password" onchange="validate_password()" />
                <span id="passwd_err" class="error-msg">Error Message</span>

                <br><br>
                <input type="password" name="password_2" id="password_2" placeholder="Confirm Password" onchange="confirm_password()" />
                <span id="confirm_err" class="error-msg">Error Message</span>

                <br/><br/><input type="submit" name="register" id="register" value="Register" />

                <p>
                  Already a member? <a href="loginPage.php">Sign In</a>
        </form>
      </fieldset>
    </div>
  </div>
