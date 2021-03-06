<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
      <title></title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <style type="text/css">
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
          position: relative;
        }

        .one{
          background: url('img2.jpg');
          background-size: cover;
        }
        h1 {
          font-size: 8vw;
          line-height: 150px;
          color: #b7923a;
          margin:  0;
        }
        h2 {
          font-size
        }
        .subheading {
          color: #b7923a;
          font-size: 24px;
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

            a {
              text-decoration: none;
            }
            .social2 a{
              padding: 20px;
              color: #7b7c7c;
              font-size: 1.1rem;
            }
             #contact{
              position: absolute;
              left: 50%;
              top: 50%;
              transform:translate(-50%,-50%);
              display: flex;
              align-items:center;
            }
            .social2 {
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              background-color: #FFFFFF;
              box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
            }
            .social2 a:hover{
              color: #000000;
              transition: all ease 0.3s;
            }
            .contact-box{
            	background-color:#A83C56;
            	display: flex;
            	flex-direction: column;
            	justify-content: center;
            	align-items: center;
            	padding: 30px 30px;
            	box-shadow: 2px 0px 30px rgba(0,0,0,0.4);
              width: 250px;
              border-radius: 5px;
            }
            .c-heading h1 {
              text-align: center;
              color: #e7eef3;
              font-size: 2.5rem;
              font-weight: lighter;
              margin: 0px;
              padding: 0px;
            }
            .c-heading p{
              font-family: Biko, sans-serif;
              color: #e7eef3;
              font-size: 0.8rem;
              font-weight: lighter;
              margin: 0px;
              padding: 0px;
              text-align: center;
            }
            .c-inputs{
              margin: 15px 0px;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            }
            .c-inputs input{
          	width:250px;
          	height: 45px;
          	background-color: transparent;
          	border: none;
          	border-bottom: 1px solid rgba(251,251,251,0.1);
          	outline: none;
          	margin: 10px 0px;
          	padding: 10px;
          	box-sizing: border-box;
          	color: #e7eef3;
          	display: flex;
          }
            .c-inputs textarea{
              width: 250px !important;
              height: 200px !important;
              outline: none;
              background-color: rgba(0,0,0,0.1);
              border: 1px solid rgba(82,82,82,1);
              color: #f4f4f4;
              padding: 10px;
              font-size: 0.8rem;
              box-sizing: border-box;
              font-family: Biko, sans-serif;
            }
            .c-inputs button{
              width: 200px;
              height: 40px;
              background-color: #FFFFFF;
              border: none;
              outline: none;
              margin-top: 20px;
              border-radius: 10px;
              box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
              letter-spacing: 1px;
            }
            .c-inputs input:focus{
              border-bottom: 1px solid rgba(252,252,252,1.00);
              transition: all ease 0.5s;
            }
            .c-inputs textarea:focus{
              border: none;
              border-bottom: 1px solid rgba(255,255,255,1.00);
              transition: all ease 0.5s;
            }
            .c-inputs button:active{
              transform: scale(1.02);
            }
            .map{
              filter: grayscale(0.2);
              box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
              border: 2px solid #FFFFFF;
              background-color: white;
            }
            @media(max-width:1100px){
              .map{
                display: none;
              }
            }
            @media(max-width:450px){
              .social2{
                display: none;
              }
              .contact-box{
                width: 100%;
                height: 100vh;
                box-sizing: border-box;
                border-radius: 0;
              }
               #contact{
                position: static;
                transform: translate(0,0);
                width: 100%;
                height: 100vh;
                box-sizing: border-box;
              }
              .c-heading h1{
                font-size: 2.2rem;
                text-align: center;
              }
            }
            ::placeholder{
              color: #e7eef3;
              opacity: 1;
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
  <div class="wrapper">
    <div class="hamburger-menu">
      <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
            <span></span>
          </label>
          <ul class="menu__box">
            <li><a class="menu__item" href="HomePage.html">Home</a></li>
            <li><a class="menu__item" href="Aboutus.html">About us</a></li>
            <li><a class="menu__item" href="Ourservices.html">Our services</a></li>
            <li><a class="menu__item" href="Contactus.html">Contact us</a></li>
            <li><a class="menu__item" href="Applications.html">Applications</a></li>
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
      <div id="contact">
          <div class="social2">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
          <div class="contact-box">
            <div class="c-heading">
            <h1>Get In Touch</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
            <div class="c-inputs">
              <input type="text" placeholder="Full Name"/>
              <input type="email" placeholder="Example@gmail.com"/>
              <textarea name="message" placeholder="Write Message"></textarea>
              <button>SEND</button>

            </div>
          </div>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9360.667303431694!2d151.01754078541313!3d-33.95409744505719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bee80170a93d%3A0x508110eec7ed59aa!2s41%20McGirr%20St%2C%20Padstow%20NSW%202211!5e0!3m2!1sen!2sau!4v1650953092196!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
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
