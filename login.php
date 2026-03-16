
<?php

session_start();
require_once 'db.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = htmlspecialchars(trim($_POST['username_or_email']));
    $password = $_POST['password'];

    if (empty($username_or_email) || empty($password)) {
        header("Location: login.html?error=Please fill in all fields");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username_or_email, $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
          
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

           
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: login.html?error=Incorrect password");
            exit();
        }
    } else {
        header("Location: login.html?error=User not found");
        exit();
    }
}
?>
