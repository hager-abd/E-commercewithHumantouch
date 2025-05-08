<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'company') {
    header("Location: signin.html");
    exit();
}

$conn = new mysqli("localhost", "root", "", "store");

$name = $_POST['name'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id'];

// رفع الصورة
$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_path = "images/" . basename($image_name);

// اتأكد إن مجلد images موجود
if (!is_dir("images")) {
    mkdir("images");
}

move_uploaded_file($image_tmp, $image_path);

// إدخال المنتج في قاعدة البيانات
$sql = "INSERT INTO products (name, price, image_path, user_id) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsi", $name, $price, $image_path, $user_id);
$stmt->execute();

header("Location: company_dashboard.php");
exit();
?>
