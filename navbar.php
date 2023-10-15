<head> <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta name="google-signin-client_id" content="787245060481-4padi0c9g2l1pnbie52fmpfdpo43209i.apps.googleusercontent.com" />
  <meta name="google-signin-cookiepolicy" content="single_host_origin" />
  <meta name="google-signin-scope" content="profile email" />
  <meta name="google-site-verification" content="-eak5o6MaC8dcrUhendmbMxTX-Q7FRNdoXiHJpGY1es" />
  <meta property="al:web:should_fallback" content="true" />
  <meta name="apple-itunes-app" content="app-id=907394059, app-argument=https://www.myntra.com/" />

  <link rel="shortcut icon" href="./img/cart.png" type="image/x-icon">
  <style>.header {
  position: sticky;
  top: 0;
  background-color: white;
  z-index: 9999;
}
</style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/utils.css" />
</head>
<header class="header mw-80 m-auto sticky-lg-top" style=" background-color: white;" >
  <nav class="navbar navbar-expand-lg navbar-light" id="navb" style=" position: sticky;
    top: 0;
    z-index: 9999;
">
    <link rel="shortcut icon" href="./img/cart.png" type="image/x-icon">
    <div class="container-fluid ">
      <img src="./img/logo.png" alt="" style="width: 8rem;" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand ms-auto ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allproducts.php">ALL PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trendings">TRENDINGS</a>
          </li>
        </ul>
        <!-- search -->
        <div class="search d-flex">
          <form method="GET" id="search-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for cards..." name="search" id="search-input">
              <div class="input-group-append">
                <button class="btn btn-dark searchbtn" type="submit">Search</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Account dropdown -->
        <div class="dropdown" style="display: flex; align-items: center;">
          <span class="navbar-text">
            <a href="./cart.php"><img class="carts" src="./img/cart.png" alt="" style="width: 1.5rem; margin-right: -2rem;"></a>
            <img class="carts" src="./img/notification.png" alt="" style="width: 1.5rem; margin-right: -2rem;">
            <img class="carts" src="./img/account.png" alt="" style="width: 1.5rem; margin-right: -0.5rem;">
          </span>
        </div>

        <div class="account d-flex">
          <?php
          // Check if the user is logged in
          session_start();
          if (isset($_SESSION['username'])) {
            echo '<a href="#" class="btn"><b>' . $_SESSION['username'] . '</b>' . '</a>';
            echo '<a class="btn" href="logout.php">Log Out</a>';
          } else {
            echo '<a href="./login.php" class="btn" style="margin-left: 2rem;">Login</a>';
            // echo '<a href="signup.php" class="btn">Sign-Up</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>