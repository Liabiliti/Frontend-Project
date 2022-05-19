<?php include 'connection.php'; 
session_start();
$_SESSION["page"] = "HomePage.php";?>
<!DOCTYPE html>
<html>
<head>
      <title>Home</title>
      <meta content="width=device-width" name="viewport">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          overflow-x:hidden;
        }
        .content{
          position: relative;
          z-index: 0;
          width: 100%;
          height: 100vh;
          background-color: #white;
          overflow: hidden;
        }
        .svg-cover {
          width: 100vw;
          height: 50vh;
          left: 0;
          top: 0;
          right: 20vw;
          position: absolute;
          margin: 0;
          padding: 0;
          z-index: 1;
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
          background-color: white;
          position: relative;
          overflow: hidden;
        }
        h1 {
          font-size: 8vw;
          line-height: 150px;
          color: #b7923a;
          margin:  0;
        }

        .two {
          background-color: white;
          position: relative;
          display: flex;
          flex-flow: column wrap;

        }
        .two .heading {
          position: relative;
          top: 0;
          height: 30vh;
          width: 100%;
          background-color: white;
          overflow: hidden;
        }
        .two .subheading {
          position: relative;
          top: 0;
          height: 70vh;
          width: 100%;
          background-color: #7CCBDC;
          overflow: hidden;
          text-align: center;
        }
        .two #orange h1{
          color: #7CCBDC;
          font-size: 90px;
          position: relative;
          bottom: 52.5vh;
          padding-top: 67vh;
          left: 5vw;
        }
        .two #white p{
          color: black;
          color: white;
          font-size: inherit;
          position: absolute;
          width: 45vw;
          font-size: 20px;
          left: 4vw;
          text-align: justify;
          padding-top: 2vh;
          line-height: auto;
        }

        .map2 {
          right: 3vw;
          top: 35vh;
          position: absolute;
          border-radius: 5px;
          overflow: hidden;
          height: 60%;
          width: 40%;
          border: 4px white solid;
          text-align: center;
          /*padding: 20% 0;*/
          display: block;
          margin-right: 3vw;
          margin-left: 50vw;
          box-shadow: 2px 2px 30px rgba(0,0,0,0.4);
        }
        .map2 iframe{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 1000px;
          height: 1000px;
          text-align:center;
          display: block;
        }
        .three {
          background-color: white;
          position: relative;
          display: flex;
          flex-flow: column wrap;
        }
        .three .heading {
          position: relative;
          top: 0;
          height: 30vh;
          width: 100%;
          background-color: white;
        }
        .three .subheading {
          position: relative;
          top: 0;
          height: 70vh;
          width: 100%;
          background-color: #fcc64a;
          overflow: hidden;
          text-align: center;
        }
        .three #white2 h1{
          color: #fcc64a;
          font-size: 90px;
          position: relative;
          bottom: 52.5vh;
          left: 5vw;
          padding-top: 67vh;
        }
        .three #orange p{
          color: white;
          font-size: inherit;
          position: absolute;
          width: 45vw;
          font-size: 20px;
          left: 50vw;
          text-align: justify;
          padding-top: 2vh;
          line-height: auto;
        }
        @media (max-width:1633px){
          .span4 {
            visibility:hidden;
          }
        }
        @media (max-width:1180px){
          .span3 {
            visibility:hidden;
          }
        }
        @media (max-width:967px){
          .span2 {
            visibility:hidden;
          }
        }
        @media (max-width:667px){
          .span1 {
            visibility:hidden;
          }
        }
        @media(max-width:600px) {
          .map2 {
            top: 60vh;
            left: 5vw;
            margin: auto;
            text-align: center;
            width: 88vw;
            height: 34.5vh;
            overflow: hidden;
            }
            .two .span1{
              visibility: hidden;
            }
            .two .SE{
              visibility: hidden;
            }
          .two #white p{
            width: 89vw;
            font-size: 20px;
            left: 5vw;
            margin: auto;
          }
          .two #orange h1{
            text-align: center;
            bottom: 52.5vh;
            font-size: 48px;
            left: 0vw;
          }
          .three #orange p{
            width: 90vw;
            font-size: 20px;
            left: 4vw;
            margin: auto;
          }
          .span1{
            visibility: visible;
          }

          .three #white2 h1{
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

        }
        @media (max-width:469px){
          .span1 {
            visibility:hidden;
          }
          .two .s8{
            visibility: hidden;
          }
        }
        @media(max-height:1000px)
        {
          .span4 {
            visibility: hidden;
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
        .four {
          background-image: url('img4.jpg');
          height: 100vh;
          background-size: 250%;
          flex-direction: column;
          flex:1;
        }
        .four .box {
          position: relative;
          width: 450px;
          height: 300px;
          display: inline-block;
          background-color: white;
          margin-top: 20vh;
          box-shadow: 2px 2px 30px rgba(0,0,0,0.4);
          justify-content: center;
        }
        .four .box h1{
          color: #A83C56;
          padding-top: 0vh;
          text-align: center;
          font-size: 50px;
          margin: 0;
          padding: 0;
          position: relative;
          height: 120px;
        }
        .four .box p{
          width: 100%;
          color: #A83C56;
          text-align: center;
          font-size: 16px;
          position: relative;
          margin: 0;
          padding: 0;
        }
        .two button{
          width:141.05px;
          margin:0 auto;
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
          background: #7CCBDC;
          filter: brightness(95%);
          color: #fff;
          z-index: 1;
        }
        .two button:hover{
          filter: brightness(110%);
        }
        .three button{
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
          z-index: 2;
        }
        .three a{
          margin: 0 auto;
          text-align:center;
        }
        .three button:hover{
          filter: brightness(110%);
        }

        .four .box button{
          margin-top: 30px;
          margin-left: 160px;
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
          background: #A83C56;
          color: #fff;
        }

        .four .box button:hover{
          background-color: #CC4969;

        }
        @media (min-width:601px) {
          .three button{
            left: 72%;
            transform: translateX(-50%);
          }
          .two button{
            left: 26%;
            transform: translateX(-50%);
          }
        }
        @media(max-width:600px){
          .four .box{
            width: 350px;
            height: 300px;
          }
          .four .box button{
            margin-left: 110px;
          }
          .four .box p {
            font-size: 16px;
          }
          .three button{
            width:141.05px;
            margin:0 auto;
            text-align:center;
            top: 69%;
          }
          .two button{
            top: 51.5%;
            width:141.05px;
            margin:0 auto;
            text-align:center;
          }
          .three a{
            z-index: 2;
          }
        }

        .four .footer {
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
            .slides {
                width: 500%;
                height: 100vh;
                display: flex;
                position: absolute;
            }

            .slides input {
                display: none;
            }

            .slide {
                width: 20%;
                transition: 2s;
            }

            .slide img {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
            }

            .navigation-manual {
                position: absolute;
                width: 100vw;
                margin-top: 87.2vh;
                display: flex;
                justify-content: center;
            }

            .manual-btn {
                border: 0.125em solid white;
                padding: 0.3125em;
                border-radius: 0.625em;
                cursor: pointer;
                transition: 1s;
                /*margin-top: 40%;*/
            }

            .manual-btn:hover {
                background-color: white;
                cursor: pointer;
            }

            .manual-btn:not(:last-child) {
                margin-right: 20px
            }


            #radio1:checked~.first {
                margin-left: 0;
            }

            #radio2:checked~.first {
                margin-left: -20%;
            }

            #radio3:checked~.first {
                margin-left: -40%;
            }

            #radio4:checked~.first {
                margin-left: -60%;
            }

            .navigation-auto {
                position: absolute;
                display: flex;
                width: 100vw;
                justify-content: center;
                margin-top: 87.2vh;
                /*border: red solid 5px;*/
            }

            .navigation-auto div {
                border: 2px solid white;
                padding: 5px;
                border-radius: 10px;
                transition: 1s;
            }

            .navigation-auto div:not(:last-child) {
                margin-right: 20px;
            }

            #radio1:checked~.navigation-auto .auto-btn1 {
                background-color: white;

            }

            #radio2:checked~.navigation-auto .auto-btn2 {
                background-color: white;

            }

            #radio3:checked~.navigation-auto .auto-btn3 {
                background-color: white;
            }

            #radio4:checked~.navigation-auto .auto-btn4 {
                background-color: white;
           }
           svg {
               width: 100vw;
               position:absolute;
               top: 50%;
               left: 0;
               height: 50vh;
               overflow: hidden;
             }
             svg text {
               font-family: Biko, sans-serif;
               font-weight: 700;
               text-transform: uppercase;
               font-size: 2.5vw;
             }
             svg rect {
                 left: 50vw;
                 width: 100vw;
                 height: 50vh;
                 fill: white;
             }
             svg > rect {
                 -webkit-mask: url(#mask);
                 mask: url(#mask);
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
               z-index: 4;
               display: inline-block;
               font-size: 60px;
               text-align: center;
               margin-bottom: 4px;
               padding-top: 5vh;
               font-weight: bold;
               color: white;
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
      <div class="svg-cover">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 80" preserveAspectRatio="xMidYMid slice">
            <defs>
                <mask id="mask" x="0" y="0" width="100%" height="100%">
                    <rect x="0" y="0" width="100%" height="100%" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">PADSTOW</text>

                </mask>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" />
        </svg>
      </div>
      <div class="content">
        <div class="slides" id="#home">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="img1.jpg" alt="Children holding watering can">
            </div>
            <div class="slide">
                <img src="img2.jpg" alt="Interior of Padstow Child Care Centre">
            </div>
            <div class="slide">
                <img src="img3.jpg" alt="Children drawing and colouring">
            </div>
            <div class="slide">
                <img src="img4.jpg" alt="Children playing with plants">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
    </section>
    <section class="two">
        <div class="heading" id="orange">
          <h1>About us:</h1>
        </div>
        <div class="subheading" id="white">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo bibendum, egestas enim non, gravida eros. <span class="s8">Aenean euismod odio et urna pharetra, a feugiat nisl iaculis. Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices. Nulla facilisi.</span><span class="SE">Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span><span class="span1"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span><span class="span2"><br></br>Nulla facilisi. Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span> <span class="span3"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span></p></div>
          <!--<a href="Aboutus.html"><button type="button">Read more</button></a>-->
          <button type="button" onclick="document.location='Aboutus.html'">Read more</button>
        <div class="map2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9360.667303431694!2d151.01754078541313!3d-33.95409744505719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bee80170a93d%3A0x508110eec7ed59aa!2s41%20McGirr%20St%2C%20Padstow%20NSW%202211!5e0!3m2!1sen!2sau!4v1650953092196!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="three">
      <div class="heading" id="white2">
        <h1>Our services:</h1>
      </div>
      <div class="subheading" id="orange">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in leo bibendum, egestas enim non, gravida eros. Aenean euismod odio et urna pharetra, a feugiat nisl iaculis. Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices. Nulla facilisi. <span class="SE">Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span><span class="span1"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span><span class="span2"><br></br>Nulla facilisi. Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero.</span><span class="span3"><br></br> Praesent tellus sapien, consequat eu nibh a, facilisis blandit eros. Nullam cursus nec tortor fringilla ultrices.</span><span class="span4"><br></br>Nulla facilisi. Donec mattis, turpis sit amet commodo cursus, arcu nibh finibus sapien, id hendrerit elit quam id libero. Vestibulum in leo bibendum, egestas enim non, gravida eros. Aenean euismod odio et urna pharetra, a feugiat nisl iaculis.</span></p>
        </div>
      <button type="button" onclick="document.location='Ourservices.html'">Read more</button>
      <div class="animatednum">
        <div class="small-container" id="one"><p>Classes</p></div>
        <div class="line"></div>
        <div class="small-container" id="two"><p>Staff</p></div>
        <div class="line"></div>
        <div class="small-container" id="three"><p>Graduates</p></div>
        <div class="line" id="last"></div>
  </div>
    </section>
    <section class="four">
      <img alt="Children playing with plants" style="display:none;">
        <div class="box">
        <h1>Applications</h1>
        <p>Applications are open now! Don't miss your chance to enrol your child at Padstow</p>
        <a href="Applications.html"><button type="button">Enrol now</button></a>
        </div>
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
