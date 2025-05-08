<?php
session_start();

// إذا كانت بيانات الـ POST موجودة
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // قراءة البيانات المرسلة من الـ JavaScript
    $data = json_decode(file_get_contents('php://input'), true);

    // إضافة المنتج إلى الـ cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // إضافة المنتج إلى الـ cart
    $_SESSION['cart'][] = [
        'name' => $data['name'],
        'price' => $data['price'],
        'image' => $data['image']
    ];

    // الرد بتنسيق JSON
    echo json_encode(['status' => 'success']);
}
?>
