<?php
  include 'connection.php';

  /*if (isset($_POST['submit'])){*/
  header("Access-Control-Expose-Headers: Location");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT Password FROM login WHERE Username = '$username'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
      if ($password == $row['Password']){
        header("location:Allergy.php");
      }
      else {
        header("location:Contactus.php?error=Invalid password!");

      }
    }
    else {
      header("location:Contactus.php?error=Invalid username or password");
  }

?>
