<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>(Draft_1.1)_HomePage</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="..\resources\images\logo.png" type="image/x-icon">
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  
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
</div>
</nav>
    

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div> -->
          <img src="img/istockphoto-1255613189-612x612.jpg" class="d-block w-100" alt="Not Found">
        </div>
         
       
        <div class="carousel-item">
          <img src="img/istockphoto-1071058578-612x612.jpg" class="d-block w-100" alt="Not Found">
        </div>
        <div class="carousel-item">
          <img src="img/bubble-foam-cleaning-motorcycle-wash-WDYEG0.jpg" class="d-block w-100" alt="Not Found">
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

    </div>
    <div class="div1 container">
      <h1> RAJSHAHI BIKE WASH POINT</h1>
      <h2> An easy and efficient solution for bike washing</h2>
    </div>
  </section>

  



  <!-- <section id="explore_destination mb-5">
    <h2 class="text-center mt-5">Services</h2>
    <div class="container mt-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-4">
    <div class="card">
      <div class="card-header">
         Featured
       </div>
        <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
       </div>
      </div>
</div>
</div>
    </div>
  </section> -->

  <section id="explore_destination mb-5">
    <h2 class="text-center mt-5">Our Services</h2>
    <div class="container mt-5">
      <div class="row">
        <div class="col-4">
          <div class="card">
          <img src="img/foam_wash.png" class="card-img-top" alt="foam_wash">
             <div class="card-body">
              <h5 class="card-title">Foam Wash And Bike Polish</h5>
              <h6 class="card-text">Tk. 160</h6>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-success">Under body cleaning</li>
                  <li class="list-group-item list-group-item-success">Plastic parts cleaning</li>
                  <li class="list-group-item list-group-item-success">Foam exterior wash</li>
              </ul>
              <br>
              <a href="book_online.php" class="btn btn-primary">Book Online</a>
             </div>
            </div>
         </div>
        <div class="col-4">
        <div class="card">
        <img src="img/wash-the-motorcycle-2.jpg" class="card-img-top" alt="shampoo wash">
            <div class="card-body">
              <h5 class="card-title">Shampoo Wash</h5>
              <h6 class="card-text">Tk. 120</h6>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-success">Under Body Cleaning</li>
                  <li class="list-group-item list-group-item-success">Shampoo exterior wash</li>
                  <li class="list-group-item list-group-item-success">Mud pad cleaning</li>
              </ul>
              <br>
              <a href="book_online.php" class="btn btn-primary">Book Online</a>
            </div>
          </div>
        </div>
        <div class="col-4">
        <div class="card">
        <img src="img/polish.png" class="card-img-top" alt="polish">

            <div class="card-body">
              <h5 class="card-title">Bike Polish</h5>
              <h6 class="card-text">Tk. 30</h6>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-success">Compound rubbin</li>
                  <li class="list-group-item list-group-item-success">Make it shine again</li>
                  <li class="list-group-item list-group-item-success">Scratch removal</li>
              </ul>
              <br>
              <a href="book_online.php" class="btn btn-primary">Book Online</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-center mt-5">
  <a href="services.php" class="btn btn-primary">Find Out More...</a>
    <h2 class="text-center mt-5 mb-5">How to book a service in online</h2>
    <div class="container">
      <div class="row">
        <div class="col-3">
        <div class="text-dark">
          <!-- <div class="text-dark">
            <a href="img_coxBazar.html"><img src="images/kazi-nazrul-islam-fahad-OreJ2gkj6T8-unsplash.jpg"
                class="gallery" alt="Error"></a>
            <h5 class="title text-center">Step-1</h5>
          </div> -->
                  <div class="card" style="width: 18rem;height: 20rem;">
          <div class="card-body">
          <i class="fas fa-user-circle"></i>
            <h5 class="card-title text-center mt-4">Step-1</h5>
            <p class="card-text mt-5">Enter your email and password to sign in.</p>
          </div>
            </div>
    </div>
        </div>

        <div class="col-3">
          <div class="text-dark">
          <div class="card" style="width: 18rem;height: 20rem;">
          <div class="card-body">
          <i class="fas fa-motorcycle"></i>
            <h5 class="card-title text-center mt-4">Step-2</h5>
            <p class="card-text mt-5">Choose The service you need. From basic wash services to full detailing and paint protection, we have a service to match your needs</p>
          </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="text-dark">
          <div class="card" style="width: 18rem;height: 20rem;">
          <div class="card-body">
          <i class="fas fa-calendar-check"></i>
            <h5 class="card-title text-center mt-4">Step-3</h5>
            <p class="card-text mt-5">Pick a date & time. Sites are open 7 days per week.</p>
          </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="text-dark">
          <div class="card" style="width: 18rem;height: 20rem;">
          <div class="card-body">
          <i class="fas fa-clipboard-list"></i>
            <h5 class="card-title text-center mt-4">Step-4</h5>
            <p class="card-text mt-5">Finish the booking process and drive in on time. Our staff will be ready and waiting to make your bike look like new again</p>
          </div>
            </div>
          </div>
        </div>
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