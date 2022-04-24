<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <h1>PHP + MySql CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>

  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>


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

  </div>
</body>
</html>
