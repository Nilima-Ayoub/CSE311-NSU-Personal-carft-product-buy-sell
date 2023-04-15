<?php
include_once('header.php');
?>

<section class="content">
  <div class="signInFormContainer">
    <form method="POST" action="signupprocess.php">
      <h2>Sign Up</h2>
      <div class="textbox1">
        <p>Username:</p>
        <input name="username" type="text" required id="username" placeholder="Username">
        <p>Email:</p>
        <input name="email" type="email" required id="email" placeholder="email">
        <p>Password:</p>
        <input name="password" type="password" required id="password" placeholder="password">
        <p>Address:</p>
        <input name="address" type="text" id="Address" required placeholder="Address">
        <p>Phone Number:</p>
        <input name="phonenumber" type="int" id="PhoneNumber" placeholder="PhoneNumber">
        <button name="sign_up" class="button_login" type="submit">Sign Up</button>
    </form>
  </div>
</section>

<?php
include_once('footer.php');
