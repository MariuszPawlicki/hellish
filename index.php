<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Klub Hellish Paradise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php require 'functions.php' ?>
    
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
    <div class="logo-lg">
        <img src="./pictures/main-logo-bg.png">
    </div>
    <main>
        <article class="art-1">
            <h1>O HELLISH PARADISE</h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <br>Curabitur sagittis justo vel tortor finibus, eget aliquam sapien dignissim. 
                <br>Sed sed libero vel orci auctor sagittis sit amet et ligula. Praesent eu dui a dui aucto rhoncus. 
                <br>Duis diam est, ullamcorper sed vulputate a, congue sed neque. Vivamus nulla diam, laoreet 
                <br>eu accumsan eget, luctus ut metus. Nam id pellentesque sapien. Etiam vel nunc vulputate 
                <br>arcu viverra blandit. Sed sed pellentesque ipsum.</p>
        </article>
        <article class="art-2">
            <div class="left-box">
                <img src="./pictures/gallery-thumbnail.png">
            </div>
            <div class="right-box">
                <h1>ZOBACZ NASZE WNĘTRZE</h1>
                <a href="gallery.php" class="main-button">WYŚWIETL GALERIĘ</a>
            </div>
        </article>
        <article class="art-3">
            <div class="left-box">
                <h1>POZNAJ NASZE MENU</h1>
                <a href="menu.php" class="main-button">WYŚWIETL OFERTĘ</a>
            </div>
            <div class="right-box">
                <img src="./pictures/menu-thumbnail.png">
            </div>
        </article>
        <article class="art-4">
            <div class="tag">
                <h1>ZAREZERWUJ LOŻĘ</h1>
                <a href="reservation.php" class="main-button">REZERWUJ</a>
            </div>
            <img class="img1 "src="./pictures/osier-bg.png">
            <img class="img2 "src="./pictures/osier-bg-sm.png">
        </article>
        <article class="art-5">
            <div class="left-box">
                <h1>KONTAKT I LOKALIZACJA</h1>
                <p>ul. Puławska 30A 05-500 Piaseczno
                   <br>W miejscu dawnego klubu Endorfina
                   <br>tel: 123 456 789</p>
            </div>
            <div class="right-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d613.0255432455284!2d21.025923438838966!3d52.07786988993433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x986551640a263d74!2sEndorfina%20Music%20Club!5e0!3m2!1spl!2spl!4v1586077238525!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </article>
        <article class="art-6">
            <h1>PODZIEL SIĘ SWOJĄ OPINIĄ</h1>
            <form class="comment-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input class="name-form" type="text" name="name" placeholder="Przedstaw się..."><br>
                <textarea class="content-form" name="comment" rows="5" placeholder="Napisz komentarz..."></textarea><br>
                <input type="submit">
            </form>
            <?php 
            if(isset($_POST["name"])) { $name = ($_POST["name"]); $name = test_input($name);}
            if(isset($_POST["comment"])) { $comment = ($_POST["comment"]); $comment = test_input($comment);} 
            if((isset($_POST["name"])) && (isset($_POST["comment"]))) {
                if(($name != "") &&  ($comment != "")) {
                    add_comment("localhost", "root", "", "hellish", $name, $comment);
                }
            }
            get_comments("localhost", "root", "", "hellish");
            ?>
        </article>
        <footer>
            design Mariusz Pawlicki
            <br>mpawlickipw@gmail.com
        </footer>
    </main>
</body>
</html>