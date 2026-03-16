<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $new_username = htmlspecialchars(trim($_POST['username']));

    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: update.php?error=Invalid email format");
        exit();
    }

    $stmt = $conn->prepare("UPDATE users SET email = ?, username = ? WHERE id = ?");
    $stmt->bind_param("ssi", $new_email, $new_username, $user_id);
    $stmt->execute();

    $_SESSION['username'] = $new_username;

    header("Location: dashboard.php?success=Profile updated");
    exit();
}

// Fetch current user info
$stmt = $conn->prepare("SELECT email, username FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Update Profile</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <main class="form-container">
    <h1>Update Profile</h1>
    <form method="POST" action="update.php">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

      <label for="username">Username</label>
      <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

      <button type="submit">Update</button>
    </form>
    <p><a href="dashboard.php">Back to Dashboard</a></p>
  </main>
</body>
</html>
