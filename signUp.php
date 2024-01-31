<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="signUpStyles.css">
        <script src="signUpScript.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form method="post" action="">
            <a href="login.html"><button class="Login">Login</button></a>
            <button class="settings">
                <img src='settingsIcon.png' class='settingIcon'></img>Settings
            </button>
            <button class="layout">Layout</button>
            <button class="background">Background</button>
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
            <label for="emailInp" class="emailLabel">Email Address *</label>
            <label for="usernameInp" class="usernameLabel">Username *</label>
            <label for="passwordInp" class="passwordLabel">Password *</label>
            <label for="genresPreferences" class="genresLabel">Genre Preferences</label>
            <label for="dob" class="dobLabel">Date Of Birth *</label>
            <input type="text" class="emailInp" placeholder="Email Address" name="email" id="email">
            <input type="text" class="usernameInp" placeholder="Username" name="username" id="username">
            <input type="text" class="passwordInp" placeholder="Password" name="password" id="password">
            <input type="text" class="genrePreferences" placeholder="Genre Preferences" name="genresid="genres>
            <input type="date" class="dob" placeholder="Date Of Birth" name="dob" id="dob">
        </form>
        <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email_address = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $genre_preferences = $_POST["genres"];
            $dob = $_POST["dob"];
        }

        ?>
        
    </body>
</html>
