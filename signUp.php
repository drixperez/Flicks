<?php
session_start();

error_reporting (E_ALL ^ E_NOTICE);
   
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_address = $_POST["email"];
    $password = $_POST["password"];
    $passwordC = $_POST["passwordC"];
    $dob = $_POST["dob"];
    $query = "SELECT * FROM `user` WHERE `email` = '$email'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_array($result);
        if(isset($row['email']))
        {
            echo "email already exists<br><br>";
            echo "<a href='https://web.cs.manchester.ac.uk/p47083lt/cm5/login.php' class=button>login</a>";
            die;
        } else {

        }
    }
    if($password == $passwordC)
    {
        $write = "INSERT INTO `user`(`email`, `password`, `DOB`) VALUES ('$email', '$password','$dob')";
        mysqli_query($con, $write);
        //retreive user id for this entry


    } else {
        echo "passwords do not match please try again";
        die;
        
    }


}
   
   $_SESSION;


?>


<!DOCTYPE html>
<!-- Get the screen size to adjust properly -->
<html lang="en">
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="signUpStyles.css">
        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
        <script src="signUpScript.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="loginLink">
            <a href="login.html">Login</a>
        </div>
        <div class="settingsLink">
            <a href="settings.php">Settings</a>
        </div>
        <!-- <a href="settings.php"><button class="settings">Settings</button></a> -->
        <form method="post" action="">
            <button class="submit" onclick="signUpConfirmed()">Submit</button>
            <header class="sign-up">
                <h1>Sign Up</h1>
            </header>
            <header class="Flicks">
                <h2>Flicks</h2>
            </header>
            <header class="Flicks-Logo">
                <img src="FlicksLogo.png" width="65" height="65">
            </header>
            <label for="emailInp" class="passwordLabel">Password *</label>
            <label for="usernameInp" class="emailLabel">Email Address *</label>
            <label for="passwordInp" class="passwordCLabel">Confirm Password *</label>
            <label for="genresPreferences" class="genresLabel">Genre Preferences</label>
            <label for="dob" class="dobLabel">Date Of Birth *</label>
            <input type="text" class="passwordInp" placeholder="Password" name="password" id="password">
            <input type="text" class="emailInp" placeholder="Email Address" name="email" id="email">
            <input type="text" class="passwordCInp" placeholder="Confirm Password" name="passwordC" id="passwordC">
            <!-- <input type="text" class="genrePreferences" placeholder="Genre Preferences" name="genres" id="genres"> -->
            <div class="genres">
                <input type="checkbox" class="action" id="action" name="action" value="Action">
                <label class="actionLabel" for="action">Action</label>
                <input type="checkbox" class="adventure" id="adventure" name="adventure" value="Adventure">
                <label class="adventureLabel" for="adventure">Adventure</label>
                <input type="checkbox" class="animation" id="animation" name="animation" value="Animation">
                <label class="animationLabel" for="animation">Animation</label>
                <input type="checkbox" class="comedy" id="comedy" name="comedy" value="Comedy">
                <label class="comedyLabel" for="comedyLabel">Comedy</label>
                <input type="checkbox" class="crime" id="crime" name="crime" value="Crime">
                <label class="crimeLabel" for="crime">Crime</label>
                <input type="checkbox" class="drama" id="drama" name="drama" value="Drama">
                <label class="dramaLabel" for="drama">Drama</label>
                <input type="checkbox" class="fantasy" id="fantasy" name="fantasy" value="Fantasy">
                <label class="fantasyLabel" for="fantasy">Fantasy</label>
                <input type="checkbox" class="history" id="history" name="history" value="History">
                <label class="historyLabel" for="genre8">History</label>
                <input type="checkbox" class="horror" id="horror" name="horror" value="Horror">
                <label class="horrorLabel" for="horror">Horror</label>
                <input type="checkbox" class="musical" id="musical" name="musical" value="Musical">
                <label class="musicalLabel" for="musical">Musical</label>
                <input type="checkbox" class="mystery" id="mystery" name="mystery" value="Mystery">
                <label class="mysteryLabel" for="mystery">Mystery</label>
                <input type="checkbox" class="romance" id="romance" name="romance" value="Romance">
                <label class="romanceLabel" for="romance">Romance</label>
                <input type="checkbox" class="scifi" id="scifi" name="scifi" value="Sci-Fi">
                <label class="scifiLabel" for="scifi">Sci-Fi</label>
            </div>
            <label class="streamingLabel" for="streamingServices">Streaming Services</label>
            <div class="streamingServices">
                <input type="checkbox" class="netflix" id="netflix" name="netflix" value="Netflix">
                <label class="netflixLabel" for="netflix">Netflix</label>
                <input type="checkbox" class="prime" id="prime" name="prime" value="Prime">
                <label class="primeLabel" for="prime">Prime Video</label>
                <input type="checkbox" class="disney" id="disney" name="disney" value="Disney">
                <label class="disneyLabel" for="disney">Disney+</label>
                <input type="checkbox" class="max" id="max" name="max" value="Max">
                <label class="maxLabel" for="max">HBO Max</label>
                <input type="checkbox" class="paramount" id="paramount" name="paramount" value="Paramount">
                <label class="paramountLabel" for="paramount">Paramount+</label>
            </div>
            <input type="date" class="dob" placeholder="Date Of Birth" name="dob" id="dob">
        </form>
        <?php 
        $action = FALSE;
        $adventure = FALSE;
        $animation = FALSE;
        $comedy = FALSE;
        $crime = FALSE;
        $drama = FALSE;
        $fantasy = FALSE;
        $history = FALSE;
        $horror = FALSE;
        $musical = FALSE;
        $mystery = FALSE;
        $romance = FALSE;
        $scifi = FALSE;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email_address = $_POST["email"];
            $password = $_POST["password"];
            $passwordC = $_POST["passwordC"];
            $dob = $_POST["dob"];
        }
       
        ?>
        
    </body>
</html>
