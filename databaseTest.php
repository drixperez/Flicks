<?php
//Starts the session
session_start();
//Stop displaying PHP information to the user which is unnecessary
    error_reporting (E_ALL ^ E_NOTICE);
// Connects to other PHP files        
    include('C:\xampp\htdocs\cm5\connection.php');
    $_SESSION;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML5 Boilerplate</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Page Title</h1>
  <script src="scripts.js"></script>
</body>

</html>