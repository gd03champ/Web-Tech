<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<html>




<head>
    <title>
        Home | MK Travels
    </title>

    

    <link rel="stylesheet" href="css/rbus.css">
    <link rel="stylesheet" href="css/sbox.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/butt.css">
    <link rel="stylesheet" href="css/foot.css">
    <link rel="stylesheet" href="css/bus.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Supermercado+One&display=swap');

        #background-video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
            filter: brightness(25%);
        }

/* CSS for Mobile adaptive display*/
.mobileHide { display: inline;}
/* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){  .mobileHide { display: none;}}

@media (max-width: 575.98px) {
  .HideOnMobile {
    display: none;
  }
  .ShowOnMobile {
    display: initial;
  }
}

@media (min-width: 576px) {
  .HideOnMobile {
    display: initial;
  }
  .ShowOnMobile {
    display: none;
  }
}


    </style>

    <script>

        var isdis=false;

        function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "hint.php?q=" + str, true);
        xmlhttp.send();
      }
    }

        function avv(){
            document.getElementById('av').innerHTML="Available Cities";
        }

    </script>


  <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  <label for="menu-icon"></label>
  <nav class="nav"> 		
      <ul class="pt-5">
        <li><a href="http://localhost/travels/">Home</a></li>
        <li><a href="mybooks.php">My Bookings</a></li>
          <li><a href="locate.html">Locate Us</a></li>
          <li><a href="game/game.html">Kids Side</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
  </nav>

    <video id="background-video" autoplay loop muted poster="">
        <source src="vid/bg0.mp4" style="" type="video/mp4">
    </video>

</head>

<body>
    
<div class="form">
        <p style='color:aliceblue; margin-top: 1%; margin-left: 1%; font-size: 150%;'>Hey, <?php echo $_SESSION['username']; ?>!</p>
       
    </div>


<div>
    <h1 class="mb-0">MK TRAVELS</h1>
    <!--<p style="color: white; text-align: center; font-family: 'Comforter', cursive; font-size: 200%;">when you gotta go</p>-->
</div>

<p id="av" style="color: aliceblue; text-align: center;"></p>
<p style="color: aliceblue; text-align: center;"><span id="txtHint"></span></p>

<br>

<!--<p style="color: white; text-align: center; font-size:200%;">Search busses anywhere on the go!</p>-->

<center>
    <div>
        <form action="insert-book.php" method="post">


        <div class="col-3">
            <input name="from" onkeyup="showHint(this.value)" class="effect-9" type="text" placeholder="From">
            <span class="focus-border"><i></i></span></div>
        <div class="col-3">
            <input name="to" onkeyup="showHint(this.value)" class="effect-9" type="text" placeholder="To">
            <span class="focus-border"><i></i></span>
        </div>

    <button type="submit" class="button-82-pushable" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span id="search-button" class="button-82-front text">
      Book
    </span>
  </button>
    </div>
    </form>
    <p id="res-dis"></p>

</center>


<br><br><br><br><br><br>

<div class="main-body">
    <section id="stats_div">
        <div>
            <div class="stats-header heading-1 main-header-family rest1 animate">
                The numbers are growing!
            </div>
            <div class="clearfix stats-v-holder">
                <div class="fl">
                    <div>
                        <div class="sp rest1 animate">CUSTOMERS</div>
                        <div class="sv rest1 animate">36 M</div>
                        <div class="common-desc second-level-heading rest1 animate">MK Travels is trusted by over 36 million happy customers globally</div>
                    </div>
                </div>
                <div class="fl">
                    <div>
                        <div class="sp rest1 animate">OPERATORS</div>
                        <div class="sv rest1 animate">3500</div>
                        <div class="common-desc second-level-heading rest1 animate">network of over 3500 bus operators worldwide</div>
                    </div>
                </div>
                <div class="fl">
                    <div>
                        <div class="sp rest1 animate">BUS TICKETS</div>
                        <div class="sv rest1 animate">220+ M</div>
                        <div class="common-desc second-level-heading rest1 animate">Over 220 million trips booked using redBus</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--<div class="aw main-body">
    <div class="ah heading-1 main-header-family rest1 animate">
        <div class="dib"><img src="https://s1.rdbuz.com/web/images/home/promise.png" height="100"></div>
        <div class="promise-head-main"> We promise to deliver</div>
    </div>
    <div class="ad rest1 animate">
    </div>
    <div class="clearfix aa our-promise-blocks" id="advantage">
        <div class="fl rest1 appear-first aa-25 animate">
            <div class="imgCont rest1 animate">
                <img src="https://s3.rdbuz.com/Images/safety/srp/safety.svg" height="90">
            </div>
            <div class="tilleBlock rest1 animate">
                SAFETY+
            </div>
            <div class="second-level-heading descCont rest1 animate">
                With Safety+ we have brought in a set of measures like Sanitized buses, mandatory masks etc. to ensure you travel safely.
            </div>
        </div>
            <div class="fl rest1 appear-second aa-25 animate">
                <div class="imgCont rest1 animate">
                    <img src="https://s1.rdbuz.com/web/images/home/customer_care.png" height="100">
                </div>
                <div class="tilleBlock rest1 animate">
                    SUPERIOR CUSTOMER SERVICE
                </div>
                <div class="second-level-heading descCont rest1 animate">
                    We put our experience and relationships to good use and are available to solve your travel issues.
                </div>
            </div>
        <div class="fl rest1 appear-third aa-25 animate">
            <div class="imgCont rest1 animate">
                <img src="https://s1.rdbuz.com/web/images/home/lowest_Fare.png" height="90">
            </div>
            <div class="tilleBlock rest1 animate">
                LOWEST PRICES
            </div>
            <div class="second-level-heading descCont rest1 animate">
                We always give you the lowest price with the best partner offers. 
            </div>
        </div>
        <div class="fl rest1 appear-fourth aa-25 animate">
            <div class="imgCont rest1 animate">
                <img src="https://s2.rdbuz.com/web/images/home/benefits.png" height="90">
            </div>
            <div class="tilleBlock rest1 animate">
                UNMATCHED BENEFITS
            </div>
            <div class="second-level-heading descCont rest1 animate">
                We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
            </div>
        </div>
    </div>
</div>-->

<!--Footer-->
<div class="mobileHide">
    <br><br><br><br><br><br>
    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="facebook.com">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="twitter.com">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="linkedin.com">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="instagram.com">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
      </ul>
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="http://localhost/travels/">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="http://localhost/travels/locate.html">Locate Us</a></li>
        <li class="menu__item"><a class="menu__link" href="http://localhost/travels/game/game.html">Kids Side</a></li>
        <li class="menu__item"><a class="menu__link" href="http://localhost/travels/feedback.html">Feedback</a></li>
  
      </ul>
      <p>&copy;2022 MK Travels | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </div>
  



</body>
</html>