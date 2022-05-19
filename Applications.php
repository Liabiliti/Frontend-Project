<?php include 'connection.php'; 
session_start();
$_SESSION["page"] = "Applications.php";?>
<!DOCTYPE html>
<html>
<head>
      <title></title>
      <meta content="width=device-width" name="viewport">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta charset="utf-8">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'>
      <style type="text/css">
      *{
        margin:0;
        padding:0;
      }
        body {
          margin: 0;
          padding: 0;
          font-family: Biko, sans-serif;
        }
        .wrapper {
          width: 100%;
          height: 100vh;
          overflow-y: scroll;
          scroll-snap-type: y mandatory;
        }
        .content{
          max-width: 800px;
        }
        section {
          width: 100%;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          scroll-snap-align: start;
        }

        .one{
          background: url('img1.jpg');
          overflow: hidden;
          height: 100vh;
          position: relative;
          background-size: cover;
        }
        h1 {
          font-size: 8vw;
          line-height: 150px;
          color: #b7923a;
          margin:  0;
        }

        .subheading {
          color: #b7923a;
          font-size: 24px;
        }
        .two {
          background-color: white;
        }
        .three {
          background-color: black;
          height: 100vh;
          flex-direction: column;
          flex:1;
        }
        .three .footer {
          padding: 5vh;
          background-color: #fff;
          box-sizing: border-box;
          height: 20vh;
          margin: 0;
          margin-top: auto;
          display: inline-block;
        }
        .footer .social{
          text-align: center;
          padding-bottom: 25px;
          color: #4b4c4d;
        }
        .footer .social a {
          font-size: 24px;
          color: inherit;
          border: 1px solid #ccc;
          height: 40px;
          width: 40px;
          line-height: 38px;
          display: inline-block;
          text-align: center;
          border-radius: 50%;
          margin: 0 8px;
          opacity: 0.75;
          text-decoration: none;
        }
        .footer .social a:hover{
          opacity: 0.9;
        }
        .footer ul {
          margin-top: 0;
          padding: 0;
          list-style: none;
          font-size: 18px;
          line-height: 1.6;
          margin-bottom: 0;
          text-align: center;
        }
        .footer ul a {
          color: inherit;
          text-decoration: none;
          opacity: 0.8;
        }
        .footer ul li {
          display: inline-block;
          padding: 0 15px;
        }
        .footer ul li a:hover{
          opacity: 1;
        }
        .footer .copyright {
          margin-top: 15px;
          text-align: center;
          font-size: 13px;
          color: #aaa;
        }
        #menu__toggle {
            opacity: 0;
            }
            #menu__toggle {
                opacity: 0;
                }
            #menu__toggle:checked + .menu__btn > span {
                transform: rotate(45deg);
                }
            #menu__toggle:checked + .menu__btn > span::before {
                top: 0;
                transform: rotate(0deg);
                }
            #menu__toggle:checked + .menu__btn > span::after {
                top: 0;
                transform: rotate(90deg);
                }
            #menu__toggle:checked ~ .menu__box {
                left: 0 !important;
                }
            .menu__btn {
                position: fixed;
                top: 20px;
                left: 20px;
                width: 26px;
                height: 26px;
                cursor: pointer;
                z-index: 3;
                margin: 0;
                }
            .menu__btn > span,
            .menu__btn > span::before,
            .menu__btn > span::after {
                display: block;
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: #616161;
                transition-duration: .25s;
                }
          .menu__btn > span::before {
                content: '';
                top: -8px;
                }
          .menu__btn > span::after {
                content: '';
                top: 8px;
                }
          .menu__box {
                display: block;
                position: fixed;
                z-index: 2;
                top: 0;
                left: -100%;
                width: 300px;
                height: 100%;
                margin: 0;
                padding: 80px 0;
                list-style: none;
                background-color: #ECEFF1;
                box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
                transition-duration: .25s;
                }
          .menu__item {
                display: block;
                padding: 12px 24px;
                color: #333;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-weight: 600;
                text-decoration: none;
                transition-duration: .25s;
                }
          .menu__item:hover {
                background-color: #CFD8DC;
                }

                .center {
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                }
                .popup-overlay {
                  position: fixed;
                  top: 0px;
                  left: 0px;
                  width: 100%;
                  height: 100vh;
                  z-index: 1;
                  background: rgba(0,0,0,0.5);
                  display: none;
                }
                .popup {
                  position: absolute;
                  top: -150%;
                  left: 50%;
                  transform: translate(-50%, -50%) scale(1.15);
                  width: 300px;
                  height: 500px;
                  background: #f5f5f5;
                  z-index: 2;
                  opacity: 0;
                  border-radius: 5px;
                  box-shadow: 5px 5px 3px rgba(0,0,0,0.2);
                  transition: transform 300ms ease-in-out, opacity 300ms ease-in-out;
                }
                body.showLoginForm .popup-overlay {
                  display: block;
                }
                body.showLoginForm .popup {
                  top: 50%;
                  opacity: 1;
                  transform: translate(-50%, -50%) scale(1);
                }
                .popup .popup-close{
                  position: absolute;
                  top: -10px;
                  right: -10px;
                  width: 40px;
                  height: 40px;
                  background: #555;
                  color: #f5f5f5;
                  font-size: 25px;
                  font-weight: 600;
                  text-align:center;
                  border-radius: 50%;
                  cursor: pointer;
                }
                .popup .form .avatar{
                  margin: 30px 0px 20px;
                  text-align: center;
                }
                .popup .form .avatar img {
                  width: 130px;
                  border-radius: 50%;
                }
                .popup .form .header {
                  text-align: center;
                  font-size: 20px;
                  font-weight: 600;
                  color:#222;
                  margin-bottom:5px;
                }
                .popup .form .element{
                  padding: 8px 20px;
                }
                .popup .form .element label{
                  display: block;
                  font-size: 14px;
                  color: #222;
                  margin-bottom:5px;
                }
                .popup .form .element input{
                  width: 100%;
                  padding: 8px 10px;
                  box-sizing: border-box;
                  outline: none;
                  border: 1px solid #aaa;
                  background: #eee;
                  border-radius: 5px;
                }
                .popup .form .element button {
                  margin-top: 5px;
                  width: 100%;
                  padding: 10px 0px;
                  text-transform: uppercase;
                  outline: none;
                  border: none;
                  font-size: 15px;
                  font-weight: 600;
                  border-radius: 5px;
                  cursor: pointer;
                  background: #4889da;
                  color: #f5f5f5;
                }
            .container{
              width: 330px;
              background: #fff;
              border-radius: 5px;
              text-align: center;
              padding: 50px 35px 10px 35px;
              box-shadow: 2px 2px 30px rgba(0,0,0,0.2);

            }
            .container header{
              font-size: 2.1875em;
              font-weight: 600;
              margin: 0 0 30px 0;
            }
            .container .form-outer{
              width: 100%;
              overflow: hidden;
            }
            .form-outer form{
              display: flex;
              width: 700%;
            }
            .form-outer form .page{
              width: 15%;
              transition: margin-left 0.3s ease-in-out;

            }
            .form-outer form .page .title{
              text-align: left;
              font-size: 25px;
              font-weight: 500;
            }
            .form-outer form .page .field{
              height: 4.7vh;
              width: 330px;
              margin: 35px 0;
              display: flex;
              position: relative;
            }

            .form-outer form .page .field .label{
              position: absolute;
              top: -30px;
            }
            .form-outer form .page .field input{
              height: 85%;
              width: 100%;
              border: 1px solid lightgrey;
              border-radius: 5px;
              font-size: 18px;
              padding-left: 15px;
            }
            .form-outer form .page .field select{
              height: 90%;
              width: 100%;
              border: 1px solid lightgrey;
              border-radius: 5px;
              font-size: 18px;
              padding-left: 15px;
            }

            .form-outer form .page .field button{
              width: 100%;
              height: calc(100% + 5px);
              margin-top: -3px;
              border: none;
              border-radius: 5px;
              font-size: 18px;
              font-weight: 500;
              text-transform: uppercase;
              letter-spacing: 1px;
              cursor: pointer;
              transition: 0.3s ease;

            }
            .form-outer form .page .field button:hover{
              background: #A7BE39;
              color: white;
            }
            .form-outer form .page .btns button {
              margin-top: -10px!important;
            }
            form .page .btns button.prev{
              margin-right: 3px;
              font-size: 17px;
            }
            form .page .btns button.next{
              margin-left: 3px;
            }
            .container .progress-bar{
              display: flex;
              margin: 20px 0;
            }
            .container .progress-bar .step{
              position: relative;
              text-align: center;
              width: 100%;
            }

            .progress-bar .step p{
              font-size: 12px;
              font-weight: 500;
              color: #000;
              transition: 0.2s;
            }

            .progress-bar .step p.active{
              color: #A7BE39;
            }

            .progress-bar .step .bullet{
              position: relative;
              height: 18px;
              width: 18px;
              border: 1px solid #000;
              display: inline-block;
              border-radius: 50%;
              font-weight: 500;
              font-size: 12px;
              line-height: 18px;
              transition: 0.2s;
            }
            .progress-bar .step .bullet.active{
              border-color: #A7BE39;
              background: #A7BE39;
            }
            .progress-bar .step:last-child .bullet:before,
            .progress-bar .step:last-child .bullet:after{
              display: none;
            }
            .progress-bar .step .bullet:before,
            .progress-bar .step .bullet:after{
              position: absolute;
              content: '';
              bottom: 7.5px;
              right: -33px;
              height: 3px;
              width: 28px;
              background-color: black;
              }

              .progress-bar .step .bullet.active:after{
                background: #A7BE39;
                animation: animate 0.3s linear forwards;
                transform: ScaleX(0);
                transform-origin: left;
              }

              @keyframes animate {
                100%{
                  transform: ScaleX(1);
                }
              }

            .progress-bar .step .bullet span{
              font-weight: 500;
              font-size: 12px;
              line-height: 18px;
              position: absolute;
              left: 50%;
              transform: translateX(-50%);
            }

            .progress-bar .step .bullet.active span{
              display: none;
            }
            .progress-bar .step .check{
              position: absolute;
              left: 51%;
              top: 63%;
              font-size: 15px;
              transform: translate(-50%, -50%);
              display:none;
            }
            .progress-bar .step .check.active{
              display: block;
              color: #fff;
            }
            .nextBtn {
              margin-top: -8px!important;
            }
            .three {
              background-color: black;
              height: 20vh;
              flex-direction: column;
              flex:1;
            }
            .three .footer {
              padding: 5vh;
              background-color: #fff;
              box-sizing: border-box;
              height: 20vh;
              margin: 0;
              margin-top: auto;
              display: inline-block;
            }
            .footer .social{
              text-align: center;
              padding-bottom: 25px;
              color: #4b4c4d;
            }
            .footer .social a {
              font-size: 24px;
              color: inherit;
              border: 1px solid #ccc;
              height: 40px;
              width: 40px;
              line-height: 38px;
              display: inline-block;
              text-align: center;
              border-radius: 50%;
              margin: 0 8px;
              opacity: 0.75;
              text-decoration: none;
            }
            .footer .social a:hover{
              opacity: 0.9;
            }
            .footer ul {
              margin-top: 0;
              padding: 0;
              list-style: none;
              font-size: 18px;
              line-height: 1.6;
              margin-bottom: 0;
              text-align: center;
            }
            .footer ul a {
              color: inherit;
              text-decoration: none;
              opacity: 0.8;
            }
            .footer ul li {
              display: inline-block;
              padding: 0 15px;
            }
            .footer ul li a:hover{
              opacity: 1;
            }
            .footer .copyright {
              margin-top: 15px;
              text-align: center;
              font-size: 13px;
              color: #aaa;
            }
            .error {
              background: #F2DEDE;
              color: #A94442;
              padding: 10px;
              margin-left: 5px;
              width: 90%;
              border-radius: 5px;
              text-align: center;
            }
      </style>
