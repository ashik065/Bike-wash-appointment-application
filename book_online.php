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
  <div class="container text-center">
    <p>
      To book a service please fill up the form with all the required informations.
    </p>
  </div>


  <section id="Contact_Form" class="text-white py-5">
    <div class="container">

    <div class="row">
        <div class="col-3">
        </div>

        <div class="col-6">
          <h3 class="text-center text-dark">Book Service Online</h3>
          <hr>

          <form action="contact.php" method="post" class="text-dark">
            <div class="form-group mb-2">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control mt-2" placeholder="Enter Your Name" id="name" required>
            </div>
            <div class="form-group mb-2">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control mt-2" placeholder="Enter Your Email" id="email" required>
            </div>
            <div class="form-group mb-3">
              <label for="phone">Phone</label>
              <input type="number" name="phone" id="phone" class="form-control mt-2" placeholder="Phone Number">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="input-group mb-2">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Choose a service...</option>
                    <option value="1">Foam Wash And Bike Polish</option>
                    <option value="2">Shampoo Wash</option>
                    <option value="3">Bike Polish</option>
                    <option value="4">Quick Bucket Wash</option>
                    <option value="5">Petrol Wash</option>
                    <option value="6">Water Wash</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Services</label>
                </div>

                <!-- <div class="form-group mb-2"> -->
                <div class="input-group date mb-2" id="datepicker">    
                    <label for="date mb-2">Date</label>
                        <input type="text" class="form-control" id="date"/>
                        <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                        </span>
                    </div>

                    <div class="input-group mb-2">
                <select class="form-select" id="inputGroupSelect02">
                    <option selected>Choose a time slot...</option>
                    <option value="1">(10-11)AM</option>
                    <option value="2">(11-12)PM</option>
                    <option value="6">(12-1)PM</option>
                    <option value="4">(2-3)PM</option>
                    <option value="5">(3-4)PM</option>
                    <option value="6">(4-5)PM</option>
                    <option value="6">(5-6)PM</option>
                    <option value="6">(6-7)PM</option>
                    <option value="6">(7-8)PM</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Time</label>
                </div>    

            <div class="d-grid gap-2 text-center">

            <button type="reset" class="btn btn-danger">Reset</button>
            <button  type="submit" name="submit" class="btn btn-danger">Submit</button>
</div>
          </form>
         

        
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