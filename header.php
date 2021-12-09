<?php if (!headers_sent() && session_id()) {
session_start();} ?>

<!doctype html>
<html>
<head>
<title>Online Forum Project DSW</title>
<link rel="stylesheet" href="test.css">
</head>
<body>
<h1> Online Forum :</h1>
  <div id="wrapper">
  <div id="menu">
      <a class="item" href="1.php"> Home </a>
      <a class="item" href="2.php"> Create a topic</a>
      <a class="item" href="3.php"> Create a category</a>
    </div>
  <div id="userbar">
  <div id="userbar">

<?php
      if(isset($_SESSION['signed_in']))
      {
          echo 'Hello ' . $_SESSION['user_name'] . '! Not you? <a href="4.php">Sign out</a>';
      }
      else
      {
          echo '<a href="4.php">Sign in</a> or <a href="5.php">create an account</a>.';
      }
      ?>
      
  </div>
  </div>

  <div id="content">
