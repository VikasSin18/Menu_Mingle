<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT | Restaurant</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./global.css">
    <link rel="stylesheet" href="./component.css">
    <link rel="stylesheet" href="./about.css">
</head>
<body>
    <!--NAV BAR-->
    <div class="nav">
        <div class="container">
            <div class="nav_wrapper">
                <a href="./index.html" class="logo">
                    <img src="./images/restaurant-logo-design-vector-10067826 (1).svg" alt="restaurant">
                </a>
                <nav>
                    <ul class="nav_list">
                        <div class="nav_list_wrapper">
                            <li><a href="./index.html"
                                class="nav_link">HOME</a></li>
                                <li><a href="./menu.html"
                                    class="nav_link">MENU</a></li>
                                    <li><a href="./about.html"
                                        class="nav_link">ABOUT</a></li>
                                        <li><a href="./contact.html"
                                            class="nav_link">CONTACT</a></li>
                                            <li><a href="./book.html" class="btn primary-btn">BOOK TABLE</a></li>

                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--END NAV-->
    
    <div class="table_book">


<?php









$servername = "localhost";
$username = "root";
$password = "";
$database = "minipro";

// Create a connection
$mysqli = mysqli_connect($servername, $username, $password, $database);

if($mysqli) {
  echo "success";
} else {
  die("Error". mysqli_connect_error());
}







if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $mysqli->real_escape_string($_POST['first_name']);
  $lname = $mysqli->real_escape_string($_POST['last_name']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $ph_no = $mysqli->real_escape_string($_POST['phone']);
  $tabletype = $mysqli->real_escape_string($_POST['table_type']);
  $date2 = $mysqli->real_escape_string($_POST['date_book']);
  $time4 = $mysqli->real_escape_string($_POST['appt']);
  $comment22 = $mysqli->real_escape_string($_POST['text']);

  
  $check="SELECT COUNT(*) as result FROM `booking` WHERE reserving_time='$time4' and tabletype='$tabletype'";

  $checkres = mysqli_query($mysqli, $check);
   $rows=mysqli_fetch_row($checkres);
  $no_rows=$rows[0];
  
  if($no_rows<2){
    $sql = "INSERT INTO booking (Firstname, Lastname, email, phone, tabletype, reserving_date, reserving_time, comment)
    VALUES ('$fname', '$lname', '$email', '$ph_no', '$tabletype', '$date2', '$time4' , '$comment22' )";

$result = mysqli_query($mysqli, $sql);
    
   echo "<center><p style='font-size:4rem;padding-top:15%;font-weight:bolder''>TABLE BOOKED....</p>";
   echo "<center><p style='font: size 2.8em;rem;padding: top 10px;;font-weight:bolder''>Thank you</p>";
  

  }
  else{
    echo "<center><p style='font-size:4rem;padding-top:15%;font-weight:bolder''>Slot is full, please try another time slot!!!!</p>";
    echo "<center><p style='font: size 2.8em;rem;padding: top 10px;;font-weight:bolder''>Thank you</p>";

  }
  
}

$mysqli->close();

?>


</div>
</html>