<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Photo Gallery</title> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>

<div class="bd-example">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/nature2.jpg" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
      <h3>Nature</h3>
      <p class="custom-text">In the gallery of existence, nature paints its masterpieces with hues of tranquility, 
        weaving a tapestry of serenity that whispers tales of timeless beauty.</p>
    </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="images/architecture6.webp" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
      <h3>Architecture</h3>
      <p class="custom-text"> Behold the symphony of lines and curves, where architectural marvels stand as 
        monuments to human ingenuity, echoing the echoes of history and aspirations of the soul.</p>
      </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="images/travel1.webp" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
      <h5>Travel</h5>
      <p class="custom-text">Embark on a visual odyssey through the kaleidoscope of destinations, where each frame captures
         the essence of wanderlust and unveils the hidden gems of our boundless world.</p>
      </div>
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature6.webp" class="img-fluid pb-3">
        <h5>Denali National Park, Alaska</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature3.webp " class="img-fluid pb-3">
        <h5>Greenland</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature4.webp" class="img-fluid pb-3">
        <h5>The Amazon</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature5.webp" class="img-fluid pb-3">
        <h5>Angel Falls, Venezuela</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature7.webp" class="img-fluid pb-3">
        <h5>Avenue of the Baobabs, Madagascar</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature8.webp" class="img-fluid pb-3">
        <h5>Cliffs of Moher, Ireland</h5>
    </div>
    </div>
    </div>
</section>
</a>

<a id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Architecture</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture1.webp " class="img-fluid pb-3">
        <h5>Indian Institute of Technology in Mumbai</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture2.webp " class="img-fluid pb-3">
        <h5>Tata Consultancy Services in Indore (Madhya Pradesh)</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture7.webp" class="img-fluid pb-3">
        <h5>New Campus, Indian Institute of Management, Ahmedabad</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture4.webp" class="img-fluid pb-3">
        <h5>Sangath in Ahmedabad</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture3.webp" class="img-fluid pb-3">
        <h5>Visitor Center at CSMVS in Mumbai</h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture5.jpg" class="img-fluid pb-3">
        <h5>British Council in New Delhi</h5>
    </div>
    </div>
    </div>
</section>
</a>

<a id="travel">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Travel</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel2.jpg" class="img-fluid pb-3" >
        <h4>The Colosseum, Rome</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel3.jpg" class="img-fluid pb-3">
        <h4>Great Wall of China</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel4.jpg" class="img-fluid pb-3">
        <h4>Petra, Jordan</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel5.jpg" class="img-fluid pb-3">
        <h4>Mount Fuji</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel6.jpg" class="img-fluid pb-3">
        <h4>Alhambra, Spain</h4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/ttravel7.jpg" class="img-fluid pb-3">
        <h4>Buckingham Palace, London</h4>
    </div>
    </div>
    </div>
</section>
</a>

<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone No:</label>
                <input type="text" name="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>            
        </form>
    </div>
</section>
</a>

<a id="about">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Vanshika Raj</h3><br>
        <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature and Travel photography.
            I am a full time freelancer with an experience of 5 years.</b></p>
    </div>
</section>
</a>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cndjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>