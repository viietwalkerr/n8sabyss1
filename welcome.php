<head>
    <meta charset="utf-8">

    <title>N8's Abyss</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>

  -->
<style>

body {
  font-family: "Lato", sans-serif;
  margin: 0 auto;
}

.wrapper {
  margin-left: auto;
  margin-right: auto;
  text-align: left;

}

#header {
  margin-top: 0;
  height: 100px;
  text-align: center;
  background-color: #F5F4F4;




  color: white;
  box-shadow: 5px 5px 5px #888888;
  border-bottom: 1px black;
}

#header h1 {
  padding-top: 30px;
  color: black;
}

.topnav {
  overflow: hidden;
  background-color: white;
  padding-left: 160px;
  margin-left: 160px;
  margin: 0 auto;
  top: 0;
  height: 60px;
  font-size: 12pt;
  font-weight: bold;
  box-shadow:


}

.topnav ul {
  margin: 0px;
}

.topnav a {
  float: left;
  text-align: center;
  background-color: white;
  color: aqua;
  border-radius: 12px;
  border: 1px solid #008CBA;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 2px;
}

.topnav a:hover {
  background-color: aqua;
  color: white;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav a.active:hover {
  background-color: aqua;
  color: white;
}

.topnav .nav-profile {
float: right;
color: black;
}

.topnav .nav-profile button {
  background-color: white;
  color: aqua;
  border-radius: 12px;
  border: 1px solid #008CBA;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 2px;

}

.topnav .nav-profile button:hover {
  background-color: aqua;
  color: white;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

.topnav .search-container {
  float: none;
  position: absolute;
  padding-left: 160px;
  padding-top: 40px;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -5px;
  right: -5px;
  padding: 2.5px 5px;
  border-radius: 50%;
  background: red;
  color: white;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn:hover, {
  background-color: red;
}

.navbar ul {
  margin: 0 auto;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}

.sidenav h2 {
  margin-left: auto;
  margin-right: auto;
  padding-bottom: 20px;
  text-align: center;
  color: white;
}

.sidenav a {
  padding: 10px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;

}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#content {

  padding: 10px;
  margin-top: 30px;
  margin-left: 190px; /*160 + 30 */
  margin-right: 30px;
  margin-bottom: 30px;
  border: 1px solid black;
  background-color: #F7F7F7;
  height: 1000px;
}

#footer {
  margin: 5px;
  margin-left: 165px; /* 160px + 5 */
  border: 1px dashed black;
  background-color: #CCCCFF;
  text-align: center;
  clear: both;
  height: 50px;
}

#backToTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#backToTopBtn:hover {
  background-color: #555;
}

.accountScreens {

    margin-top: 20px;
    width: 1000px;
    height: 500px;
    //border: solid;
    left: 50%;

    float: none;
  position: absolute;
  padding-left: 160px;
  padding-top: 40px;
  left: 50%;
  transform: translate(-50%);
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 1000px;
  border-style: solid;
  float: none;
  position: absolute;
  padding-left: 160px;
  padding-top: 40px;
  left: 50%;
  transform: translate(-50%);
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.accountScreens {

    margin-top: 20px;
    width: 1000px;
    height: 500px;
    //border: solid;
    left: 50%;

    float: none;
  position: absolute;
  padding-left: 160px;
  padding-top: 40px;
  left: 50%;
  transform: translate(-50%);
}

</style>

</head>

<body>
  <div class="wrapper">

    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">Back to Top</button>
    <!--
    <div id="header">

    </div>
  -->



  <div class="topnav">
      <!--
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      -->
      <ld><a class="active" href="index.php">Home</a></ld>
      <ld><a href="about.php">About</a></ld>
      <ld><a href="quotes.php">Quotes</a></ld>
      <ld><a href="theabyss.php">The Abyss</a></ld>
  <!--
      <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  -->
    <div class="nav-profile topnavUser">
      <!-- if authenticated -->
      <a href="#" class="notification">
        <span>Inbox</span>
        <span class="badge">3</span>
      </a>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Profile</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="{% url 'profile' %}">Profile</a>
            <a href="#about">Settings</a>
            <a href="#contact">Contact</a>
            <a href="{% url 'auth_logout' %}">Logout</a>
          </div>
        </div> <!-- end of dropdown -->

        <!-- if not authenticated -->

      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Profile</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="{% url 'auth_login' %}">Login</a>
            <a href="{% url 'registration_register' %}">Register</a>
            <a href="#contact">Contact</a>
          </div>
          <a href="{% url 'auth_login' %}">Login</a>
      </div> <!-- end of dropdown -->
    </div> <!-- end of nav-profile -->
  </div> <!-- end of navbar -->



  <div id="mySidenav" class="sidenav">
    <h2>N8sAbyss</h2>
      <!--
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      -->
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="quotes.php">Quotes</a>
    <a href="theabyss.php">The Abyss</a>
    <a href="profile.php">Profile</a>
  </div> <!-- end of sidenav -->

  <div id="content">
    <p>
      Can't be contained
    </p>
  </div> <!-- end of content -->

  <div id="footer">
    <p> Footer </p>
  </footer>

  <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
      }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropbtn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
      }
    });
  }

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("backToTopBtn").style.display = "block";
    } else {
      document.getElementById("backToTopBtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }




  </script>
</div> <!-- end of wrapper -->



</body>




<?php
/*

echo 'Hello World';
echo '<p><b>Hello World</b> </p>';

$row = 13;
$col = 13;

echo "<table border = '1'>"; {
  echo '<tr>';
    echo '<td><strong>x</strong></td>',
    '<td><strong>1</strong></td>',
    '<td><strong>2</strong></td>',
    '<td><strong>3</strong></td>',
    '<td><strong>4</strong></td>',
    '<td><strong>5</strong></td>',
    '<td><strong>6</strong></td>',
    '<td><strong>7</strong></td>',
    '<td><strong>8</strong></td>',
    '<td><strong>9</strong></td>',
    '<td><strong>10</strong></td>',
    '<td><strong>11</strong></td>',
    '<td><strong>12</strong></td>';
  echo '</tr>';

  for ($i = 1; $i < $row; $i++)
  {
    echo '<tr>';

    for ($j = 0; $j < $col; $j++)
    {
      if ($j == 0)
      {
        echo "<td><strong> $i </strong></td>";
      }
      else
      {
        echo "<td>" .$i * $j. "</td>";
      }

    }
    echo '</tr>';
  }
echo '</table>';
}
*/
?>
