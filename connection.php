<?php
//Connection credentials
$servername = 'localhost';
$username = 'root';
$password = 'Lucy05';
$dbname = 'flicks';
// Create connection
$con = new mysqli($servername, $username, $password, $dbname, 3307);
// Check connection
if ($con->connect_errno) {
  echo "Connection failed";
  exit();
}

