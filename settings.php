<!DOCTYPE html>
<!-- Change favourites to genre, and  add streaming services-->
<html lang="en">
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="settings.css">
        <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
        <script src="settings.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header class="FlicksHeader">
            <h2>Flicks</h2>
        </header>
        <h1 class="settings">Settings</h1>
        <header class="Flicks-Logo">
            <img src="FlicksLogo.png" width="65" height="65">
        </header>
        <button class="passwordChange" onclick="openChangePasswordPopUp()">Change Password</button>
        <div id="overlay" class="overlay"></div>




        <div id="passwordPopUp" class="pop-up">
            <button class="password-close-btn" onclick="closeChangePasswordPopUp()">X</button>
            <h2>Password Change</h2>
            <!-- <form method="post" action=""> -->
            <button class="password-change-submit">Submit</button>
            <input type="text" class="firstPasswordEntry" id="1stPassword" name="1stPassword", placeholder="Password">
            <input type="text" class="secondPasswordEntry" id="2ndPassword" name="2ndPassword", placeholder="Confirm Password">
            <!-- </form> -->
        </div>




        
        <!-- <form method="post" action="">
            <button class="submit">Submit</button>
            <select class="languageChoice" name="language" id="language">
                <?php
                    // $languages = array("English", "French", "Spanish", "German", "Arabic", "Mandarin", "Cantonese", "Italian");
                    // foreach ($languages as $language)
                    // {
                    //     echo "<option value='" . strtolower($language) . "'>$language</option>";
                    // }
                ?>
            </select>
        
        </form> -->
        <button class="favourite" onclick="favourite()">Favourites</button>
        <button class="general" onclick="general()">General Settings</button>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $languageChoice = $_POST["language"];
                $changedPassword = $_POST["1stPassword"];
                echo $changedPassword;

            }

        ?>
    </body>
</html>
