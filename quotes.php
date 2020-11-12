<?php

session_start();

  include 'INCLUDES/base.php';

  $query ="SELECT * FROM quotes ORDER BY id";
  $results = mysqli_query($db, $query);
?>

  <!-- Banner -->
  <div class="content">
    <div class="inner">
      <div class="inner flex breadcomb-ctn" >
        <header>
          <h2>Quotes</h2>
        </header>
      <!-- block content -->

          <table id=quotes>
          <tr>
            <th style=" text-align: center">Quote</th>
          </tr>
          <?php
          foreach ($results as $row)
          {
            echo
            "<tr>
              <td>{$row['quote']}</td>
            </tr>";
          }
          ?>
          </table>
          <!-- end block content -->
        </div>
        <input type="button" class="btn btn-primary" value="Get Started">
    </div>
  </div>
<?php include 'INCLUDES/footer.php';?>
