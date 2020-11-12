<?php

session_start();

  include 'INCLUDES/base.php';

  $query ="SELECT * FROM quotes ORDER BY id";
  $results = mysqli_query($db, $query);
?>

  <!-- Banner -->
  <div class="content">
          <h2>Quotes</h2>
      <!-- block content -->
    <main>
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
        </main>
    </div>
<?php include 'INCLUDES/footer.php';?>

