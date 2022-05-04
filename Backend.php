<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body{
      background:url('img1.jpg');
    }
    .container{
      position: relative;
      height: 90vh;
      background-color: white;
      top: 5vh;
    }
    .container h1{
      text-align: center;
      padding-top: 2.5vh;
    }
    .container .line{
      height: 4px;
      background-color: green;
      width
    }
    .container form label{
      left: 5vw;
    }
    .btn button{
      background-color: green !important;
    }
    .container .TableContainer{
      height: 50vh;
      /*background-color: green;*/
      border-radius: 5px;
      border: 2px green solid;

    }

  </style>
</head>
<body>
  <div class="container">
  <h1>Allergies</h1>
  <div class="line"></div>
  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="AllergyType">Allergy Type: </label>
      <input type="text" class = "form-control m-2" id="AllergyType" name="AllergyType" placeholder="Allergy Type">
      <label for="AllergyName">Allergy Type: </label>
      <input type="text" class = "form-control m-2" id="AllergyName" name="AllergyName" placeholder="Allergy Name">
      <label for="allergySymptoms">Allergy Symptoms: </label>
      <input type="text" class = "form-control m-2" id="AllergySymptoms" name="AllergySymptoms" placeholder="Allergy Symptoms">
      <label for="AllergyDescription">Allergy Description: </label>
      <input type="text" class = "form-control m-2" id="AllergyDescription" name="AllergyDescription" placeholder="Allergy Description">
      <button type="submit" class="btn btn-primary">Add</button>
  </form>
  <div class="TableContainer">
    <table class="table">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>
  </div>
  </div>
</body>
</html>
