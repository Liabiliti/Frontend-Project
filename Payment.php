<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      background:url('img1.jpg');
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      height: 100vh;
      display: flex;
      justify-content: space-between;
      align-items: center;
      overflow: hidden;
      grid-template-columns: 1fr 1fr;
      grid-gap: 10px;
    }
    .form{
      width: 800px;
      padding: 2rem;
      border-radius: 1rem;
      background-color: white;
      color: #425a65;
      margin-left: 10vw;
      display: inline-block;
      }

     .form__title{
        margin-bottom: 0.5rem;
      }
      .form__description{
        margin-bottom: 2rem;
      }
      .form__group{
        position: relative;
        height: 3rem;
        margin-bottom: 1.5rem;
      }
      .form__input{
        width: 100%;
        height: 100%;
        border: 2px solid lightgrey;
        border-radius: 0.5rem;
        font-family: inherit;
        font-weight: inherit;
        outline: none;
        padding: 1.25rem;
        background: none;
      }
      #AllergyType.form__input{
        padding: 0rem 1rem;

      }

      .form__input:hover{
        border-color: #A7BE39;
        filter: brightness(110%);
      }
      .form__input:focus{
        border-color: #A7BE39;
        filter: brightness(90%);
      }
      .form__label{
        position: absolute;
        left: 1rem;
        top: 0.9rem;
        padding: 0 0.5rem;
        background-color: white;
        transition:
          top 200ms ease-in,
          left 200ms ease-in,
          font-size 200ms ease-in;
      }
      .form__button{
        display: block;
        margin-left: auto;
        font-weight: 700;
        color: white;
        padding: 0.75rem 2rem;
        background-color: #A7BE39;
        filter: brightness(95%);
        outline: none;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
        transition: background-color 200ms ease-in;
        display: inline-block;
      }
      .form__button:hover{
        background-color:#A7BE39;
        filter: brightness(110%);
      }
      .form__input:focus ~ .form__label, .form__input:not(:placeholder-shown).form__input:not(:focus) ~ .form__label{
        top: -0.5rem;
        left: -0.8rem;
        font-size: 0.8rem;
      }

    .radio{
      margin-top: -15px;
      justify-content: center;
      text-align:  center;
    }
    input[type="radio"]{
    margin:0 10px 0 10px;
    padding-bottom: 10px;
    }
    .TableContainer{
      margin: auto;
      margin-right: 10vw;
      margin-left: 0vw;
      background-color: white;
      border-radius: 1rem;
      height: 680px;
      width: 100vw;
      border:1px solid #ddd;
      position: relative;
      /*margin-top: -30vh;*/
      display: inline-block;
      text-align: justify;

    }
    .TableContainer .form__group{
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
      column-width: 100px;
    }
    .TableContainer .form__button{
      position: flex;
      display: inherit;
      margin: 1rem;
      height: 5vh;
    }
    .TableContainer .form__input{
      margin: 1rem;
      height: 5vh;
    }
    .TableContainer .form__label {
      left: 2rem;
      top: 1.6rem;
    }
    .TableContainer .SearchCategory .form__label {
      left: 1rem!important;
      top: -4.5rem!important;
      position: relative;
    }
    .TableContainer .SearchCategory .form__input{
      margin: 1rem;
      height: 5vh;
      padding: 0rem 1rem;
    }

    .TableContainer .form__input:focus ~ .form__label, .form__input:not(:placeholder-shown).form__input:not(:focus) ~ .form__label #Search{
     top: 0.3rem;
     left: 0.2rem;
     font-size: 0.8rem;
   }
    .TableContainer h1 {
      padding-left: 1rem;
      padding-top: 1rem;

    }
    .table-container{
      border: 1px solid lightgrey;
      overflow: scroll;
      width: 96%;
      height: 75%;
      margin: auto;
      border-radius: 1rem;
      margin-top: 50px;

    }

    @media (max-width: 1120px){
      body{
        position: relative;
        display: block;
        overflow: auto;
        overflow-x: hidden;
      }
      .form{
        margin: auto;
        margin-left: 5vw;
        margin-right: 5vw;
        width: 90%;
      }
      .TableContainer{
        margin-bottom: 2vh;
        margin-left: 5vw;
        margin-right: 5vw;
        margin-top: 2vh;
        width: 90%;
        height: 60vh;

      }
      .TableContainer .form__button{
        height: 44px;
      }
      .TableContainer .SearchCategory .form__input{
          height: 44px;
      }
    }
  </style>
</head>
<?php include 'initializepage.php'; ?>
<body>
  <form action="create.php?data=" class="form">
    <h1 class="form__title">Payment</h1>
    <p class="form__description">Create, read, update and delete payment information</p>
    <div class="form__group">
      <input type="date" id="PaymentDueDate" name="PaymentDueDate" class="form__input" placeholder=" " autocomplete="off">
      <label for="AllergySymptoms" class="form__label">Payment Due Date</label>
    </div>
    <div class="form__group">
      <input type="text" id="AmountDue" name="AmountDue" class="form__input" placeholder=" " autocomplete="off">
      <label for="AllergySymptoms" class="form__label">Amount Due</label>
    </div>
    <div class="form__group">
      <input type="date" id="PaymentPaidDate" name="PaymentPaidDate" class="form__input" placeholder=" " autocomplete="off">
      <label for="AllergySymptoms" class="form__label">Payment Paid Date</label>
    </div>
    <div class="form__group">
      <input type="text" id="ActualAmountPaid" name="ActualAmountPaid" class="form__input" placeholder=" " autocomplete="off">
      <label for="AllergySymptoms" class="form__label">Actual Amount Paid</label>
    </div>
    </div>
    <button type="submit" class="form__button">Add</button>
  </form>
      <!--<button type="submit" class="btn btn-primary">Add</button>
  </form>-->
  <div id="Search" class="TableContainer">
    <?php $CRUDArray = $_SESSION['CRUDdata'];
  echo "<form action=".$CRUDArray[0].".php method='POST'>";
    ?>
    <div class="form__group">
      <input type="text" id="Search" name="Search" class="form__input" placeholder=" " autocomplete="off">
      <label for="Search" id="Search" class="form__label">Keyword</label>
      <div class=SearchCategory>
      <select class="form__input" name="SearchCategory" placeholder=" " autocomplete="off">
        <?php
        $CRUDArray = $_SESSION['CRUDdata'];

        for ($i = 2; $i < count($CRUDArray); $i++){

        echo "<option value='".$CRUDArray[$i]."'>".$CRUDArray[$i]."</option>";
        }
        ?>
      </select>
      <label for="SearchCategory" class="form__label">Category</label>
    </div>
      <button type="submit" class="form__button">Search</button>
  </div>
    <div class="line"></div>
    </form>
      <div class=table-container>
    <table class="table">
      <tbody>
        <?php
        if (isset($_POST['Search']))
        {
          include 'view.php';
        }
        else{
          include 'read.php';
        }
         ?>
      </tbody>
    </table>
    </div>
  <!--</form>-->
    <br></br>
  </div>



</body>
</html>
