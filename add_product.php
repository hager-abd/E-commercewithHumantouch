<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'company') {
    header("Location: signin.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <style>
    body {
      background-color:#f60;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 400px;
    }
    input, button {
      width: 90%;
      margin-top: 15px;
      padding: 10px;
      font-size: 16px;
    }
    button {
      background-color: #f60;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<form action="save_product.php" method="POST" enctype="multipart/form-data">
  <h2>Add New Product</h2>
  <input type="text" name="name" placeholder="Product Name" required>
  <input type="number" name="price" placeholder="Price" step="0.01" required>
  <input type="file" name="image" accept="image/*" required>
  <button type="submit">Save Product</button>
</form>

</body>
</html>
