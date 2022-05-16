<?php
  session_start();
  include 'connection.php';
  $CRUDArray = $_SESSION['CRUDdata'];

  $varID = $_GET[$CRUDArray[1]];
try{
  $sql = "DELETE FROM $CRUDArray[0] WHERE $CRUDArray[1] = $varID";
  $conn->query($sql);
  $conn->close();
  header("location: $CRUDArray[0].php");
}
catch (mysqli_sql_exception $e) {
    header("location: $CRUDArray[0].php?error=Cant delete, deleted entry is on a child table");
}

?>
