<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="homePageStyles.css">
        <script src="homePageScript.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h2 class="Flicks">Flicks</h2>
        <img class="Flicks-Logo" src="FlicksLogo.png" width="65" height="65">
        <h1 class="home-header">Home</h1>
        <form method="post" action="">
            <input type="text" class="search-bar" placeholder="Search" name="search" id="search">
            <button class="searchButton" onclick="searchBar()"></button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search_input = $_POST["search"];
        }
        ?>
    </body>
</html>
