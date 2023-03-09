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
    <title>Checkout.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h2>Fun Place Tour Agent</h2>
      <h2><?php echo $_SESSION['kota']; ?> Series!</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill"><i class="fas fa-user"></i></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Tour Price</h6>
              <small class="text-muted">Fee for each person</small>
            </div>
            <span class="text-muted">$<?php echo $_SESSION['price']; ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Insurance</h6>
              <small class="text-muted">Insurance For safety</small>
            </div>
            <span class="text-muted">$50</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Tax</h6>
              <small class="text-muted">For immigration matters</small>
            </div>
            <span class="text-muted">$25</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo Opening</h6>
              <small>Discont opening ceremony</small>
            </div>
            <span class="text-success">−$10</span>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing Of <?php echo $_SESSION['kota']; ?> Trip.</h4>
        <hr class="my-4">
        <form method="POST" class="needs-validation" novalidate action="../proses.php">
            
            <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" name="first" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="last" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Email:</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="email" placeholder="user@email.com" required>
              <div class="invalid-feedback">
                  Please enter your email.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label">Phone Number:</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+</span>
                <input type="tel" class="form-control" name="phone" placeholder="628xxxx" required>
              <div class="invalid-feedback">
                  Please enter your Phone Number.
                </div>
              </div>
            </div>
            <div class="col-12">
              <label class="form-label">Number Of Participants:</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="number" class="form-control" name="person" placeholder="Person" required>
              <div class="invalid-feedback">
                  Fill the amount.
                </div>
              </div>
            </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="Credit card" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" value="Debit card" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="PayPal" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <hr class="my-4">

          <input class="w-100 btn btn-primary btn-lg" type="submit" name="pesan" value="Continue to checkout">
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <b><p class="mb-1">&copy; UAS 20221020015</p></b>
    <b><ul class="list-inline">
      <li class="list-inline-item">Teknik Informatika</li>
      <li class="list-inline-item">1</li>
      <li class="list-inline-item">Semester1</li>
    </ul></b>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
