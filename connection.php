<?php /*
/Connection credentials
$servername = 'localhost';
$username = 'root';
$password = 'Lucy05';
$dbname = 'flicks';
*/

$database_host = "dbhost.cs.man.ac.uk";
$database_user = "p47083lt";
$database_pass = "LucyMegan05";
$database_name = "2023_comp10120_cm5";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname, 3307);
// Check connection
if ($con->connect_errno) {
  echo "Connection failed";
  exit();
}




