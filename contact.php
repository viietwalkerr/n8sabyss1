<?php

session_start();
include 'INCLUDES/base.php';

?>

<!-- Banner -->
<div class="content">
      <h2>Contact Us</h2>
  <div class="accountScreens">
    <Fieldset>
      <legend>Login</legend>
      <form action="action_page.php">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your first name..">

        <br><br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <br><br>
        <label for="country">Country</label>
        <select id="country" name="country">
          
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <br><br>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <br><br>
        <input type="submit" value="Submit">

      </form>
    </fieldset>
  </div>
</div>

<?php include 'INCLUDES/footer.php'; ?>


</body>