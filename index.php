<?php
session_start();
include("../../conn.php");
if (isset($_SESSION["login"])) {
  header('Location: ./dashboard');
}
else {
header("Location: ./auth/");
}
?>