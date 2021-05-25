<div ><img src="img/GEF-icon.png" alt="GEF Consulting Inc."></div>
<hr>
<section class="signup-form">
  <h3>Sign Up</h3>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
    <br>
      <input type="text" name="name" placeholder="Full name...">
      <br>
      <br>
      <input type="text" name="email" placeholder="Email...">
      <br>
      <br>
      <input type="text" name="uid" placeholder="Username...">
      <br>
      <br>
      <input type="password" name="pwd" placeholder="Password...">
      <br>
      <br>
      <input type="password" name="pwdrepeat" placeholder="Repeat password...">
      <br>
      <br>
      <button type="submit" name="submit">Sign up</button>
      <a href='index.php'>Home</a>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
