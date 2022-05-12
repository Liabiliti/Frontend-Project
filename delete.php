<?php
  session_start();
  include 'connection.php';
  $CRUDArray = $_SESSION['CRUDdata'];

  $varID = $_GET[$CRUDArray[1]];

  $sql = "DELETE FROM $CRUDArray[0] WHERE $CRUDArray[1] = $varID";
echo $sql;
  $conn->query($sql);
  $conn->close();
  header("location: $CRUDArray[0].php");
?>
