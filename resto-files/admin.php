<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booked</title>
  
  <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/932bce75f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./global.css">
    <link rel="stylesheet" href="./component.css">
     <link rel="stylesheet" href="./reset.css">




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
                                            <li><a href="book.html" class="btn primary-btn">BOOK TABLE</a></li>

                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
      
    
    
  </nav>


 
<section id ="admin">
	<div class="container">

	
  		<h3 class="table">
			 <Table></Table></h3>
		
	</div>
</section>	
  
  <?php


$servername = "localhost";
$username = "root";
$password = "";

$database = "minipro";

// Create a connection
$con = mysqli_connect($servername,
  $username, $password, $database);


 // SQL query
 $result = mysqli_query($con,"SELECT * FROM booking ORDER BY reserving_time");
 if (!$result) {
     die("Query to show fields from table failed");
 }

 $fields_num = mysqli_num_fields($result);

 echo "<center><p style='font-size:2rem;font-weight:bolder''>Details of BOOKING</p>";

 echo "<center><table border='2' class='table' style='background-color: var(--lightGreen-1);'><tr><center>";
 // printing table headers
 for($i=0; $i<$fields_num; $i++)
 {
     $field = mysqli_fetch_field($result);
     echo "<th scope='col' class='fw-bolder'>{$field->name}</th>";
 }
 echo "</tr>\n";
 // printing table rows
 while($row = mysqli_fetch_row($result))
 {
     echo "<tr>";


     foreach($row as $cell)
         echo "<td>$cell</td>";

     echo "</tr>\n";
 }

?>