</head>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("error") > -1) {
      openLoginForm();
    }
  });
</script>
  <img alt="Children holding watering can" style="display:none;">
  <div class="wrapper">
    <div class="hamburger-menu">
      <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
            <span></span>
          </label>
          <ul class="menu__box">
            <li><a class="menu__item" href="HomePage.php">Home</a></li>
            <li><a class="menu__item" href="Aboutus.php">About us</a></li>
            <li><a class="menu__item" href="Ourservices.php">Our services</a></li>
            <li><a class="menu__item" href="Contactus.php">Contact us</a></li>
            <li><a class="menu__item" href="Applications.php">Applications</a></li>
            <li><a class="menu__item" href ="#" onclick="openLoginForm()">Login</a></li>
          </ul>
    </div>
    <div class="popup-overlay"></div>
    <div class="popup">
      <div class="popup-close" onclick="closeLoginForm()">&times;</div>
      <div class="form">
          <div class="avatar">
            <img src="https://bit.ly/31pHqJb" alt="">
          </div>
          <form id="loginform" action="login.php" method="POST">
            <?php
            if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          <div class="header">Member login</div>
          <div class="element">
            <label for="username">Username</label>
            <input type="text" id="username" required name="username">
          </div>
          <div class="element">
            <label for="password">Password</label>
            <input type="text" id="password" required name="password">
          </div>
          <div class="element">
            <button type="submit" name="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
    <script src="LoginScript.js">
    </script>
    <section class="one">
      <div class="container">
      <header>Application Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Parent</p>
          <div = class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

        <div class="step">
          <p>Child</p>
          <div = class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

        <div class="step">
          <p>Allergy</p>
          <div = class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

        <div class="step">
          <p>Medicine</p>
          <div = class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

        <div class="step">
          <p>Doctor</p>
          <div = class="bullet">
            <span>5</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

        <div class="step">
          <p>Submit</p>
          <div = class="bullet">
            <span>6</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
        <div class="form-outer">
          <form action="#">
            <!--The first form will be for the guardian (Might have to add gender) -->
            <div class="page slidepage">
              <div class="title">Parent Info: </div>
                <div class="field">
                  <input type="text" placeholder="Given Name">
                </div>
                <div class="field">
                  <input type="text" placeholder="Surname">
                </div>
                <div class="field">
                  <input type="text" placeholder="Email">
                </div>
                <div class="field">
                  <input type="text" placeholder="Phone">
                </div>
                <div class="field">
                  <input type="text" placeholder="Address"> <!-- This will be autocomplete with google api-->
                </div>
                <div class="field nextBtn">
                  <button>Next</button>
                </div>
              </div>
                <!--This form will be for the childs details -->
                <div class="page">
                  <div class="title">Child Info: </div>
                  <div class="field">
                    <input type="text" placeholder="Child Given Name">
                  </div>
                  <div class="field">
                    <input type="text" placeholder="Child Surname">
                  </div>
                  <div class="field">
                    <input type="text" placeholder="Child DOB">
                  </div>
                  <div class="field">
                    <select>
                      <option  disabled selected>Gender</option> <!-- add option where gender cannot be "gender"--->
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="field"></div>
                  <div class="field btns">
                    <button class = "prev-1 prev">Previous</button>
                    <button class = "next-1 next">Next</button>
                  </div>
                </div>
                  <!--The form is if the child has allergies -->
                  <div class="page">
                    <div class="title">Allergy Info: </div>

                  <div class="field">
                    <div class = "label">Does your child have allergies?</div>
                    <input type="radio" id="yes" name="AllergyOption" value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="AllergyOption" value="no">
                    <label for="no">No</label>
                  </div>
                  <div class="field"></div>
                  <div class="field"></div>
                  <div class="field"></div>
                  <div class="field"></div>
                    <div class="field btns">
                      <button class = "prev-2 prev">Previous</button>
                      <button class = "next-2 next">Next</button>
                    </div>
                  </div>
                    <!--If the above form is marked yes, this form will appear -->
                  <div class="page">
                      <div class="title">Allergy Info: </div>
                    <div class="field">
                      <div class = "label">Allergy Type:</div>
                      <select name="AllergyType" id="AllergyType">
                        <option value="DatabaseValue">These will be from the database</option>
                        </select>
                      </div>
                      <div class="field">
                          <div class = "label">Allergy Name:</div>
                          <input type="text"> <!-- this will be autocomplete-->
                      </div>
                    <div class="field">
                      <div class = "label">Severity of your childs Allergies?</div>
                      <input type="radio" id="local" name="AllergySeverity" value="local">
                      <label for="local">Local Reaction</label>
                      <input type="radio" id="moderate" name="AllergySeverity" value="moderate">
                      <label for="moderate">Moderate Reaction</label>
                      <input type="radio" id="severe" name="AllergySeverity" value="severe">
                      <label for="moderate">Severe Reaction</label>
                    </div>
                    <div class="field"></div>
                    <div class="field"></div>
                      <div class="field btns">
                        <button class = "prev-3 prev">Previous</button>
                        <button class = "next-3 next">Next</button>
                      </div>
                  </div>

                    <!-- This form is to find out if there child had medicinal requirements-->
                  <div class="page">
                      <div class="title">Medicine Info: </div>
                    <div class="field">
                      <div class = "label">Does your child take Medicine?</div>
                      <input type="radio" id="yes" name="MedicineOption" value="yes">
                      <label for="yes">Yes</label>
                      <input type="radio" id="no" name="MedicineOption" value="no">
                      <label for="no">No</label>
                    </div>
                    <div class="field"></div>
                    <div class="field"></div>
                    <div class="field"></div>
                    <div class="field"></div>
                      <div class="field btns">
                        <button class = "prev-4 prev">Previous</button>
                        <button class = "next-4 next">Next</button>
                      </div>
                  </div>
                    <!--If the above form is marked yes, this form will appear -->
                    <div class="page">
                      <div class="title">Medicine Info:</div>
                  <div class="field">
                      <input type="text" placeholder="Medicine Name"> <!-- this will be autocomplete-->
                    </div>
                    <div class="field">
                        <div class = "label">Dosage:</div>
                        <input type="text" placeholder="Medicine Dosage"> <!-- Make sure only numbers with a decimal go into this box-->
                    </div>
                    <div class="field"></div>
                    <div class="field"></div>
                    <div class="field"></div>
                    <div class="field btns">
                      <button class = "prev-5 prev">Previous</button>
                      <button class = "next-5 next">Next</button>
                    </div>
                  </div>
                    <!--This form is for the Doctors information -->
                  <div class="page">
                      <div class="title">Doctors Info: </div>
                    <div class="field">
                      <input type="text" placeholder="Doctors Surname">
                    </div>
                    <div class="field">
                      <input type="text" placeholder="Doctors Phone">
                    </div>
                    <div class="field">
                      <input type="text" placeholder="Doctors Address"> <!-- This will be autocomplete with google api-->
                    </div>
                    <div class="field"></div>
                    <div class="field"></div>
                    <div class="field btns">
                      <button class = "prev-6 prev">Previous</button>
                      <button class = "submit">Submit</button>
                    </div>
                </div>
          </form>
        </div>
      </div>
      <script src="script.js">
      </script>
    </section>
    <section class="three">
        <section class="footer">
          <div class="social">
            <a href="#"<i class ="fab fa-facebook-f"></i></a>
            <a href="#"<i class ="fab fa-snapchat"></i></a>
            <a href="#"<i class ="fab fa-instagram"></i></a>
            <a href="#"<i class ="fab fa-twitter"></i></a>
          </div>
          <ul class="list">
            <li>
              <a href="HomePage.html">Home</a>
            </li>
            <li>
              <a href="Aboutus.html">About</a>
            </li>
            <li>
              <a href="Ourservices.html">Services</a>
            </li>
            <li>
              <a href="Contactus.html">Contact</a>
            </li>
            <li>
              <a href="Applications.html">Applications</a>
            </li>
          </ul>
          <p class="copyright">
            Nicholas Payk @ 2022
          </p>
        </section>
    </section>
  </div>
</body>
</html>
