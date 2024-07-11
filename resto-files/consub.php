<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "minipro";

// Create a connection
$mysqli = mysqli_connect($servername, $username, $password, $database);
echo '<pre>', print_r($_POST, 1) , '</pre>';

if($mysqli) {
  echo "success";
} else {
  die("Error". mysqli_connect_error());
}

$showAlert = false;
$showError = false;
$exists = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $mysqli->real_escape_string($_POST['first_name']);
  $lname = $mysqli->real_escape_string($_POST['last_name']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $ph_no = $mysqli->real_escape_string($_POST['phone']);
  $comment22 = $mysqli->real_escape_string($_POST['text']);

  $sql = "INSERT INTO contact (Firstname, Lastname, email, phone, comment)
          VALUES ('$fname', '$lname', '$email', '$ph_no',  '$comment22' )";

  $result = mysqli_query($mysqli, $sql);

  if ($result){
    $showAlert = true;
  }
}

$mysqli->close();

?>
