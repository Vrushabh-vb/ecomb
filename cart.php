<!-- Add this script to your HTML file, preferably at the end of the body -->
<script>
  // Function to add a product to the cart
  function addToCart(productId) {
    // Send an AJAX request to add the product to the cart
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Handle the response from the server (e.g., show a message to the user)
        const response = xhr.responseText;
        alert(response);
      }
    };
    xhr.send('product_id=' + productId);
  }

  // Add a click event listener to all "Add to Cart" buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
      const productId = button.getAttribute('data-product-id');
      addToCart(productId);
    });
  });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
    }

    h1 {
      text-align: center;
    }

    .cart-items {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .cart-item {
      flex: 1;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      padding: 20px;
      border-radius: 5px;
    }

    .cart-item img {
      max-width: 100px;
      height: auto;
    }

    .cart-item-details {
      margin-top: 10px;
    }

    .cart-total {
      text-align: right;
      font-size: 18px;
      margin-top: 20px;
    }

    .checkout-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Shopping Cart</h1>
    <div class="cart-items">
      <div class="cart-item">
        <img src="product1.jpg" alt="Product 1">
        <div class="cart-item-details">
          <h3>Product 1</h3>
          <p>Price: $20</p>
          <p>Quantity: 2</p>
          <p>Total: $40</p>
        </div>
      </div>
      <!-- Add more cart items as needed -->
    </div>
    <div class="cart-total">
      Total: $70
    </div>
    <button class="checkout-button">Proceed to Checkout</button>
  </div>
</body>
</html>
