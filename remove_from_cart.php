<?php
session_start();
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); 
}
header('Location: cart1.php');
exit;
