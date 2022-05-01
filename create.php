<?php
include 'connection.php';
$allergyType = $_POST['AllergyType'];
$allergyName = $_POST['AllergyName'];
$allergySymptoms = $_POST['AllergySymptoms'];
$allergyDescription = $_POST['AllergyDescription'];
$sql = "insert into allergy (AllergyType, AllergyName, AllergySymptoms, AllergyDescription) values ('$allergyType', '$allergyName', '$allergySymptoms', '$allergyDescription')";
$conn->query($sql);
$conn->close();
header("location: Backend.php");
?>
