<?php
session_start();
  include 'connection.php';
  if(isset($_SESSION["page"])){
  $page = $_SESSION["page"];
  
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
        header("location:$page?error=Invalid password!");

      }
    }
    else {
      header("location:$page?error=Invalid username or password");
  }
}

?>
