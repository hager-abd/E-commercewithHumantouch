<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.html");
    exit();
}

$conn = new mysqli("localhost", "root", "", "store");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Products</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f60;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .product-container {
      position: relative;
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      text-align: center;
      width: 300px;
      margin: 15px;
      overflow: hidden;
    }

    .product-container img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .overlay {
      position: absolute;
      top: 20px;
      left: 20px;
      right: 20px;
      bottom: 80px;
      border-radius: 10px;
      display: flex;
      justify-content: flex-end; /*position icon */
      align-items: flex-start;
      padding: 10px;
      opacity: 0;
      transition: opacity 0.3s ease;
      background: rgba(255, 255, 255, 0.7);
    }

    .product-container:hover .overlay {
      opacity: 1;
    }

    .overlay-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      margin-right: 10px;
      margin-top: 10px;
    }

    .overlay-content span {
      font-size: 30px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .overlay-content span:hover {
      color: orange;
    }

    .product-name {
      font-size: 22px;
      font-weight: bold;
      color: #333;
    }

    .product-price {
      font-size: 18px;
      color: #ff6600;
      margin-top: 8px;
    }

    .home-button {
      position: fixed;
      top: 2px;
      right: 50px;
      background-color: #fff;
      color: orange;
      padding: 10px 20px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      transition: background 0.3s, color 0.3s;
    }

    .home-button:hover {
      background-color: orange;
      color: white;
    }
    /*style icon */
    .overlay-content i {
     font-size: 30px;
      color: #ff6600;
      transition: color 0.3s ease;
    }

   .overlay-content i:hover {
     color: #ff3300; 
    }

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

<a href="index.html" class="home-button">Go Home</a>

<?php if ($result && $result->num_rows > 0): ?>
  <?php while ($product = $result->fetch_assoc()): ?>
    <div class="product-container">
      <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="Product Image">
      <div class="overlay">
        <div class="overlay-content">
          <a href="favorites.php?name=<?php echo urlencode($product['name']); ?>&image=<?php echo urlencode($product['image_path']); ?>">
            <i class="fa-regular fa-heart"></i>
          </a>
          <a href="cart1.php?name=<?php echo urlencode($product['name']); ?>&price=<?php echo urlencode($product['price']); ?>&image=<?php echo urlencode($product['image_path']); ?>">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
        </div>
      </div>
      <div class="product-name"><?php echo htmlspecialchars($product['name']); ?></div>
      <div class="product-price">USD <?php echo number_format($product['price'], 2); ?></div>
    </div>
  <?php endwhile; ?>
<?php else: ?>
  <p style="color:white; font-size:22px;">No products found.</p>
<?php endif; ?>


</body>
</html>

