<?php

include 'connection.php';
$CRUDArray = $_SESSION['CRUDdata'];
echo $CRUDArray[0];
switch ($CRUDArray[0]){
  case "DoctorChild":
  $infoArray = array("Doctor","Child","DoctorID","ChildID");
  break;
}
$sql = "SELECT $infoArray[3] FROM `$infoArray[1]`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo "<option value='".$row[$infoArray[3]]."'>".$row[$infoArray[3]]."</option>";
}
?>
