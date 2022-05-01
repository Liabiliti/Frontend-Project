<?php
$conn = mysqli_connect('localhost', 'Nick', 'test123', 'padstowchildcarecentre');
if(!$conn){
  echo'Connection error: ' . mysqli_connect_error();
}
?>
