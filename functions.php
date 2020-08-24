<?php

$email = "mariusz.pawlicki.prywatne@gmail.com";
$subject = "Nowa Rezerwacja!";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function print_comments($res) {
  if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "<div class='comment'>". 
              "<div class='usrndate'>". 
              $row["user_name"]. " " . $row["date"]. 
              "</div>". 
              "<div class='content'>". 
              $row["content"]. 
              "</div>". 
            "</div>";
    }
  } else {
      echo "Napisz pierwszy komentarz!";
  }
}

function get_comments($servername, $username, $password, $dbname) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT user_name, date, content FROM comments";
  $result = $conn->query($sql);

  print_comments($result);

  $conn->close();
}

function add_comment($servername, $username, $password, $dbname, $user, $content) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO comments (user_name, content)
  VALUES ('$user', '$content')";

  $conn->query($sql);

  $conn->close();
}

function give_free_dates($servername, $username, $password, $dbname) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, date FROM free_dates";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<option value='". $row["date"]."'>". $row["date"]. "</option>";
    }
  } else {
    echo "Brak wolnych terminów";
  }

  $conn->close();
}

function add_reservation($servername, $username, $password, $dbname, $name, $phone, $date) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO reservations (user_name, phone, date)
  VALUES ('$name', '$phone', '$date')";

  $conn->query($sql);

  $conn->close();
}

function delete_free_date($servername, $username, $password, $dbname, $date) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id from free_dates
  WHERE date = '$date'";

  $res = $conn->query($sql);
  if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
      $id = $row["id"];
      $sql = "DELETE FROM free_dates
      WHERE id = '$id'";
      $conn->query($sql);
      break;
    }
  }

  $conn->close();
}
?>