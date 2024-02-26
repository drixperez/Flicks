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
        <button class="emailChange" onclick="openEmailChangePopUp()">Change Email</button>
        <button class="genreChange" onclick="openGenreChangePopUp()">Change Genre Preferences</button>
        <button class="streamingServiceChange" onclick="openServiceChangePopUp()">Change Streaming Services</button>
        <button class="languageChange" onclick="openLanguageChangePopUp()">Change Language</button>
        <div id="overlay" class="overlay"></div>




        <div id="passwordPopUp" class="pop-up">
            <button class="pop-up-close-btn" onclick="closeChangePasswordPopUp()">X</button>
            <h2>Password Change</h2>
            <form method="post" action="">
                <button class="pop-up-change-submit">Submit</button>
                <input type="text" class="firstPasswordEntry" id="1stPassword" name="1stPassword" placeholder="Password">
                <input type="text" class="secondPasswordEntry" id="2ndPassword" name="2ndPassword" placeholder="Confirm Password">
            </form> 
        </div>

        <div id="emailPopUp" class="pop-up">
            <form method="post" action="">
                <button class="pop-up-close-btn" onclick="closeEmailChangePopUp()">X</button>
                <h2>Email Change</h2>
                <button class="pop-up-change-submit">Submit</button>
                <input type="text" class="firstEmailEntry" id="1stEmail" name="1stEmail" placeholder="Email">
                <input type="text" class="secondEmailEntry" id="2ndEmail" name="2ndEmail" placeholder="Confirm Email">
            </form>
        </div>

        <div id="genrePopUp" class="pop-up">
            <form method="post" action="">
                <button class="pop-up-close-btn" onclick="closeGenrePopUp()">X</button>
                <h2>Select your preferred genres</h2>
                <button class="pop-up-change-submit">Submit</button>
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
                
            </form>
        </div>

        <div id="streamingServicePopUp" class="pop-up">
            <form method="post" action="">
                <button class="pop-up-close-btn" onclick="closeServiceChangePopUp()">X</button>
                <h2>Select your streaming services</h2>
                <button class="pop-up-change-submit">Submit</button>
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
            </form>
        </div>

        <div id="languageChangePopUp" class="pop-up">
            <form method="post" action="">
                <button class="pop-up-close-btn" onclick="closeLanguageChangePopUp()">X</button>
                <h2>Select your language</h2>
                <button class="pop-up-change-submit">Submit</button>
                <select class="languageChoice" name="languageChoice" id="languageChoice">
                    <?php
                        $languages = array("English", "French", "Spanish", "German", "Arabic", "Mandarin", "Cantonese", "Italian");
                        foreach ($languages as $language)
                        {
                            echo "<option value='" . strtolower($language) . "'>$language</option>";
                        }
                    ?>
                </select>
            </form>
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
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $languageChoice = $_POST["language"];
                $changedPassword = $_POST["1stPassword"];
                echo $changedPassword;

            }

        ?>
    </body>
</html>
