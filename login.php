<?php
//Starts the session
session_start();
//Stop displaying PHP information to the user which is unnecessary
    error_reporting (E_ALL ^ E_NOTICE);
// Connects to other PHP files        
   // include('https://web.cs.manchester.ac.uk/p47083lt/cm5/connect.php');
    
$database_host = "dbhost.cs.man.ac.uk";
$database_user = "p47083lt";
$database_pass = "LucyMegan05";
$database_name = "2023_comp10120_cm5";

// Create connection
$con = new mysqli($database_host, $database_user, $database_pass, $database_name);
// Check connection
if ($con->connect_errno) {
  echo "Connection failed";
  exit();
}

   
   $_SESSION;


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //something was posted
        $email = $_POST["email"];
        $password = $_POST["password"];


        if(!empty($email) && !empty($password))
        {
          //read from database
          $query = "SELECT * FROM `user` WHERE `email` = '$email'";
          $result = mysqli_query($con, $query);
          if($query)
          {
            if($result && mysqli_num_rows($result) > 0)
            {
              $user_data = mysqli_fetch_assoc($result);
              if($user_data['password'] === $password)
                {
                    echo "login successful";
                }
                else{
                    echo "login failed";
                }
            }
            else{
                echo "not found";
            }
          }
        }
        else{
            echo "enter email and password";
        }
    }
?>

<!-- This is Tong's latest login page as of 18/02/2024 -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<style>
  * {
    font-family: 'Concert One', cursive; /* Apply Concert One font to all elements */
  }
  body {
    background-color: #A16870;
    color: white;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    flex-direction: column;
  }
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }
  .logo {
    height: 75px; /* Adjust as needed */
  }
  .navigation {
    display: flex;
    gap: 20px;
  }
  .navigation a, .settings {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: inline-block;
  }
  .navigation a:hover, .settings:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .navigation a[href$="/login"] {
    text-decoration: underline;
  }

  .navigation a[href$="/register"] {
  text-decoration: underline;

  }
  .settings {
    background-color: #000;
  }
  .login-row {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .login-form {
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }
  .login-form input[type='email'],
  .login-form input[type='password'],
  .login-form input[type='submit'] {
    padding: 10px;
    border: none;
    border-radius: 4px;
  }
  .login-form input[type='email'],
  .login-form input[type='password'] {
    width: 200px; /* Adjust as needed */
  }
  .login-form input[type='submit'] {
    background-color: #000;
    color: white;
    cursor: pointer;
    width: 100px; /* Adjust as needed */
  }
  .login-form input[type='submit']:hover {
    background-color: #000;
  }
  .login-text h1 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .already-text h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #000;
  }
</style>
</head>
<body>
<div class="top-bar">
  <img src="assets/images/logo.png" alt="Logo" class="logo">
  <div class="navigation">
    <a href="signUp.php">Register</a>
    <!-- <a href="/login">Login</a> -->
    <button class="settings">Settings</button>
  </div>
</div>
<div class="login-row">
  <div class="login-text">  
    <h1>Login</h1>
    </div>
  <div class="already-text">
      <h2>Already have an account?</h2>
    </div>
    <p></p>
    <p></p>
  <form class="login-form" action = "" method="post">
    <input type="email" name="email" placeholder="email address" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="login">
  </form>
</div>
</body>
</html>
