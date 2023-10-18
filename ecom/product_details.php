<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Assuming you have a database connection
require 'dbconnect.php';

// Check if the 'id' query parameter is set
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Query to fetch product details by ID from the "cards" table
    $sql = "SELECT * FROM cards WHERE id = $productId";
    $result = $conn->query($sql);

    // Check if a product with the specified ID exists
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
?>
        <!-- HTML to display the product details -->
        <h1><?php echo $product['title']; ?></h1>
        <p>Price: Rs <?php echo $product['price']; ?></p>
        <!-- Add more product details as needed -->

<?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not specified.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>