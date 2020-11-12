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
        <h2>About N8's Abyss</h2>
        <br><br>
        <form method="post" action="">
          
            <span class="input-group-addon"></span>
            <input type="text" name="day" required id="id_day" class="form-control" placeholder="Day">

          <div class="input-group mg-b-pro-edt">
            <span class="input-group-addon"></span>
            <input type="text" name="month" required id="id_month" class="form-control" placeholder="Month">
          </div>
          <div class="input-group mg-b-pro-edt">
            <span class="input-group-addon"></span>
            <input type="text" name="year" required id="id_year" class="form-control" placeholder="Year">
          </div>
          <div class="input-group mg-b-pro-edt">
            <span class="input-group-addon"></span>
            <input type="text" name="title" maxlength="100" required id="id_title" class="form-control" placeholder="Title">
          </div>
          <div class="input-group mg-b-pro-edt">
            <span class="input-group-addon"></span>
            <textarea name="thoughts" cols="40" rows="10" required id="id_thoughts" class="form-control" placeholder="Thoughts"></textarea>
          </div>
          <input type="submit" class="btn btn-default btn-block">
        </form>
      </div>
<h1>Thoughts</h1>

    
</table>
    </div>
        <input type="button" class="btn btn-primary" value="Get Started">
        <a href="quotes.php" class="button">Quotes</a>
    </div>

</div>
<?php include 'INCLUDES/footer.php';?>
