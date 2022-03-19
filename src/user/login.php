<?php

// input process
if (!isset($_POST['userName']) || !isset($_POST['password'])) {
  header('location: ./index.php?error=missingVariables');
}
else {
  
}