<?php
$conn = mysqli_connect('localhost', 'root', '', 'padstowchildcarecentre');
if(!$conn){
  echo'Connection error: ' . mysqli_connect_error();
}
?>
