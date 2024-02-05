<?php
//Starts the session
session_start();
//Stop displaying PHP information to the user which is unnecessary
    error_reporting (E_ALL ^ E_NOTICE);
// Connects to other PHP files        
    include('C:\xampp\htdocs\cm5\connection.php');
    $_SESSION;


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['psw'];
        
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
          //read from database
          $query = "select * from user where email = '$email'";
          $result = mysqli_query($con, $query);
          if($result)
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Test</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Login Test</h1>
  <form method="post">
        <br><br>
        <label for="email"><b>Email</b></label> <br>
        <input type="text" placeholder="Enter Email" name ="email"><br><br>
  
        <label for="psw"><b>Password</b></label> <br>
        <input type="password" placeholder="Enter Password" name="psw" ><br><br>
    <!--Creates the login button to be clicked-->   
        <button type="submit">Login</button>
</body>

</html>