<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rewards.css">
    <title>Document</title>
</head>
<body>

    <div class="wrapper">
        <div class="button" onclick="document.body.classList.add('active')">
            <center><span class="button-text">Claim Rewards</span></center>
            <div class="button-backgrounds">
                <div class="button-circle button-circle1"></div>
                <div class="button-circle button-circle2"></div>
                <div class="button-circle button-circle3"></div>
                <div class="button-circle button-circle4"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="popup">
            <div class="popup-inside">
                <div class="backgrounds">
                    <div class="background"></div>
                    <div class="background background2"></div>
                    <div class="background background3"></div>
                    <div class="background background4"></div>
                    <div class="background background5"></div>
                    <div class="background background6"></div>
                </div>
            </div>
            <div class="content">
                <div class="content-wrapper">
                    <h1>CONGRATULATIONS 🎉🎉</h1>
                    <!-- <p></p> -->
                    <img src="img/thankyou.jpeg" alt="Autorickshaw" width="210px" height="180px">
                    <img src="img/level1.jpeg" alt="Autorickshaw" width="180px" height="180px">
                    <p class="try-again" onclick="document.body.classList.remove('active');myFunction()">Go Back</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
          window.location.href="Donordashboard.php";  
        }
      </script>
</body>
</html>



