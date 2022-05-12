<?php
session_start();
include 'connection.php';

$CRUDArray = $_SESSION['CRUDdata'];

$var1 = $_GET[$CRUDArray[2]];
$var2 = $_GET[$CRUDArray[3]];
$var3 = $_GET[$CRUDArray[4]];
$var4 = $_GET[$CRUDArray[5]];
$var5 = $_GET[$CRUDArray[6]];
$var6 = $_GET[$CRUDArray[7]];
$var7 = $_GET[$CRUDArray[8]];

if(count($CRUDArray) == 4){
$sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3]) values ('$var1', '$var2')";
$conn->query($sql);
$conn->close();
}
if(count($CRUDArray) == 5){
$sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3], $CRUDArray[4]) values ('$var1', '$var2', '$var3')";
$conn->query($sql);
$conn->close();
}
else if(count($CRUDArray) == 6){
$sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3], $CRUDArray[4], $CRUDArray[5]) values ('$var1', '$var2', '$var3', '$var4')";
$conn->query($sql);
$conn->close();
}
else if(count($CRUDArray) == 7){
  $sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3], $CRUDArray[4], $CRUDArray[5], $CRUDArray[6]) values ('$var1', '$var2', '$var3', '$var4', '$var5')";
  $conn->query($sql);
  $conn->close();
}
else if(count($CRUDArray) == 8){
  $sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3], $CRUDArray[4], $CRUDArray[5], $CRUDArray[6], $CRUDArray[7]) values ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6')";
  $conn->query($sql);
  $conn->close();
}
else if(count($CRUDArray) == 9){
  $sql = "insert into $CRUDArray[0] ($CRUDArray[2] , $CRUDArray[3], $CRUDArray[4], $CRUDArray[5], $CRUDArray[6], $CRUDArray[7], $CRUDArray[8]) values ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7')";
  $conn->query($sql);
  $conn->close();
}
header("location: $CRUDArray[0].php");

?>
