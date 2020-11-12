<?php
session_start();

  include 'INCLUDES/base.php';
?>
  <!-- Banner -->
  
  <div class="content">
  
      <h2>About N8's Abyss</h2>
    
    <main>
   <section>
    <p>
    I'm a big fan of meaningful quotes, particularly ones that have a strong life philosophy.<br>
    So you can go and check out the ones that I added to this website.<br>
    </p>
      
    <a class="rainbowButton" href="quotes.php"><span>Quotes</span></a>
    <br><br><br>
    
    <!--
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
    -->
    <div class="quoteBox">
      <div>
        <div class="box box1">
          <p>I'm supposed to be the soldier who never blows his composer,
            even though I hold the weight of the whole world on my shoulers
            I ain't ever supposed to show it, my crew ain't supposed to know it
            even if it means going toe to toe with the Benzino, it don't matter
            I'd never drag him in battles that I can handle, unless I absolutely had to
            I'm supposed to set an example
          </p>
        </div>
        <div class="bg">
      </div>
    </div>
    <p>Use the switch on the bottom left to activate Darkmode!</p>
    </section> 
  </main> 
  </div> <!-- end div content -->
<?php include 'INCLUDES/footer.php';?>
<script>
document.getElementById("demoScript").innerHTML = 5 + 6;

</script>

</body>
