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
        $password = $_POST['psw'];
        $password2 = $_POST['psw2'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            //save to database
            $query = "select * from user where email = '$email'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) 
            {
                $row = mysqli_fetch_array($result);
                if(isset($row['email']))
                {
                    echo "email already exists<br><br>";
                    echo "<a href='databaseTest.php' class=button>login</a>";
                    die;
                } else {

                }
            }
            if($password == $password2)
            {
                $user_id = 2; //change to incrementing
                $write = "INSERT INTO `user`(`userID`, `email`, `password`, `DOB`) VALUES ('$user_id', '$email', '$password','$dob')";
                mysqli_query($con, $write);

            } else {
                echo "passwords do not match please try again";
                die;
                
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Singup Test</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Signup Test</h1>
  <form method="post">
        <br><br>
        <label for="email"><b>Email</b></label> <br>
        <input type="text" placeholder="Enter Email" name ="email"><br><br>
  
        <label for="psw"><b>Password</b></label> <br>
        <input type="password" placeholder="Enter Password" name="psw" ><br><br>

        <label for="psw"><b> Confirm password</b></label><br>
        <input type="password" placeholder="Enter Password again " name="psw2" required><br><br>

        <label for="dob"><b>DOB</b></label> <br>
        <input type="date" placeholder="Enter Date of Birth" name="dob" ><br><br>
   
        <!--Creates the singup button to be clicked-->   
        <button type="submit">Sign Up</button>
</body>

</html>