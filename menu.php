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
        <h1>ZAPOZNAJ SIĘ Z NASZĄ OFERTĄ</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <br>Curabitur sagittis justo vel tortor finibus, eget aliquam sapien dignissim. 
            <br>Sed sed libero vel orci auctor sagittis sit amet et ligula. Praesent eu dui a dui aucto rhoncus. 
            <br>Duis diam est, ullamcorper sed vulputate a, congue sed neque. Vivamus nulla diam, laoreet 
            <br>eu accumsan eget, luctus ut metus. Nam id pellentesque sapien. Etiam vel nunc vulputate 
            <br>arcu viverra blandit. Sed sed pellentesque ipsum.</p>
    </article>
    <div class="menu-main">
        <article class="art-1">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>DANIE NR 1</h1>
                <p>Opis dania nr 1</p>
            </div>
        </article>
        <article class="art-2">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>DANIE NR 2</h1>
                <p>Opis dania nr 2</p>
            </div>
        </article>
        <article class="art-1">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>DANIE NR 3</h1>
                <p>Opis dania nr 3</p>
            </div>
        </article>
        <article class="art-2">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>DANIE NR 4</h1>
                <p>Opis dania nr 4</p>
            </div>
        </article>
        <article class="art-1">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>DANIE NR 5</h1>
                <p>Opis dania nr 5</p>
            </div>
        </article>
    </div>
    <footer>
            design Mariusz Pawlicki
            <br>mpawlickipw@gmail.com
    </footer>
</body>