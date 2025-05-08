<?php
session_start();
if (isset($_POST['index']) && isset($_POST['quantity'])) {
    $index = $_POST['index'];
    $quantity = max(1, intval($_POST['quantity']));
    $_SESSION['cart'][$index]['quantity'] = $quantity;
}
header('Location: cart1.php'); 
exit;
