<?php
  include 'connection.php';
  $allergyID = $_POST['AllergyID'];
  $allergyType = $_POST['AllergyType'];
  $allergyName = $_POST['AllergyName'];
  $allergySymptoms = $_POST['AllergySymptoms'];
  $allergyDescription = $_POST['AllergyDescription'];
  $sql = "UPDATE allergy SET AllergyType='$allergyType', AllergyName='$allergyName', AllergySymptoms='$allergySymptoms', AllergyDescription='$allergyDescription' WHERE AllergyID=$allergyID";
  $result = $conn->query($sql);
  $conn->close();
  header("location: Backend.php");
?>
