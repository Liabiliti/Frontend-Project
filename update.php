<?php
session_start();
include 'connection.php';
$CRUDArray = $_SESSION['CRUDdata'];

$varID = $_POST[$CRUDArray[1]];
$var1 = $_POST[$CRUDArray[2]];
$var2 = $_POST[$CRUDArray[3]];
$var3 = $_POST[$CRUDArray[4]];
$var4 = $_POST[$CRUDArray[5]];
$var5 = $_POST[$CRUDArray[6]];
$var6 = $_POST[$CRUDArray[7]];
$var7 = $_POST[$CRUDArray[8]];

if(count($CRUDArray) == 4){
$sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2' WHERE $CRUDArray[1]=$varID";
echo $sql;
$result = $conn->query($sql);
$conn->close();
}
if(count($CRUDArray) == 5){
$sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2', $CRUDArray[4]='$var3' WHERE $CRUDArray[1]=$varID";
echo $sql;
$result = $conn->query($sql);
$conn->close();
}
else if(count($CRUDArray) == 6){
$sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2', $CRUDArray[4]='$var3', $CRUDArray[5]='$var4' WHERE $CRUDArray[1]=$varID";
echo $sql;
$result = $conn->query($sql);
$conn->close();
}
else if(count($CRUDArray) == 7){
  $sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2', $CRUDArray[4]='$var3', $CRUDArray[5]='$var4', $CRUDArray[6]='$var5' WHERE $CRUDArray[1]=$varID";
  echo $sql;
  $result = $conn->query($sql);
  $conn->close();
}
else if(count($CRUDArray) == 8){
  $sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2', $CRUDArray[4]='$var3', $CRUDArray[5]='$var4', $CRUDArray[6]='$var5', $CRUDArray[7]='$var6' WHERE $CRUDArray[1]=$varID";
  echo $sql;
  $result = $conn->query($sql);
  $conn->close();
}
else if(count($CRUDArray) == 9){
  $sql = "UPDATE $CRUDArray[0] SET $CRUDArray[2]='$var1', $CRUDArray[3]='$var2', $CRUDArray[4]='$var3', $CRUDArray[5]='$var4', $CRUDArray[6]='$var5', $CRUDArray[7]='$var6', $CRUDArray[8]='$var7' WHERE $CRUDArray[1]=$varID";
  echo $sql;
  $result = $conn->query($sql);
  $conn->close();
}
header("location: $CRUDArray[0].php");

?>
