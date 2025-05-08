<?php
session_start();
// لو مفيش منتجات في السلة
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
    echo "<h2>سلة المشتريات فاضية!</h2>";
    exit;
}

// استلام بيانات العميل
$name = htmlspecialchars($_POST['name']);
$address = htmlspecialchars($_POST['address']);
$phone = htmlspecialchars($_POST['phone']);

// استخراج الطلبات من السيشن
$cart = $_SESSION['cart'];
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'];
}


unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Order Confirmed</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color:#f60;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .confirmation {
      background: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      max-width: 600px;
      width: 100%;
      text-align: center;
    }

    h1 {
      color: #f60;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.1em;
      margin: 10px 0;
    }

    .thanks {
      margin-top: 30px;
      font-weight: bold;
      font-size: 1.2em;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="confirmation">
    <h1>✅ Order Confirmed!</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Total Paid:</strong> EGP <?php echo number_format($total, 2); ?></p>

    <div class="thanks">
      Thank you for your order! ❤️<br>
      We'll deliver your products soon.
    </div>
    <h1><a href="home.php"  style="color: #f60"> Countinue shopping go to home❤️</a> </h1>
  </div>
  

</body>
</html>
