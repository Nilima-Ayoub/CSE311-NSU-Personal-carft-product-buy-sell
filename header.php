<?php
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ArtsyCraftsy</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <section class="header">
    <div class="logo"><a href="index.php">ArtsyCraftsy</a></div>
    <div class="nav">
      <?php
      if (!isset($_COOKIE[$cookie_username])) {
      ?>
        <div><a href="signin.php">Sign In</a></div>
        <div><a href="signup.php">Sign Up</a></div>
      <?php } ?>

      <?php
      if (isset($_COOKIE[$cookie_username]) && ($_COOKIE[$cookie_role] == 'admin')) {
      ?>
        <div><a href="admin.php">👨‍💻 Admin Panel: <?php echo $_COOKIE[$cookie_username]; ?></a></div>
        <div><a href="signout.php">Sign Out</a></div>
      <?php } ?>

      <?php
      if (isset($_COOKIE[$cookie_username]) && ($_COOKIE[$cookie_role] == 'user')) {
      ?>
        <div><a href="#">😄 User: <?php echo $_COOKIE[$cookie_username]; ?></a></div>
        <div><a href="signout.php">Sign Out</a></div>
      <?php } ?>
    </div>
  </section>