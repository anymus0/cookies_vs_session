<?php
include './../includes/db.php';
session_start();

// input process
$todoTitle = mysqli_real_escape_string($conn, $_POST['todoTitle']);
if ($todoTitle == "") {
  header('location: ./../todoPage.php?error=missingVariables');
  exit();
}

// query current user's ID
$userName = $_SESSION['userName'];
$userIDQuery = "SELECT users.id FROM users WHERE users.userName = '$userName';";
$userIDResult = mysqli_query($conn, $userIDQuery);
$userIdRow = mysqli_fetch_assoc($userIDResult);
$userId = $userIdRow['id'];

$todoAddSql = "INSERT INTO todos(title, createdAt, createdBy) VALUES ('$todoTitle', '".date("Y-m-d")."', '$userId');";
$todoAddResult = mysqli_query($conn, $todoAddSql);

if ($todoAddResult == false) {
  header('location: ./../todoPage.php?newTodoSuccess=false');
  exit();
}

header('location: ./../todoPage.php?newTodoSuccess=true');
exit();