<?php
session_start();
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = [
    'image' => $data['image'],
    'price' => $data['price']
];

echo "تمت الإضافة";
?>

