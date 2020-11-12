<?php
session_start();

  include 'INCLUDES/base.php';
?>
  <!-- Banner -->
  
  <div class="content">
  
      <h2>About N8's Abyss</h2>
    
    <br>
    <main>
   <section>
    <p>
    I'm a big fan of meaningful quotes, particularly ones that have a strong life philosophy.<br>
    So you can go and check out the ones that I added to this website.<br>
    </p>
      
    <input type="button" class="button" value="Get Started" onclick="quotes.php">
    <br><br>
    <a href="quotes.php"><span>Quotes</span></a>
    <br><br><br>
    <a href="quotes.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>Quotes</a>
    <br><br><br>
    <p id="demo">JavaScript can change HTML content.</p>
    <button type="button" class="button" onclick='document.getElementById("demo").innerHTML = "SIKE!"'>Click me to see something secret</button>
    <p id="demoScript"></p>
    <br><br>
    
    <script>
      document.write("Script write test");
    </script>

      <button type="button" class="button" onclick="document.write('Script button test')">Script Button test</button>
    </section> 
  </main> 
  </div> <!-- end div content -->
<?php include 'INCLUDES/footer.php';?>
<script>
document.getElementById("demoScript").innerHTML = 5 + 6;

</script>

</body>
