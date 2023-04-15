<?php
include_once('header.php');
?>

<section class="content">
  <div class="signInFormContainer">
    <form method="post" action="signinprocess.php">
      <h2>Sign In</h2>
      <?php
      if(isset($_GET['error']))
      echo "<h2>Error: ". $_GET['error'] . "</h2>";
      ?>
      <p>Username:</p>
      <input type="text" name="username" required id="Username" placeholder="Username">
      <p>Password:</p>
      <input type="password" name="pass" required id="Password" placeholder="Password">
      <button name="submit" class="button_login" type="submit">Sign In</button>
    </form>
  </div>
</section>

<?php
include_once('footer.php');
?>