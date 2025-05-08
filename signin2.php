<?php
session_start(); 
$email = $_POST['email'];
$password = $_POST['password'];
$conn = new mysqli("localhost", "root", "", "store"); 
$sql = "SELECT * FROM users WHERE LOWER(email) = LOWER(?)"; 
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // confirm password
    if (password_verify($password, $user['password'])) {  // confirm password
        $_SESSION['user_id'] = $user['id']; // store id 
        $_SESSION['user_role'] = $user['role']; // role store

        
        if ($user['role'] == 'company') {
            header("Location: company_dashboard.php"); // go company
        } else {
            header("Location: home.php"); // go home
        }
    } else {
        echo "<script>
                alert('Wrong password!');
                window.location.href = 'singin.html'; // back to signin
              </script>";
    }
} else {
    echo "<script>
            alert('No user found.');
            window.location.href = 'singin.html'; // back to signin
          </script>";
}

?>
