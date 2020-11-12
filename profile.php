<?php
  session_start();

  if (!isset($_SESSION['username']))
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: loginPage.php');
  }

  include 'INCLUDES/base.php';

?>

  <!-- Banner -->
  <div class="content">
    <div class="inner">
      <div class="inner flex breadcomb-ctn" >
        <header>
          <h2>Profile</h2>
        </header>

        <hr>

        <br>
      </div>
        <div class="card">
          <img src="ASSETS/images/smoking panda.jpg" alt="John" style="width:25%" >
          <h1>
          <?php
            $username = $_SESSION['username'];
            $query = "SELECT firstname, lastname, email FROM users WHERE username='$username'";
            $results = mysqli_query($db, $query);

            $row = mysqli_fetch_assoc($results);
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            echo $row['firstname'] . " " . $row['lastname'];

            // if (mysqli_num_rows($results) == 1)
            // {
            //   while ($row = mysqli_fetch_assoc($results))
            //   {
            //     $rows[1] = $row;
            //   }
            //   echo "hi";
            //   echo $rows[1]['firstname']." ".$rows[1]['lastname'];
            // }
            // else
            // {
            //   echo "no output" . $username;
            // }
            ?></h1>
          <p class="title">First test subject, Smokers</p>
          <p>N8s Smoko Crew</p>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <p><button class="button">Contact</button></p>
        </div>



        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'About')">About</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <!-- Tab content -->
        <div id="About" class="tabcontent">
          <h3>London</h3>
          <?php
          echo "<p>Username: ". $username;
          echo "<p>Firstname: ".$firstname;
          echo "<p>Lastname: ".$lastname;
          echo "<p>Email: ".$email;
          ?>
        </div>

        <div id="Paris" class="tabcontent">
          <h3>Paris</h3>
          <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
          <h3>Tokyo</h3>
          <p>Tokyo is the capital of Japan.</p>
        </div>
      </div> <!-- end of inner flex -->
    </div> <!-- ebd of inner -->
  </div> <!-- end of div content -->



      <?php include 'INCLUDES/footer.php';?>
