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
     //else{
    //   echo "Connected successfully";
    // }
     

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if($name && $email && $phone && $message ){
      $sql = "INSERT INTO `contact_page`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$name','$email',$phone,'$message')";
      
      if (mysqli_query($conn, $sql) == false){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    else
    echo '<div class="alert alert-danger" role="alert">
    ERROR!!! Please Insert all the fields..
    </div>';
    
    
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
</head>

<body>
  <section class="header">
      
 
  <nav class="navbar first-navbar navbar-expand-lg navbar-dark bg-dark double-nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RAJSHAHI BIKE WASH POINT</a>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item">
          <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
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

  <section class="des_initial">
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mt-5">Welcome to beautiful Bangladesh</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container mt-5 text-center">
    <p>
      To contact with us please fill up the form and send your message to us. We will respond to you as soon as we
      receive them.
    </p>
  </div>


  <section id="Contact_Form" class="text-white py-5">
    <div class="container">

      <div class="row">
        <div class="col-6">
          <h3 class="text-center text-dark">Get In Touch</h3>
          <hr>

          <form action="contact.php" method="post" class="text-dark">
            <div class="form-group mb-2">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control mt-2" placeholder="Enter Your Name" id="name" required>
            </div>
            <div class="form-group mb-2">
              <label for="email">Email</label>
              <input type="email" pattern="[a-z0-9]+@gmail+\.com" name="email" class="form-control mt-2" placeholder="Enter Your Email" id="email" required>
            </div>
            <div class="form-group mb-2">
              <label for="phone">Phone</label>
              <input type="number" pattern="([01]|\+88)?\d{11}" name="phone" id="phone" class="form-control mt-2" placeholder="Phone Number">
            </div>
            <div class="form-group mb-3">
              <label for="message">Message</label>
              <textarea class="form-control mt-2" name="message" placeholder="Leave a message here"
                id="floatingTextarea" rows="7" required></textarea>
            </div>
            <div class="d-grid gap-2 text-center">

            <button type="reset" class="btn btn-danger">Reset</button>
            <button  type="submit" name="submit" class="btn btn-danger">Submit</button>
</div>
          </form>
         

        
        </div>
       

        <div class="col-6 text-dark text-center mb-5">
          <h3 class="mb-5"> Contact Us</h3>
          <div class="text-center mt-5"><br>
          <div class="card text mt-5" style="width: 100%;">
            <div class="card-header">
              Email: raj_bike_wash@gmail.com
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Phone:01314559303</li>
            </ul>
          </div>
          </div>
         
        </div>
        
        
        
      
      </div>
    </div>
  </section>


  



  

   
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