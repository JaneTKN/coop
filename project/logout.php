<?php

if (!isset($_SESSION)) {
  session_start();
}
  unset($_SESSION['username']);
  unset($_SESSION['rule']);
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }

?>
