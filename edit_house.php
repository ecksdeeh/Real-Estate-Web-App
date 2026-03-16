<?php
require 'db.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM homes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$home = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Home</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <main class="form-container">
    <h1>Edit Home</h1>
    <form action="update_home.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $home['id']; ?>" />
      
      <label for="address">Address</label>
      <input type="text" name="address" value="<?php echo htmlspecialchars($home['address']); ?>" required>

      <label for="city">City</label>
      <input type="text" name="city" value="<?php echo htmlspecialchars($home['city']); ?>" required>

      <label for="state">State</label>
      <input type="text" name="state" value="<?php echo htmlspecialchars($home['state']); ?>" required>

      <label for="price">Price</label>
      <input type="number" name="price" value="<?php echo htmlspecialchars($home['price']); ?>" required>

      <label for="image_filename">Image Filename</label>
      <input type="text" name="image_filename" value="<?php echo htmlspecialchars($home['image_filename']); ?>" required>

      <button type="submit">Update</button>
    </form>
  </main>
</body>
</html>
