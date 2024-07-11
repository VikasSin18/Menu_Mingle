<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booked</title>
  

<link rel="stylesheet" href="./global.css">
    <link rel="stylesheet" href="./component.css">

</head>
<body>

<div  style=" width:1000px; padding-top: 15%; padding-left:25%;">
<form class="card" action="adminlogincheck.php" method="post">
  <div class="card-text">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="card-text">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
  </div>
  
 <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</body>