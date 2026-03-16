<?php
require 'db.php';

$id = $_POST['id'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$price = $_POST['price'];
$image_filename = $_POST['image_filename'];

$stmt = $conn->prepare("UPDATE homes SET address = ?, city = ?, state = ?, price = ?, image_filename = ? WHERE id = ?");
$stmt->bind_param("sssssi", $address, $city, $state, $price, $image_filename, $id);

if ($stmt->execute()) {
  header("Location: dashboard.php?msg=Home+updated");
} else {
  echo "Error updating home.";
}
?>
