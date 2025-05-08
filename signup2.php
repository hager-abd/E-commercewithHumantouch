<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "store"; //name database

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// form information
$fullname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$role = $_POST['role']; // (user or company)

// check password
if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    exit;
}

// seacure password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// check if email is exits
$check = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email already exists!";
    exit;
}


$sql = "INSERT INTO users (fullname, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $email, $hashed_password, $role);

if ($stmt->execute()) {
    echo "<script>
            alert('Signup successful!');
            window.location.href = 'index.html';
          </script>";
} else {
    echo "<script>
            alert('Error: " . $stmt->error . "');
          </script>";
}

$stmt->close();
$conn->close();
?>

