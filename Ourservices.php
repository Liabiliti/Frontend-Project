<?php include 'connection.php'; 
session_start();
$_SESSION["page"] = "Ourservices.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Our Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta content="width=device-width" name="viewport">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">

        body {
          margin: 0;
          padding: 0;
          font-family: Biko, sans-serif;
          line-height: normal;
        }
        .three p {
          color: #fcc64a;
          font-size: 20px;
          text-align: center;
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
        h1 {
          font-size: 8vw;
          line-height: 150px;
          color: #fcc64a;
          margin:  0;
          display: block;
          font-weight: bold;
          font-size: 90px;
        }
          .one {
            background-color: white;
            position: relative;
            display: flex;
            flex-flow: column wrap;
            overflow: hidden;
            -webkit-box-sizing: content-box;
          }
          .one .heading {
            position: relative;
            top: 0;
            height: 30vh;
            width: 100%;
            background: url('img1.jpg');
            background-size: cover;
          }
          .one .subheading {
            position: relative;
            top: 0;
            height: 70vh;
            width: 100%;
            background-color: #fcc64a;
            overflow: hidden;
            text-align: center;
          }
          .one #white2 h1{
            color: #fcc64a;
            font-size: 90px;
            position: relative;
            bottom: 52.5vh;
            left: 5vw;
            padding-top: 67vh;
          }
          .one #orange p{
            color: white;
            font-size: inherit;
            position: absolute;
            width: 45vw;
            font-size: 20px;
            left: 50vw;
            text-align: justify;
            padding-top: 2vh;
            line-height: 1.15;
          }
          .one button{
            width:141.05px;
            margin: 0 auto;
            text-align:center;
            top: 80%;
            /*left: 19.5%;*/
            position: absolute;
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 18px;
            line-height: 20px;
            font-weight: 600;
            border-radius: 8px;
            padding: 14px 24px;
            border: none;
            transition: box-shadow 0.2s ease 0s, -ms-transform 0.1s ease 0s, -webkit-transform 0.1s ease 0s, transform 0.1s ease 0s;
            background: #FCC64A;
            filter: brightness(95%);
            color: #fff;
            z-index: 1;
            font-family: Biko, sans-serif;
            -webkit-box-sizing: border-box;
          }
          .one button:hover{
            filter: brightness(110%);
          }
          @media (max-width:1633px){
            /*.span4 {
              visibility:hidden;
            }*/
          }
          @media (max-width:1180px){
            /*.span3 {
              visibility:hidden;
            }*/
            .span4 {
              visibility:hidden;
            }
          }
          @media (max-width:967px){
          /*  .span2 {
              visibility:hidden;
            }*/
            .span3 {
              visibility:hidden;
            }
          }
          @media (max-width:670px){
            /*.span1 {
              visibility:hidden;
            }*/
            .span2 {
              visibility:hidden;
            }
          }
          @media(max-width:600px) {
            .one #orange p{
              width: 90vw;
              font-size: 20px;
              left: 4vw;
              margin: auto;
            }
            .span1{
              visibility: visible;
            }
            .one #white2 h1{
              text-align: center;
              bottom: 52.5vh;
              font-size: 48px;
              left: 0vw;
            }
            .heading{
              height: 30vh;
            }
            .subheading{
              height: 70vh;
            }
            .one button{
              width:141.05px;
              margin:0 auto;
              text-align:center;
              top: 69%;
            }
        }
        @media (max-width:469px){
          .span1 {
            visibility:hidden;
          }
        }
        @media(max-height:800px)
        {
          .span3 {
            visibility:hidden;
          }
          .s8{
            visibility: hidden;
          }
        }
        @media(max-height:740px)
        {
          .SE{
            visibility: hidden;
          }
          .span1 {
            visibility:hidden;
          }
          .span2 {
            visibility:hidden;
          }
          .span3 {
            visibility:hidden;
          }
        }
        @media (min-width:601px) {
          .one button{
            left: 72%;
            transform: translateX(-50%);
          }
        }
        .three {
          background-color: #A83C56;
          height: 100vh;
          flex-direction: column;
          flex:1;
          overflow: hidden;
        }
        .three .text p{
          width: 90%;
          margin-left: 2.5%;
          margin-right: 5%;
          margin-top: -2.5vh;
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
            .carousel{
              height: 600px;
              perspective: 250px;
              position: relative;
              display: inline-block;
              top: 0vh;
            }
            .carousel .carousel-item {
              width: 450px;
              background: #fff;
              padding: 50px;
              height: 400px;
              text-align: center;
              border-radius: 15px;
            }
            .img-area {
              width: 100px;
              height: 100px;
              margin: 0 auto;
              overflow: hidden;
              border-radius: 50%;
              border: inset 8px #fcc64a;
              }
              .img-area img{
                    width: 100%;
              }
            .testi p {
              color: #262626;
              font-size: 18px;
              line-height: 1.9;
            }
              .testi h4 {
                font-size: 20px;
                margin: 0;
                color: #000;
            }
              .testi h5 {
                font-size: 14px;
                letter-spacing: 5px;
                margin: 7px 0;
            }
            @media(max-width:600px){
              .carousel{
                  perspective: 1200px;
              }
            }
            .three h1{
              text-align: center;
            }
            @media(max-width:600px)
            {
            .three h1{
             font-size: 48px;
             text-align: center;
           }
            .three .text p{
             width: 90vw;
             font-size: 20px;
             top: -10vh;
           }
         }
            .animatednum {
              background-color: #fcc64a;
              position: absolute;
              width: 40vw;
              height: 55vh;
              left: 5vw;
              top: 35vh;
              overflow: hidden;
            }
            .small-container{
              position: relative;
              width: 100%;
              height: 11.27vh;
              background-color: #fcc64a;
              z-index: 1;
              display: inline-block;
              font-size: 60px;
              text-align: center;
              margin-bottom: 4px;
              padding-top: 5vh;
              font-weight: bold;
              color: white;
              -webkit-box-sizing: content-box;
            }
            .line {
              height: 3px;
              position: relative;
              width: 100%;
              background-color: white;
            }
            .small-container p{
              font-size: 14px;
              font-weight: bold;
              width: 39vw;
              top: 10.5vh;
              position: absolute;
              line-height: normal;
            }
            @media(max-width:600px)
            {
              .animatednum {
                top: 77vh;
                height: 20vh;
                width: 100%;
                left: 2vw;
                margin: auto;
              }
              .small-container{
                display: flex;
                width: 25vw;
                height: 20vh;
                float: left;
                padding-left: 6vw;
                font-size: 45px;
              }
              .line {
                float: left;
                width: 3px;
                position: relative;
                height: 100%;
                background-color: white;
              }
              #last {
                display: none;
                float: none;
              }
              .small-container p{
                width: 18vw;
                font-size: 12px;
                top: 11vh;
              }
            }
            @property --num {
              syntax: '<integer>';
              inherits: false;
              initial-value: 0;
            }

            .small-container::before {
              counter-increment: my-counter var(--num);
              content: counter(my-counter) "+";
              animation: count2 10s ease-in-out forwards;
            }
            #one::before {
              animation: count1 10s ease-in-out forwards;
            }
             #two::before {
              animation: count2 10s ease-in-out forwards;
             }
             #three::before {
               animation: count3 10s ease-in-out forwards;
              }
            @keyframes count1 {
              to { --num: 50; }
            }

            @keyframes count2 {
              to { --num: 15; }
            }
            @keyframes count3 {
              to { --num: 150; }
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
      <img alt="Children holding watering can" style="display:none;">
      <div class="heading" id="white2">
        <h1>Our services:</h1>
      </div>
      <div class="subheading" id="orange">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo bibendum, egestas enim non, gravida eros. Aenean euismod odio et urna pharetra, a feugiat nisl iaculis. Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices. Nulla facilisi. <span class="SE">Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span><span class="span1"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span><span class="span2"><br></br>Nulla facilisi. Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span><span class="span3"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span><span class="span4"><br></br>Nulla facilisi. Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero. Vestibulum in leo bibendum, egestas enim non, gravida eros. Aenean euismod odio et urna pharetra, a feugiat nisl iaculis.</span></p>
        </div>
      <div class="animatednum">
        <div class="small-container" id="one"><p>Classes</p></div>
        <div class="line"></div>
        <div class="small-container" id="two"><p>Staff</p></div>
        <div class="line"></div>
        <div class="small-container" id="three"><p>Graduates</p></div>
        <div class="line" id="last"></div>
  </div>
    </section>
    <section class="three">
      <div class="text">
      <h1>Testimonials</h1>
      <p>Don't just trust our word, here are some reviews from our very happy customers</p>
    </div>
      <div class="carousel">
          <a class="carousel-item" href="#">
              <div class="testi">
                  <div class="img-area">
                      <img src="IronMan.png" alt="Iron man picture">
                  </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                  <h4>Tony Stark</h4>
                  <h5></h5>
              </div>
          </a>
          <a class="carousel-item" href="#">
              <div class="testi">
                  <div class="img-area">
                      <img src="person3.jpg" alt="Happy person">
                  </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                  <h4>Natalie Jones</h4>
                  <h5>Web Designer</h5>
              </div>
          </a>
          <a class="carousel-item" href="#">
              <div class="testi">
                  <div class="img-area">
                      <img src="person1.jpg" alt="Happy person">
                  </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                  <h4>Steve Johns</h4>
                  <h5>Web Designer</h5>
              </div>
          </a>
          <a class="carousel-item" href="#">
              <div class="testi">
                  <div class="img-area">
                      <img src="person2.jpg" alt="Happy person">
                  </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                  <h4>Carol Danvers</h4>
                  <h5>Web Designer</h5>
              </div>
          </a>
          <a class="carousel-item" href="#">
              <div class="testi">
                  <div class="img-area">
                      <img src="JonDoe.jpeg" alt="Happy person">
                  </div>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                  <h4>Jon Doe</h4>
                  <h5>Web Designer</h5>
              </div>
          </a>
     </div>
      <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.carousel').carousel({
  			padding: 200
  	});
  	autoplay();
  	function autoplay() {
  		$('.carousel').carousel('next');
  		setTimeout(autoplay, 4500);
  	}
    });
  </script>
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