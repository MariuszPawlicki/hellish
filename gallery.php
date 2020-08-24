<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Klub Hellish Paradise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="index.php" class="logo-sm"><img src="./pictures/hellish-txt.png"></a>
        <button class="menu-btn" onclick="btn_func()">
            <div class="menu-element"></div>
            <div class="menu-element"></div>
            <div class="menu-element"></div>
        </button>
    </nav>
    <div id="menu-list">
        <a href="index.php" class="list-button">Główna</a>
        <a href="gallery.php" class="list-button">Galeria</a>
        <a href="menu.php" class="list-button">Oferta menu</a>
        <a href="reservation.php" class="list-button">Rezerwacja loży</a>
    </div>
    <script src="btn-script.js"></script>
    <article class="intro">
        <h1>WITAJ W GALERII</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <br>Curabitur sagittis justo vel tortor finibus, eget aliquam sapien dignissim. 
            <br>Sed sed libero vel orci auctor sagittis sit amet et ligula. Praesent eu dui a dui aucto rhoncus. 
            <br>Duis diam est, ullamcorper sed vulputate a, congue sed neque. Vivamus nulla diam, laoreet 
            <br>eu accumsan eget, luctus ut metus. Nam id pellentesque sapien. Etiam vel nunc vulputate 
            <br>arcu viverra blandit. Sed sed pellentesque ipsum.</p>
    </article>
    <article class="gallery-main">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
        <img src="./pictures/example.png">
    </article>
    <footer>
            design Mariusz Pawlicki
            <br>mpawlickipw@gmail.com
    </footer>
</body>