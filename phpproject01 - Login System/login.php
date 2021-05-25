
<div ><img src="img/GEF-icon.png" alt="GEF Consulting Inc."></div>
<hr>
<section class="signup-form">
  <h3>Log In</h3>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username/Email...">
      <br>
      <br>
      <input type="password" name="pwd" placeholder="Password...">
      <br>
      <br>
      <button type="submit" name="submit">Sign in</button>
      <a href='signup.php'>Register</a>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
