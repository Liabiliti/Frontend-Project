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
    .container 		{
      font-family: Biko, sans-serif;
      height: 90vh;
      top: 5vh;
      width: 90vw;
      background: white;
      border-radius: 5px;
    }
    .container h1{
      text-align: center;
      padding-top: 30px;
      color: black;

    }
    .TableContainer{
      height: 35%;
      width: 100%;
      background-color: white;
      padding: 3vw;
      margin-top: 10px;
      border-radius: 5px;
      border:1px solid #ddd;
    }
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        min-height:100vh;
        display:grid;
        place-content:center;
        color:#aaa;
        font-family: Biko, san-serif;
    }
    form{
        width: 100%;
        max-width:2000px;
        border:1px solid #ddd;
        padding:3vw;
        display:flex;
        flex-direction:column;
        border-radius:5px;
        height: 50%;
    }

    label{
        margin-bottom:15px;
        position:relative;
        border-bottom:1px solid #ddd;
    }
    input{
        width:100%;
        padding:10px 0px;
        margin-top:10px;
        border:none;
        outline:none;
    }
    select{
        width:100%;
        padding:10px 0px;
        margin-top:10px;
        border:none;
        outline:none;
        font-size: 0.825em;
        color: #aaa;
        font-family: Biko, sans-serif;

    }
    input::placeholder{
        opacity:0;

    }
    select::placeholder{
        opacity:0;

    }
    span{
        position:absolute;
        top:0;
        left:0;
        transform:translateY(30px);
        font-size:0.825em;
        transition-duration:300ms;
    }
    button{
        padding:10px 0px;
        margin-top:20px;
        background:#A7BE39;
        color:#fff;
        border: none;
        cursor:pointer;
        border-radius:5px;
        width: 70px;
        height: 40px;
        margin: auto;
        font-size: 12px;
        filter: brightness(95%);
      }
      button:hover{
        filter: brightness(110%);
      }

    label:focus-within > span,
    input:not(:placeholder-shown) + span{
        color:#A7BE39;
        transform:translateY(0px);
      }
    label:focus-within > span,
    select:not(:placeholder-shown) + span{
        color:#A7BE39;
        transform:translateY(0px);
        }


  </style>
</head>
<body>
  <div class="container">
  <h1>Allergies</h1>
  <!--<form class="form-inline m-2" action="create.php" method="POST">
    <label for="AllergyType">Allergy Type: </label>
      <input type="text" class = "form-control m-2" id="AllergyType" name="AllergyType" placeholder="Allergy Type">
      <label for="AllergyName">Allergy Type: </label>
      <input type="text" class = "form-control m-2" id="AllergyName" name="AllergyName" placeholder="Allergy Name">
      <label for="allergySymptoms">Allergy Symptoms: </label>
      <input type="text" class = "form-control m-2" id="AllergySymptoms" name="AllergySymptoms" placeholder="Allergy Symptoms">
      <label for="AllergyDescription">Allergy Description: </label>
      <input type="text" class = "form-control m-2" id="AllergyDescription" name="AllergyDescription" placeholder="Allergy Description">
      <div class="register">-->
          <form action="create.php" method="POST">
            <label for="AllergyType">
                <select id="AllergyType" name="AllergyType" placeholder="Allergy Type">
                  <option  disabled selected></option>
                  <option>Drug Allergy</option>
                  <option>Food Allergy</option>
                  <option>Insect Allergy</option>
                  <option>Latex Allergy</option>
                  <option>Mold Allergy</option>
                  <option>Pet Allergy</option>
                  <option>Pollen Allergy</option>
                </select>
                <span>Allergy Type</span>
            </label>
              <label for="AllergyName">
                  <input type="text" id="AllergyName" name="AllergyName" placeholder="Allergy Name">
                  <span>Allergy Name</span>
              </label>
              <label for="AllergySymptoms">
                  <input type="text" id="AllergySymptoms" name="AllergySymptoms" placeholder="Allergy Symptoms">
                  <span>Allergy Symptoms</span>
              </label>
              <label for="AllergyDescription">
                  <input type="text" id="AllergyDescription" name="AllergDescription" placeholder="Allergy Description">
                  <span>Allergy Description</span>
              </label>
              <button type="submit">Add</button>
          </form>
      <!--<button type="submit" class="btn btn-primary">Add</button>
  </form>-->
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
