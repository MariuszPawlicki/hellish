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
        <h1>ZAREZERWUJ LOŻĘ ONLINE</h1>
    </article>
    <div class="res-main">
        <article class="art-1">
            <div class="left-box">
                <img src="./pictures/example.png">
            </div>
            <div class="right-box">
                <h1>NASZE LOŻE</h1>
                <p>Tutaj troche o loży, na ile osób itp...</p>
                <p>300 pln</p>
            </div>
        </article>
        <article class="art-3">
        <?php
                require 'functions.php';
                if((isset($_POST["name"])) && (isset($_POST["phone"])) && (isset($_POST["date"]))) {
                    $name = $_POST["name"];
                    $phone = $_POST["phone"];
                    $date = $_POST["date"];
                    if(($name != "") &&  ($phone != "") && ($date != "")) {
                        add_reservation("localhost", "root", "", "hellish", $name, $phone, $date);
                        delete_free_date("localhost", "root", "", "hellish", $date);
                        echo "Formularz rezerwacji wysłany. Potwierdzenie rezerwacji wyślemy smsem w ciągu 24 godzin<br><br>";
                        //mail($email, $subject,"{$name} {$phone} {$date}");
                    } else {
                        echo "<p>Podaj kompletne dane<p>";
                    }
                }
            ?>
            <form class="comment-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input class="name-form" type="text" name="name" placeholder="Podaj nazwisko..."><br>
                <input class="number" type="number" name="phone" placeholder="Podaj numer telefonu..."><br>
                Wybierz wolny dzień: <br><br>
                <select class="dates" name="date">
                    <?php
                    give_free_dates("localhost", "root", "", "hellish");
                    ?>
                </select>
                <input type="submit">
            </form>
        </article>
    </div>
    <footer class="footer2">
            design Mariusz Pawlicki
            <br>mpawlickipw@gmail.com
    </footer>
</body>