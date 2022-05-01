<?php
  include 'connection.php';
  $sql = "SELECT * FROM Allergy";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    if(isset($_GET["AllergyID"])){
    if ($row['AllergyID'] == $_GET['AllergyID']) {
    echo '<form class="form-inline m-2" action="update.php" method="POST">';
    echo '<td><input type="text" class = "form-control" name="AllergyType" value="'.$row['AllergyType'].'"></td>';
    echo '<td><input type="text" class = "form-control" name="AllergyName" value="'.$row['AllergyName'].'"></td>';
    echo '<td><input type="text" class = "form-control" name="AllergySymptoms" value="'.$row['AllergySymptoms'].'"></td>';
    echo '<td><input type="text" class = "form-control" name="AllergyDescription" value="'.$row['AllergyDescription'].'"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
    echo '<input type="hidden" name="AllergyID" value="' .$row['AllergyID'].'">';
    echo '</form>';
      }
    }
    else {
      echo "<tr>";
      echo "<td>" . $row['AllergyType'] . "</td>";
      echo "<td>" . $row['AllergyName'] . "</td>";
      echo "<td>" . $row['AllergySymptoms'] . "</td>";
      echo "<td>" . $row['AllergyDescription'] . "</td>";
      echo '<td><a class="btn btn-primary" href="Backend.php?AllergyID=' . $row['AllergyID'] . '" role="button">Update</a></td>';
      echo '<td><a class="btn btn-primary" href="delete.php?AllergyID=' . $row['AllergyID'] . '" role="button">Delete</a></td>';
      echo "</tr>";
    }
  }
    $conn->close();
?>
