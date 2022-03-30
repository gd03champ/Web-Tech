<?php
//include auth_session.php file on all user panel pages
include("..//auth_session.php");
?>

<html>

<head>

    <link rel="stylesheet" href="http://localhost/travels/css/foot.css">


    <style>
        /*CSS for Adaptive display*/
.mobileHide { display: inline;}
/* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){  .mobileHide { display: none;}}
       

/* CSS */
.button-29 {
  align-items: center;
  appearance: none;
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}



        /*Grid css*/
        .grid-container {
            display: grid;
            grid-template-columns: repeat(18, auto);
            ;
            background-color: #ed1c24;
            position: relative;
            width: 1295px;
            height: 90px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
            width: 30px;
            height: 30px;
        }

        #animate {
            padding: 4px;
            width: 62px;
            height: 62px;
            position: absolute;
            top: 0px;
            left: 0px;
        }

        #animate1 {
            padding: 4px;
            width: 62px;
            height: 62px;
            position: absolute;
            top: 0px;
            left: 0px;
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>The Dice Race</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
</head>

<body>
    <center>
        <h1 style="color:red;">THE DICE RACE<h1>
    
    <div id='score'></div>
    <br>
    <img alt="Dice" id="die" src="dice1.png" width="120" height="120"><br>

    <button class="button-29" onclick="AniDice()" role="button">Roll</button>
    <button class="button-29" onclick="stopDice()" role="button">Stop</button>
    <br><br>

    <div class="grid-container">
        <div id="animate"><img alt="Car 1" src="car1.png" style="width: 60px; height: 60px;"></div>
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div>
        <div class="grid-item">10</div>
        <div class="grid-item">11</div>
        <div class="grid-item">12</div>
        <div class="grid-item">13</div>
        <div class="grid-item">14</div>
        <div class="grid-item">15</div>
        <div class="grid-item">16</div>
        <div class="grid-item">17</div>
        <div class="grid-item">End</div>
    </div>

    <br>
    <div id='scor'></div>
    <br>
    <img id="di" alt="Dice" src="dice1.png" width="120" height="120"><br>

    <button class="button-29" role="button" onclick="AniDic()">Roll</button>
    <button class="button-29" role="button" onclick="stopDic()">Stop</button>
    <br><br>
    <div class="grid-container">
        <div id="animate1"><img alt="Car 2" src="bike.png" style="width: 60px; height: 60px;"></div>
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>
        <div class="grid-item">7</div>
        <div class="grid-item">8</div>
        <div class="grid-item">9</div>
        <div class="grid-item">10</div>
        <div class="grid-item">11</div>
        <div class="grid-item">12</div>
        <div class="grid-item">13</div>
        <div class="grid-item">14</div>
        <div class="grid-item">15</div>
        <div class="grid-item">16</div>
        <div class="grid-item">17</div>
        <div class="grid-item">End</div>
    </div></center>

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

    <script>
        var pos = 0;
        var score = 0;
        var currentpos = 1;
        function myMove(x) {
            var nextBox = pos + (72 * x);
            var elem = document.getElementById("animate");


            var id = setInterval(frame, 5);
            function frame() {
                if (pos >= nextBox) {
                    clearInterval(id);
                }
                else {
                    pos += 1;
                    elem.style.left = pos + "px";
                }
            }
        }
        var dice2;
        function AniDice() {
            myVar = setInterval(rolldice, 20)
        }

        function rolldice() {
            var ranNum = Math.floor(1 + Math.random() * 6);
            var dice = document.getElementById("die");
            dice.src = "dice" + ranNum + ".png";
            dice2 = ranNum;
        }
        function stopDice() {
            clearInterval(myVar);
            if ((currentpos + dice2) <= 18) {
                myMove(dice2);
                currentpos += dice2;
                score += 100 * dice2;
                document.getElementById("score").innerHTML = "<?php echo $_SESSION['username']; ?> Score: " + score;
            }
        }

    </script>
    <script>
        var pos1 = 0;
        var scor = 0;
        var currentpos1 = 1;
        function myMov(n) {
            var nextBox = pos1 + (72 * n);
            var elem = document.getElementById("animate1");


            var id = setInterval(frame, 5);
            function frame() {
                if (pos1 >= nextBox) {
                    clearInterval(id);
                }
                else {
                    pos1 += 1;
                    elem.style.left = pos1 + "px";
                }
            }
        }

        var diceOutput = 0;

        function AniDic() {
            myVar = setInterval(rolldic, 20)
        }

        function rolldic() {
            var ranNum = Math.floor(1 + Math.random() * 6);
            var dice = document.getElementById("di");
            dice.src = "dice" +ranNum + ".png";
            diceOutput = ranNum;
        }
        function stopDic() {
            clearInterval(myVar);
            if ((currentpos1 + diceOutput) <= 18) {
                myMov(diceOutput);
                currentpos1 += diceOutput;
                scor += 100 * diceOutput;
                document.getElementById("scor").innerHTML = "Player 2 Score: " + scor;
            }

        }

    </script>








</body>

</html>