<?php
session_start();
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['items'], $data['total'], $data['address'])) {
    die("❌ البيانات غير كاملة أو غير موجودة.");
}

// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voice_store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// تجهيز البيانات
$items = json_encode($data['items'], JSON_UNESCAPED_UNICODE);
$total = $data['total'];
$address = $conn->real_escape_string($data['address']);

// إدخال الطلب
$sql = "INSERT INTO orders (items, total, address) VALUES ('$items', '$total', '$address')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['cart'] = []; // نفرغ السلة
    echo "✅ تم حفظ الطلب في قاعدة البيانات.";
} else {
    echo "❌ خطأ: " . $conn->error;
}

$conn->close();
?>


