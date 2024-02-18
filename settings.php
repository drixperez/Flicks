<!DOCTYPE html>
<!-- Change favourites to genre, and  add streaming services-->
<html lang="en">
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="settings.css">
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
        <button class="details" onclick="personalDetails()">My Details</button>
        <form method="post" action="">
            <select class="languageChoice" name="language" id="language">
                <?php
                    $languages = array("English", "French", "Spanish", "German", "Arabic", "Mandarin", "Cantonese", "Italian");
                    foreach ($languages as $language)
                    {
                        echo "<option value='" . strtolower($language) . "'>$language</option>";
                    }
                ?>
            </select>
            <button
        </form>
        <button class="favourite" onclick="favourite()">Favourites</button>
        <button class="general" onclick="general()">General Settings</button>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $languageChoice = $_POST["language"];
                echo $languageChoice;
            }

        ?>
    </body>
</html>