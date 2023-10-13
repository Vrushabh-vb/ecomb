<?php require 'dbconnect.php' ?>
<?php require 'navbar.php' ?>

<?php
require 'dbconnect.php'; // Make sure to include your database connection script

if (isset($_GET['product_id'])) {
  $productID = $_GET['product_id'];

  $sql = "SELECT * FROM cards WHERE pid = $productID";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    // Display the product details here, e.g., using HTML
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <!-- Add your head content here -->
      <title>
        <?php echo $product['title']; ?> Details
      </title>
      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <!-- <link rel="stylesheet" href="./css/style.css" /> -->
      <!-- <link rel="stylesheet" href="./css/utils.css" /> -->
      <link rel="shortcut icon" href="./img/cart.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    </head>

    <body>

      <section class="h-100 h-custom" style="background-color: #0000;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="cards card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Product Details</h1>
                          <h6 class="mb-0 text-muted">1 items</h6>
                        </div>
                        <hr class="my-4">

                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img src="./images/<?php echo $product['img']; ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Shirt</h6>
                            <h3 class="text-black mb-0">
                              <?php echo $product['title']; ?>
                            </h3>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>

                            <input id="qty" min="1" max="10" name="quantity" value="1" type="number" class="form-control form-control-sm my-2" />

                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h4 class="mb-0">₹
                              <?php echo $product['price']; ?>
                            </h4>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>

                        <hr class="my-4">

                        <div class="pt-5">
                          <h6 class="mb-0"><a href="./index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="text-uppercase">items 1</h5>
                          <h5>Rs 132.00</h5>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase">Total price</h5>
                          <h5 id="total-price">Rs
                            <?php echo $product['price']; ?>
                          </h5>
                        </div>


                        <!-- <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Checkout</button> -->
                        <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" id="checkout-button">
                          Checkout
                        </button>
                        <img id="loading-gif" src="./img/checkout.gif" alt="Loading" style="display: none; width:150px">


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
        const quantityInput = document.getElementById("qty");
        const totalPriceElement = document.getElementById("total-price");
        const productPrice = <?php echo $product['price']; ?>;

        quantityInput.addEventListener("input", function() {
          const quantity = parseInt(quantityInput.value);
          const total = productPrice * quantity;
          totalPriceElement.textContent = `Rs ${total.toFixed(2)}`;
        });
      </script>
      <script>
        const checkoutButton = document.getElementById("checkout-button");
        const loadingGif = document.getElementById("loading-gif");

        checkoutButton.addEventListener("click", function() {
          // Hide the Checkout button
          checkoutButton.style.display = "none";

          // Display the loading GIF
          loadingGif.style.display = "block";

          setTimeout(function() {
            // After a delay, you can redirect the user to the checkout page or perform any other action
            window.location.href = "checkout.php";
          }, 2000); // Adjust the delay time as needed
        });
      </script>


      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
  } else {
    echo "Product not found.";
  }
} else {
  echo "Product ID not provided.";
}
