<?php
  session_start();
  include 'connection.php';
  $CRUDArray = $_SESSION['CRUDdata'];

  $varID = $_GET[$CRUDArray[1]];
try{
  $sql = "DELETE FROM $CRUDArray[0] WHERE $CRUDArray[1] = $varID";
echo $sql;
  $conn->query($sql);
  $conn->close();
  header("location: $CRUDArray[0].php");
}
catch (mysqli_sql_exception $e) {
    header("location: $CRUDArray[0].php");
    echo'<script>alert("You cannot delete this row, as it is currently within a child table, remove it from the child table and then you will be able to delete it.")</script>';

}

?>
