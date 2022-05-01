<?php
  include 'connection.php';
  $allergyID = $_GET['AllergyID'];
  $sql = "delete from allergy where AllergyID =$allergyID";
  $conn->query($sql);
  $conn->close();
  header("location: Backend.php");
?>
