<?php 
 include("../../conn.php");
if (isset($_GET['id']) && isset($_GET['table'])) {
     $id = $_GET['id'];
     $table = $_GET['table'];
    $sql = "DELETE FROM $table WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

?>