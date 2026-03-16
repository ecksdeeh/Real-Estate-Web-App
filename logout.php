<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html");
exit();
?>
<form action="logout.php" method="POST">
  <button type="submit">Log Out</button>
</form>
