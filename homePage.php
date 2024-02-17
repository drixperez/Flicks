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
        <div class="image">
            <img src="Flicks.png" alt="the flicks logo">
        </div>
        <h1 class="home-header">Unlimited Films and TV Shows </h1>
        <form method="post" action="">
            <input type="text" class="search-bar" placeholder="Enter you text here:" name="search" id="search">
            <button class="searchButton" onclick="searchBar()">Enter</button>
        </form>
        <div class="Flicky">
            <h3>Flicks</h3>
        </div>
        <a href="settings.html"><button class="settings" onclick="">Settings</button></a>
        <a href="login.html"><button class="login">Login</button></a>
        <div class="flicks-container">
            <div>Film1</div>
            <div>Film2</div>
            <div>Film3</div>
            <div>Film4</div>
        </div>
        
    </body>
</html>
