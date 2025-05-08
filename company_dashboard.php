<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'company') {
    header("Location: signin.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "", "store");

$sql = "SELECT * FROM products WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Company Dashboard</title>
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
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      text-align: center;
      width: 300px;
      margin: 15px;
    }

    .product-container img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
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
  </style>
</head>
<body>
<a href="add_product.php" style="position: fixed; top: 20px; right: 20px; background-color: #fff; color: orange; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: bold; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
  + Add Product
</a>
<a href="index.html" style="position: fixed; top: 70px; right: 20px; background-color: #fff; color: orange; padding: 10px 20px; border-radius: 10px; text-decoration: none; font-weight: bold; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
  Go Home
</a>

<?php while ($product = $result->fetch_assoc()): ?>
  <div class="product-container">
    <img src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="Product Image">
    <div class="product-name"><?php echo htmlspecialchars($product['name']); ?></div>
    <div class="product-price">USD <?php echo number_format($product['price'], 2); ?></div>
  </div>
<?php endwhile; ?>

</body>
</html>

