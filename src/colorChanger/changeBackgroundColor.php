<?php
include './../includes/db.php';
session_start();

// input process
$bgColor = mysqli_real_escape_string($conn, $_POST['bgColor']);
if ($bgColor == "") {
  header('location: ./../colorChangerPage.php?error=missingVariables');
  exit();
}

if (isset($_POST['isCookie'])) {
  unset($_SESSION['bgColor']);
  setcookie('bgColor', $bgColor, time() + (86400 * 30), '/');
  header('location: ./../colorChangerPage.php?saveColorAsCookieSuccess=true');
  exit();
} else if (isset($_POST['isSession'])) {
  setcookie('bgColor', '', 1, '/');
  $_SESSION['bgColor'] = $bgColor;
  header('location: ./../colorChangerPage.php?saveColorAsSessionSuccess=true');
  exit();
} else {
  header('location: ./../colorChangerPage.php?error=somethingWentWrong');
  exit();
}
