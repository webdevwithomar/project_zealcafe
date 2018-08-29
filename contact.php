<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <title>ZealCafe | Contact</title>
</head>

<body>
  <header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #fadeaf;">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" alt="Logo" width="150" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="vending.html">Machines</a>
                <a class="dropdown-item" href="tea.html">Tea</a>
                <a class="dropdown-item" href="coffee.html">Coffee</a>
                <a class="dropdown-item" href="cup.html">Cups</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#reviews">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header> <!-- End of Main Header -->

  <main>
    <div class="container">
      <h1 class="my-5">ZealCafe | Revive Always</h1>
      <section class="mb-5">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-md-6">
            <h3 class="my-4">Corporate Office</h3>
            <address>
              Sattara Centre (Victory Tower)<br>
              30/A VIP Road<br>
              Naya Paltan, Dhaka<br>
              Bangladesh
            </address>
            <p><strong>Phone:</strong> <a href="tel:+8801914496951">+88 01914-496951</a></p>
            <p><strong>Email:</strong> <a href="mailto:zealcafebd@gmail.com">zealcafebd@gmail.com</a></p>
          </div>
          <div class="col-md-6">
            <h3 class="my-4">Sylimpex Enterprise</h3>
            <address>
              Sattara Centre<br>
              30/A Naya Paltan, Dhaka<br>
              Bangladesh
            </address>
            <p><strong>Fax:</strong> <a href="#">880-2-58316510</a></p>
            <p><strong>Website:</strong> <a href="http://zealcafebd.com/www.Sylimpex.com" target="_blank">www.sylimpex.com</a></p>
          </div>
        </div>  
          <h2 class="my-4">Send a Message</h2>
          <form action="mailer.php" method="post" id="form">
            <?php
            if ($_GET['success'] == 1) {
              echo '<div class="alert alert-success" role="alert">
                Your message has been sent!
              </div>';
            }
            if ($_GET['success'] == -1) {
              echo '<div class="alert alert-danger" role="alert">
                Oops! Something went wrong.
              </div>';
            }
            ?>
            <div class="form-group">
              <label for="customerName">Name</label>
              <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="customerEmail">Email</label>
              <input type="email" class="form-control" id="customerEmail" aria-describedby="emailHelp" name="customerEmail" placeholder="Enter your email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="customerTel">Phone</label>
              <input type="tel" name="customerTel" id="customerTel" required placeholder="Enter your phone no." class="form-control">
            </div>
            <div class="form-group">
              <label for="customerText">Message</label>
              <textarea class="form-control" name="customerText" id="customerText" cols="30" rows="10" placeholder="Enter your message here"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
          
      </section> <!-- End of About Section -->
    </div> <!-- End of Container -->
  </main> <!-- End of Main -->

  <footer>
    <div class="container">
      <div class="social_icons">
        <p class="h3">Follow Us On:</p>
        <a href="https://www.facebook.com/Zealcafebangladesh" target="_blank" class="fb_icon"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/zealcafebd" target="_blank" class="twitter_icon"><i class="fab fa-twitter"></i></a>
      </div>
    </div><!-- End of Container -->
    <div class="footer_notes">
      <div class="container">
        <p class="copy_text">&copy; 2018 Zealcafe, All Rights Reserved</p>
        <p><a href="https://github.com/webdevwithomar">webdevwithomar</a></p>
      </div><!-- End of Container -->
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>