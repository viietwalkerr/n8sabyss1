<?php

// session_start();

//initialize variables
$username = "";
$email = "";
$errors = array();

//connect to the database
// try
// {
//     if ($db = mysqli_connect('sql313.epizy.com', 'epiz_26461012', 'n8sabyssadmin', 'epiz_26461012_n8sabyssphp'))
//     {
//         $db = mysqli_connect('sql313.epizy.com', 'epiz_26461012', 'n8sabyssadmin', 'epiz_26461012_n8sabyssphp');
//     }
//     else
//     {
//         $db = mysqli_connect('localhost', 'n8sabyssphp', 'n8sabyssphpadmin', 'n8sabyssphp');
//     }
// }
// catch(Exception $e)
// {
//     echo $e->getMessage();
// }
$db = mysqli_connect('localhost', 'n8sabyssphp', 'n8sabyssphpadmin', 'n8sabyssphp');

//register user
if (isset($_POST['register'])) {
  //receive all input values from form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure the form is filled correctly
  // by adding (array_push()) corresponding error into $errors array
  if (empty($username))
  {
    array_push($errors, "Username is required");
  }
  if (empty($firstname))
  {
    array_push($errors, "Firstname is required");
  }
  if (empty($lastname))
  {
    array_push($errors, "Lastname is required");
  }
  if (empty($email))
  {
    array_push($errors, "Email is required");
  }
  if (empty($password_1))
  {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2)
  {
    array_push($errors, "The two passwords do no match");
  }


  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user)
  {
    if ($user['username'] === $username)
    {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email)
    {
      array_push($errors, "Email already in use");
    }
  }

  // Register a user if there are no errors in form
  if (count($errors) == 0)
  {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO users (username, firstname, lastname, email, password)
              VALUES('$username', '$firstname', '$lastname', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}


// login users
if (isset($_POST['login']))
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username))
  {
    array_push($errors, "Username is required");
  }
  if (empty($password))
  {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0)
  {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1)
    {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in!";

      header('location: index.php');
    }
    else
    {
      array_push($errors, "Wrong username or password");
    }
  }
}

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginPage.php");
  }

?>
