<?php

   //$flag=true;//success
   if(isset($_POST['submit']))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "website1";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
     }
    // else{
       //echo "Connected successfully";


       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $service = $_POST['service'];
       $date = $_POST['date'];
       $time = $_POST['time'];

       $current_time = time();
   
       if($name && $email && $phone && $service && $date && $time ){
         $sql = "INSERT INTO `booking_page`(`Name`, `Email`, `Phone`, `Service`, `Date`,`Time`) VALUES ('$name','$email','$phone','$service', '$date', '$time')";
         
         if (mysqli_query($conn, $sql) == false){
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
       }
       else
       echo '<div class="alert alert-danger" role="alert">
       ERROR!!! Please Insert all the fields..
       </div>';
         

    //    echo 'Name:' ;
    //    echo $_POST['name'];
    //    echo '<br>';
    //    echo 'Eamil:' ;
    //    echo $_POST['email'];
    //    echo 'Phone:' ;
    //    echo $_POST['phone'];
    //    echo 'service:' ;
    //    echo $_POST['service'];
    //    echo 'date:' ;
    //    echo $_POST['date'];
    //    echo 'time:' ;
    //    echo $_POST['time'];
       // if (mysqli_query($conn, $sql) == false){
       //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       // }
   
      mysqli_close($conn);
     }
     
?>    



<!DOCTYPE html>
<html lang="en">
   
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" href="..\resources\images\logo.png" type="image/x-icon">
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <title>(Draft_1.1)_HomePage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <style>
        table{
    border: 2px solid black;
    text-align: center;
    width: 100%;
}
th,td{
    border: 2px solid black;
    text-align: center;
    padding: 10px;

}
th:nth-child(odd)
{
    background-color: lightgrey;
    color: darkred;
    text-decoration:bold;
}
td:nth-child(even)
{
    background-color: lightgrey;
}
    </style>

</head>

<body>
  <section class="header">
      
 
  <nav class="navbar first-navbar navbar-expand-lg navbar-dark bg-dark double-nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RAJSHAHI BIKE WASH POINT</a>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item">
          <a class="nav-link" style="cursor:pointer"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
        </li>
</ul>
    </div>
  </nav>



<nav class="navbar sticky-top navbar-expand-lg navbar-light double-nav">

<div class="collapse navbar-collapse">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.html">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="book_online.php">Book Online</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="services.php">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>

  </ul>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>
</nav>
    
  </section>



  

<div class="container text-center mt-5 mb-5">
    <h3>Your appointment has been confirmed</h3>
    <table class="text-center mt-5">
        <tr class="mt-2">
            <th><h4>Name: </h4</th>
            <td><h4><?php echo $_POST['name'];?></h4></td>
        </tr>
        <tr mt-3>
            <th><h4>Email: </h4></th>
            <td><h4><?php echo $_POST['email'];?></h4></td>
        </tr>
        <tr>
            <th><h4>Phone: </h4></th>
            <td><h4><?php echo $_POST['phone'];?></h4></td>
        </tr>
        <tr>
            <th><h4>Service: </h4></th>
            <td><h4><?php echo $_POST['service'];?></h4></td>
        </tr>
        <tr>
            <th><h4>Date: </h4></th>
            <td><h4><?php echo $_POST['date'];?></h4></td>
        </tr>
        <tr>
            <th><h4>Time: </h4></th>
            <td><h4><?php echo $_POST['time'];?></h4></td>
        </tr>
        <tr>
            <th><h4>Issue Date and Time: </h4></th>
            <td><h4><?php echo date('m-d-Y ', $current_time);
            echo date('h:i:s',$current_time + 14400);?></h4></td>
        </tr>
        <tr>
            <th><h4>Total Amount: </h4></th>
            <td><h4><?php echo '';?></h4></td>
        </tr>
    </table>
    <h3 class="mt-5">Please arrive at our shop with your bike at the specified time.</h3>

</div>

 

   
</section>
  <footer class="clearfix mt-5">
    <span style="color: rgb(245, 230, 240);">&copy;All rights reserved by <strong
        style="color:rgb(241, 18, 167);">"HELLO WORLD"</strong></span>
    <div class="social-icon">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>