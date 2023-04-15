<?php 
include_once('config.php');

 $past = time() - 100; 
 //this makes the time in the past to destroy the cookie 
 setcookie($cookie_username, '', $past); 
 setcookie($cookie_password, '', $past); 
 setcookie($cookie_role, '', $past); 
 header("Location: index.php"); 
 ?> 