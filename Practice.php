<?php
try {
$conn = new PDO('mysql:host=localhost;dbname=padstowchildcarecentre', 'Nick', 'test123');
	echo "connection successful";
}
catch (PDOException $s)
{
	echo $s->getMessage();
	exit();
}


$sql = "SELECT * FROM Allergy ORDER BY AllergyID desc";
$result = $conn ->query($sql);
  echo "<table>";
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
  $allergyID = $row['AllergyID'];
  $allergyType = $row['AllergyType'];
  $allergyName = $row['AllergyName'];
  $allergySymptoms = $row['AllergySymptoms'];
  $allergyDescription = $row['AllergyDescription'];
  echo "<tr><td>".$allergyID."</td><td>".$allergyType."</td><td>".$allergyName."</td></td>".$allergySymtpoms."</td></td>".$allergyDescription."</td></tr>";
  echo "</table>";
}

$teacherID = $_POST['Teacehrid'];
$teacherName = $_POST['Teachername'];
$teacherDOB = $_POST['Teacherdob'];
$sql = "SELECT * FROM Teacher WHERE TeacherID = '$teacherID'";
$result = $conn ->query($sql);
if (!mysql_num_rows($result))
{
  echo "Teacher ID does not exist";
  exit();
}
else{
  $sql = "UPDATE allergy SET Teachername='$teacherName', Teacherdob='$teacherDOB' WHERE Teacherid=$teacherID";
  $stmt = $conn->query($sql);
}

while ($row = $result->fetch(PDO::FETCH_ASSOC)){
  $teacherID = $row['Teacehrid'];
  $teacherName = $row['Teachername'];
  $teacherDOB = $row['Teacherdob'];
  echo "<tr><td>".$teacherID."</td><td>".$teacherName."</td><td>".$teacherDOB."</td></tr>";
  echo "</table>";
}
?>
