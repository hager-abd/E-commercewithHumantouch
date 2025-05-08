<?php
session_start();

//if need to try with some iteam use here
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['image'])) {
  $product = [
      'name' => $_GET['name'],
      'price' => $_GET['price'],
      'image' => $_GET['image'],
      'quantity' => 1
      
  ];
  
  // Add to cart
  $_SESSION['cart'][] = $product;
}



// show cart 
$cart = $_SESSION['cart'];
$total = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cart Summary</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color:#f60;
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .container {
      background-color: #fff;
      border-radius: 20px;
      padding: 30px 40px;
      max-width: 800px;
      width: 100%;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 30px;
      animation: fadeIn 1s ease forwards;
      opacity: 0;
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
      from {
        opacity: 0;
        transform: translateY(20px);
      }
    }

    h2 {
      font-size: 1.8em;
      color: #f60;
      margin-bottom: 20px;
      border-left: 5px solid  #f60;
      padding-left: 10px;
    }

    .cart-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .cart-item img {
      width: 100px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }

    .summary {
      border-top: 1px solid #eee;
      padding-top: 15px;
      margin-top: 25px;
      font-size: 1.1em;
    }

    .checkout-btn {
      background-color:  #f60;
      color: #fff;
      padding: 14px;
      width: 100%;
      border: none;
      cursor: pointer;
      border-radius: 8px;
      font-size: 1.1em;
      font-weight: bold;
      letter-spacing: 1px;
      margin-top: 15px;
      box-shadow: 0 5px 15px rgba(214, 40, 40, 0.3);
      transition: background-color 0.3s, transform 0.2s;
    }

    .checkout-btn:hover {
      background-color:  #f60;
      transform: scale(1.03);
    }

    input {
      width: 100%;
      padding: 14px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 7px;
      font-size: 1em;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #f60;
      outline: none;
      box-shadow: 0 0 5px rgba(214, 40, 40, 0.3);
    }

    .payment-icons img {
      width: 60px;
      margin-right: 10px;
      transition: transform 0.3s ease;
    }

    .payment-icons img:hover {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }

      .cart-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .cart-item img {
        margin-top: 10px;
        width: 80px;
      }

      .payment-icons img {
        width: 45px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Shopping Cart (<?php echo count($cart); ?>)</h2>
    <h1><a href=" javascript:history.back()"  style="color: #f60;margin-left: 180px;">countinue shopping</a> <a href="home.php"  style="color: #f60;margin-left: 30px;">Home</a></h1>
   
    <?php foreach ($cart as $index => $item): ?>
      <div class="cart-item">
    <img src="<?= $item['image'] ?>" alt="product ">
    <h4><?= htmlspecialchars($item['name']) ?></h4>
    <p>Price: <?= $item['price'] ?> USD</p>

    <!--   form iteam update -->
    <form method="post" action="update_cart.php" style="display:flex; gap:10px; align-items:center;">
      <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1" style="width:60px;">
      <input type="hidden" name="index" value="<?= $index ?>">
      <button type="submit">Update</button>
    </form>

    <!-- delete form  -->
    <form method="post" action="remove_from_cart.php" style="margin-top:10px;">
      <input type="hidden" name="index" value="<?= $index ?>">
      <button type="submit" style="background-color:red;color:#fff;padding:5px 10px;border:none;border-radius:5px;">🗑️ Delete</button>
    </form>
</div>
<?php $total += $item['price'] * $item['quantity']; ?>

    <?php endforeach;?>


    <div class="summary">
      <p><strong>Subtotal:</strong> USD <?php echo number_format($total, 2); ?></p>
      <p><strong>Shipping:</strong> USD 0.00</p>
      <p><strong>Total:</strong> <strong>USD <?php echo number_format($total, 2); ?></strong></p>
    </div>
    <hr>
    

    <div class="customer-info">
      <h2>Customer Info</h2>
      <form action="confirm_order.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="address" placeholder="Shipping Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <button class="checkout-btn" type="submit">Complete Order (<?php echo count($cart); ?>)</button>
      </form>
      <p><strong>Payment:</strong></p>
      <div class="payment-icons">
      <img src="img/payment-1.png" alt="">
                <img src="img/payment-2.png" alt="">
                <img src="img/payment-3.png" alt="">
                <img src="img/payment-4.png" alt="">
      </div>
    </div>
  </div>





</body>
</html>