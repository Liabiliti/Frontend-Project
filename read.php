
<?php

  include 'connection.php';


  $pagename = basename($_SERVER['PHP_SELF']);

  switch ($pagename){
    case "GuardianChild.php":
      $infoArray = array("GuardianChild","GuardianChildID","GuardianID","ChildID");
      break;
    case "GuardianPayment.php":
      $infoArray = array("GuardianPayment","GuardianPaymentID","GuardianID","PaymentID");
      break;
    case "DoctorChild.php":
      $infoArray = array("DoctorChild","DoctorChildID","DoctorID","ChildID");
      break;
    case "ChildMedicine.php":
      $infoArray = array("ChildMedicine","ChildMedicineID","ChildID","MedicineID","Dosage");
      break;
    case "ChildAllergy.php":
      $infoArray = array("ChildAllergy","ChildAllergyID","ChildID","AllergyID","Severity");
      break;
    case "Medicine.php":
      $infoArray = array("Medicine","MedicineID","MedicineType","MedicineName","MedicineDescription");
      break;
    case "Allergy.php":
      $infoArray = array("Allergy","AllergyID","AllergyType","AllergyName","AllergySymptoms","AllergyDescription");
      break;
    case "StaffChild.php":
      $infoArray = array("StaffChild","StaffChildID","StaffID","ChildID1","ChildID2","ChildID3","ChildID4");
      break;
    case "Child.php":
      $infoArray = array("Child","ChildID","ChildFirstName","ChildLastName","ChildDOB","ChildGender");
      break;
    case "Payment.php":
      $infoArray = array("Payment","PaymentID","PaymentDueDate","AmountDue","PaymentPaidDate","ActualAmountPaid");
      break;
    case "Doctor.php":
      $infoArray = array("Doctor","DoctorID","DoctorLastName","DoctorStreetAddress","DoctorTown","DoctorState","DoctorPostcode","DoctorPhoneNumber");
      break;
    case "Staff.php":
      $infoArray = array("Staff","StaffID","StaffFirstName","StaffLastName","StaffGender","StaffHomePhone","StaffWorkPhone","StaffonDuty");
      break;
    case "Guardian.php":
    $infoArray = array("Guardian","GuardianID","GuardianFirstName","GuardianLastName","GuardianStreetAddress","GuardianTown","GuardianState","GuardianPostcode", "GuardianPhoneNumber");
      break;
  }
  $_SESSION['CRUDdata'] = $infoArray;
  if (count($infoArray) == 4){
  $sql = "SELECT * FROM $infoArray[0]";
  $result = $conn->query($sql);
  echo "<tr>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    if(isset($_GET[$infoArray[1]])){
    if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
    echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
    echo '</form>';
      }
    }
    else {
      echo "<tr>";
      echo "<td>" . $row[$infoArray[2]] . "</td>";
      echo "<td>" . $row[$infoArray[3]] . "</td>";
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
      echo "</tr>";
    }
  }
    $conn->close();
  }
  else if (count($infoArray) == 5){
  $sql = "SELECT * FROM $infoArray[0]";
  $result = $conn->query($sql);
  echo "<tr>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[4]</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    if(isset($_GET[$infoArray[1]])){
    if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
    echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[4].'" value="'.$row[$infoArray[4]].'"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
    echo '</form>';
      }
    }
    else {
      echo "<tr>";
      echo "<td>" . $row[$infoArray[2]] . "</td>";
      echo "<td>" . $row[$infoArray[3]] . "</td>";
      echo "<td>" . $row[$infoArray[4]] . "</td>";
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
      echo "</tr>";
    }
  }
    $conn->close();
}
  else if (count($infoArray) == 6){
  $sql = "SELECT * FROM $infoArray[0]";
  $result = $conn->query($sql);
  echo "<tr>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[4]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[5]</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    if(isset($_GET[$infoArray[1]])){
    if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
    echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[4].'" value="'.$row[$infoArray[4]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[5].'" value="'.$row[$infoArray[5]].'"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
    echo '</form>';
      }
    }
    else {
      echo "<tr>";
      echo "<td>" . $row[$infoArray[2]] . "</td>";
      echo "<td>" . $row[$infoArray[3]] . "</td>";
      echo "<td>" . $row[$infoArray[4]] . "</td>";
      echo "<td>" . $row[$infoArray[5]] . "</td>";
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
      echo "</tr>";
    }
  }
    $conn->close();
}
else if (count($infoArray) == 7){
$sql = "SELECT * FROM $infoArray[0]";
$result = $conn->query($sql);
echo "<tr>";
echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[4]</th>";
echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[5]</th>";
echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[6]</th>";
echo "</tr>";
while($row = $result->fetch_assoc()) {
  if(isset($_GET[$infoArray[1]])){
  if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
  echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
  echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
  echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
  echo '<td><input type="text" class = "form-control" name="'.$infoArray[4].'" value="'.$row[$infoArray[4]].'"></td>';
  echo '<td><input type="text" class = "form-control" name="'.$infoArray[5].'" value="'.$row[$infoArray[5]].'"></td>';
  echo '<td><input type="text" class = "form-control" name="'.$infoArray[6].'" value="'.$row[$infoArray[6]].'"></td>';
  echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
  echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
  echo '</form>';
    }
  }
  else {
    echo "<tr>";
    echo "<td>" . $row[$infoArray[2]] . "</td>";
    echo "<td>" . $row[$infoArray[3]] . "</td>";
    echo "<td>" . $row[$infoArray[4]] . "</td>";
    echo "<td>" . $row[$infoArray[5]] . "</td>";
    echo "<td>" . $row[$infoArray[6]] . "</td>";
    echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
    echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
}
  $conn->close();
}
else if (count($infoArray) == 8){
  $sql = "SELECT * FROM $infoArray[0]";
  $result = $conn->query($sql);
  echo "<tr>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[4]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[5]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[6]</th>";
  echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[7]</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    if(isset($_GET[$infoArray[1]])){
    if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
    echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[4].'" value="'.$row[$infoArray[4]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[5].'" value="'.$row[$infoArray[5]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[6].'" value="'.$row[$infoArray[6]].'"></td>';
    echo '<td><input type="text" class = "form-control" name="'.$infoArray[7].'" value="'.$row[$infoArray[7]].'"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
    echo '</form>';
      }
    }
    else {
      echo "<tr>";
      echo "<td>" . $row[$infoArray[2]] . "</td>";
      echo "<td>" . $row[$infoArray[3]] . "</td>";
      echo "<td>" . $row[$infoArray[4]] . "</td>";
      echo "<td>" . $row[$infoArray[5]] . "</td>";
      echo "<td>" . $row[$infoArray[6]] . "</td>";
      echo "<td>" . $row[$infoArray[7]] . "</td>";
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
      echo "</tr>";
    }
  }
  $conn->close();
}
  else if (count($infoArray) == 9){
    $sql = "SELECT * FROM $infoArray[0]";
    $result = $conn->query($sql);
    echo "<tr>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[2]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[3]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[4]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[5]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[6]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[7]</th>";
    echo "<th style='font-size: 15px!important; font-family: Biko, sans-serif!important;'>$infoArray[8]</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
      if(isset($_GET[$infoArray[1]])){
      if ($row[$infoArray[1]] == $_GET[$infoArray[1]]) {
      echo '<form class="form-inline m-2" style="background-color: red;" action="update.php" method="POST">';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[2].'" value="'.$row[$infoArray[2]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[3].'" value="'.$row[$infoArray[3]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[4].'" value="'.$row[$infoArray[4]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[5].'" value="'.$row[$infoArray[5]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[6].'" value="'.$row[$infoArray[6]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[7].'" value="'.$row[$infoArray[7]].'"></td>';
      echo '<td><input type="text" class = "form-control" name="'.$infoArray[8].'" value="'.$row[$infoArray[8]].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="'.$infoArray[1].'" value="' .$row[$infoArray[1]].'">';
      echo '</form>';
        }
      }
      else {
        echo "<tr>";
        echo "<td>" . $row[$infoArray[2]] . "</td>";
        echo "<td>" . $row[$infoArray[3]] . "</td>";
        echo "<td>" . $row[$infoArray[4]] . "</td>";
        echo "<td>" . $row[$infoArray[5]] . "</td>";
        echo "<td>" . $row[$infoArray[6]] . "</td>";
        echo "<td>" . $row[$infoArray[7]] . "</td>";
        echo "<td>" . $row[$infoArray[8]] . "</td>";
        echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="'.$pagename.'?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Update</a></td>';
        echo '<td><a class="btn btn-primary" style="background-color:#A7BE39!important; font-size: 12px; border: none;" href="delete.php?'.$infoArray[1].'=' . $row[$infoArray[1]] . '" role="button">Delete</a></td>';
        echo "</tr>";
      }
    }
    $conn->close();
}


?>
