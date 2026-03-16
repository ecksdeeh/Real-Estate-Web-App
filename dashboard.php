<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.html");
  exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT first_name, last_name, username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$homes_result = $conn->query("
  SELECT id, address, city, state, zip_code, price, image_filename,
         bedrooms, bathrooms, year_built, home_size_sqft, lot_size_sqft
  FROM homes
  LIMIT 6
");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="dashboard-header">
    <div>
      <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
      <p>Your email: <?php echo htmlspecialchars($user['email']); ?></p>
    </div>
    <div class="dashboard-buttons">
      <a href="update.php" class="button">Update Profile</a>
      <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
        <button type="submit" class="button delete-btn">Delete Account</button>
      </form>
      <form action="logout.php" method="POST">
        <button type="submit" class="button">Log Out</button>
      </form>
    </div>
  </header>

  <h2>Featured Homes</h2>
  <div class="homes-grid">
    <?php while ($home = $homes_result->fetch_assoc()): ?>
      <div class="home-card">
        <img src="images/<?php echo htmlspecialchars($home['image_filename']); ?>" alt="Home image" class="home-image">
        <h3><?php echo htmlspecialchars($home['address']); ?></h3>
        <p>Location: <?php echo htmlspecialchars($home['city'] . ', ' . $home['state']); ?></p>
        <p>Price: $<?php echo number_format($home['price']); ?></p>
        <button class="details-btn" onclick="toggleDetails(this)">Details</button>
      
      <div class="home-details hidden">
        <p><strong>Bedrooms:</strong> <?php echo htmlspecialchars($home['bedrooms']); ?></p>
        <p><strong>Bathrooms:</strong> <?php echo htmlspecialchars($home['bathrooms']); ?></p>
        <p><strong>Square Feet:</strong> <?php echo htmlspecialchars($home['home_size_sqft']); ?></p>
        <p><strong>Year Built:</strong> <?php echo htmlspecialchars($home['year_built']); ?></p>
      </div>
        <a href="edit_house.php?id=<?php echo $home['id']; ?>" class="button">Edit</a>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="homes-grid">
  <?php while ($home = $homes_result->fetch_assoc()): ?>
    <a href="home.php?id=<?php echo $home['id']; ?>" class="home-link">
      <div class="home-card">
        <img src="images/<?php echo htmlspecialchars($home['image_filename']); ?>" alt="Home image" class="home-image">
        <h3><?php echo htmlspecialchars($home['address']); ?></h3>
        <p>Location: <?php echo htmlspecialchars($home['city'] . ', ' . $home['state']); ?></p>
        <p>Price: $<?php echo number_format($home['price']); ?></p>
      </div>
    </a>
    
  <?php endwhile; ?>
</div>
<script>
  function toggleDetails(button) {
    const details = button.nextElementSibling;
    details.classList.toggle('hidden');
    button.textContent = details.classList.contains('hidden') ? 'Details' : 'Hide';
  }
</script>
</body>
</html>

</body>
</html>
