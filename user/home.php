<?php 
session_start();
if( !isset($_SESSION["login"])){
  header("Location: ../index.php");
  exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Travel whit Us.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shorcut icon" href="#">


    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      @font-face {
      font-family: 'Yu Gothic';
      src: url('fonts/YuGothic-Regular.ttf') format('truetype');
    }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body style="  background-image: url('../asset/Moon.svg');
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="" class="nav-link">Hi! <?php echo $_SESSION["nama"];
             ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/logout.php">Logut</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main >

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <div class="">
          <img src="../asset/tokyo.webp" width="100%" height="100%">
        </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="font-family: serif;">Feel Tired?.</h1>
            <p>Why You don't travel with Us.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <div class="">
          <img src="../asset/aurora2.jpg" width="100%" height="100%">
        </div>

        <div class="container">
          <div class="carousel-caption">
            <h1 style="font-family: serif;">Amazing Place.</h1>
            <p>We Have Many Place To Go.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <div class="">
          <img src="../asset/hawai.jpg" width="100%" height="100%">
        </div>

        <div class="container">
          <div class="carousel-caption text-end">
            <span><h1 style="color: black; font-family: serif;">You Can Also invit your</h1></span><span><h1 style=" font-family: serif; color: white;"> friend or your family to go together.</h1></span>
           <!--  <p style="color: black;">Some representative placeholder content for the third slide of this carousel.</p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <!-- style="background-color: #cce6ff; -->
<div class="paralax-bg" style="color: white;">
  <div class="content">
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../asset/tokyo140.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2 class="fw-normal" style="font-family: serif;">Tokyo</h2>
        <p>The best choice for those of you who want to relax while shopping and enjoy the atmosphere of a clean city and enjoy the unique local culture.</p>
        <!-- <p><a class="btn btn-secondary" href="../checkout/index.html">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../asset/aurora140.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2 class="fw-normal" style="font-family: serif;">Antartica</h2>
        <p>like aurora? maybe this is the best place that you can visit here you can enjoy the beauty of the snow plains and the beautiful aurora at night.</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../asset/hawai140.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2 class="fw-normal" style="font-family: serif;">Hawaii</h2>
        <p>The best place to enjoy the beautiful beaches and peaceful sea water you can also enjoy the beautiful underwater world here..</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="font-family: serif;">Tokyo, Japan<span>, The Modern And Triditonal City.</span></h2>
        <p class="lead">Tokyo is the administrative, cultural, financial, commercial, and educational centre of Japan and the focus of an extensive urban complex that includes Kawasaki and Yokohama. Attractions include the Imperial Palace, encircled by stone-walled moats and broad gardens, and numerous temples and shrines.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="../asset/tokyo500.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1" style="font-family: serif;">Antartica<span > The Place For See Aurora.</span></h2>
        <p class="lead">Antarctica is a desert. It does not rain or snow a lot there. When it snows, the snow does not melt and builds up over many years to make large, thick sheets of ice, called ice sheets. Antarctica is made up of lots of ice in the form of glaciers, ice shelves and icebergs</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="../asset/aurora500.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="font-family: serif;">Hawaii. <span >A Beautifull Island.</span></h2>
        <p class="lead">What is so beautiful about Hawaii?,The warm water, the plentiful reefs, fish, turtles, whales, and barracuda make the beautiful Hawaii islands a great place to spend a lot of time in the water. With all the different things Hawaii has to offer, it surely ranks as the most beautiful place on Earth.</p>
      </div>
      <div class="col-md-5">
       <!--  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
       <img src="../asset/hawai500.avif" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">
    <form method="POST" action="../proses.php">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal" style="font-family: serif; font-style: italic;">Fun Place Tour Agent</h1>
      <p class="fs-5" style="font-family: serif; font-style: italic;">Come with us to explore the beauty of the world at an economical price but still pay attention to the quality that we serve, entrust your holiday affairs to us.</p>
    </div>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="background: url(../asset/tokyo140.jpg);
      object-fit: contain; background-position: center; background-size: 100%; color: white;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b>Tokyo Trip</b></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$500<small class=" fw-light">/<i class="fas fa-user"></i></small></h1>
            <b><ul class="list-unstyled mt-3 mb-4">
              <li>3days Trip Include:</li>
              <li>Acomodation <i class="fas fa-check"></i></li>
              <li>Hotel <i class="fas fa-star"></i>3 <i class="fas fa-check"></i></</li>
              <li>Food And Drink 3x <i class="fas fa-check"></i></li>
            </ul></b>
            <input type="submit" class="w-100 btn btn-lg btn-outline-success" name="tokyo" value="Order Now!">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="background: url(../asset/aurora140.jpg);
      object-fit: contain; background-position: center; background-size: 100%; color: white;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b>Antartic Trip</b></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$1000<small class=" fw-light">/<i class="fas fa-user"></i></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <b><li>3days Trip Include:</li>
              <li>Acomodation <i class="fas fa-check"></i></li>
              <li>Lodging By The Lake <i class="fas fa-check"></i></</li>
              <li>Food And Drink 3x <i class="fas fa-check"></i></li>
            </ul></b>
            <input type="submit" class="w-100 btn btn-lg btn-outline-success" name="aurora" value="Order Now!">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="background: url(../asset/hawai140.jpeg);
      object-fit: contain; background-position: center; background-size: 100%; color: white;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><b>Hawaii Trip</b></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$700<small class=" fw-light">/<i class="fas fa-user"></i></small></h1>
            <b><ul class="list-unstyled mt-3 mb-4">
              <li>3days Trip Include:</li>
              <li>Acomodation <i class="fas fa-check"></i></li>
              <li>Resort On The Beach <i class="fas fa-check"></i></</li>
              <li>Food And Drink 3x <i class="fas fa-check"></i></li>
            </ul></b>
            <input type="submit" class="w-100 btn btn-lg btn-outline-success" name="hawai" value="Order Now!">
          </div>
        </div>
      </div>
      </div>
    </form>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  </div>
</div>


  <!-- FOOTER -->
  <footer class="container" style="color: black;">
    <p class="float-end"><a href="#" class="btn btn-lg btn-primary">Back to top</a></p>
    <p><b>&copy; 2023 UAS, 20221020015. &middot;</b></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
