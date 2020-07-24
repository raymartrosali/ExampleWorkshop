<!DOCTYPE html>
<html>
    <head>
        <title>Flair Beauty - My Bag</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--bootstrap-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"><!--fontfamily-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--fontawesome-->
        <link href="../code/fontawesome/css/all.css" rel="stylesheet"><!--load all styles -->
        <link href="css/mine.css" rel="stylesheet">
        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        </script><!--jQuery-->
        <script src="js/myjs.js">
        </script>
        <style>
        html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
        .mySlides {display:none}
        .w3-tag, .fa {cursor:pointer}
        .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
        </style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-large w3-black">
      <img src="../code/img/flairheadingminn.png" class="center">
      </div>
  </div>
  <div class="w3-container w3-hide-small w3-hide-medium">
      <br><br>
  </div>
<!-- Bag Page -->
    <div class="w3-container " id="">
        <div class="w3-center w3-padding-64" id="contact">
            <span class="w3-xlarge w3-bottombar w3-border-pale-red w3-padding-16">My Bag</span>
        </div> 
        <!--Bag Details--> 
        <div class="w3-display-container border_gold padding_small w3-padding-32">        
            <?php include 'getbag.php'; ?>
            <br>
            <button class="w3-button w3-block bg_pink" onclick="document.getElementById('id04').style.display='block'">
                Confirm Booking
            </button>
            <!--modal-->
            <div id="id04" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                    <div class="w3-center"><br>
                        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                        <!--<img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">-->
                    </div>

                    <form class="w3-container" action="/action_page.php">
                        <div class="w3-section">
                        <label><b>Enter Date of Appointment</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Enter Username" name="usrname" required>
                        <label><b>Enter Time</b></label>
                        <input class="w3-input w3-border" type="time" placeholder="Enter Password" name="psw" required> 
                        <input class="w3-check w3-margin-top" type="checkbox"> Request for Home Service
                        <br>
                        <button class="w3-button w3-block bg_pink   w3-section w3-padding" type="submit">Confirm Booking Details</button>
                        </div>
                    </form>

                    <!--<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <button onclick="document.getElementById('id04').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                    </div>-->

                </div>
            </div>
            <!--/modal-->
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
<!-- Footer Links (sit on bottom) -->
<div class="w3-bottom">
    <div class="w3-container"> <!--holder for outside effect-->
        <div class="w3-row pricetotal border_gold bg_white txt_gold w3-padding-small">
            <div class="w3-col s6">
                <p><b>Total:</b></p>
            </div>
            <div class="w3-col s6 w3-right-align">
                <p id="containertotal">
                    250 AED
                </p>
            </div>
        </div>
    </div>
    <div class="w3-row w3-small bg_pink ">
      <div class="w3-col s3">
        <a href="index.html" class="w3-button w3-block">
            <i class="fas fa-home"></i>
			<br>
			Home
		</a>
      </div>
      <div class="w3-col s3">
        <a href="services.php" class="w3-button w3-block">
            <i class="fas fa-search"></i>
			<br>
			Services
		</a>
      </div>
      <div class="w3-col s3">
        <a href="bag.php" class="w3-button w3-block btn_black">
            <i class="fas fa-shopping-bag"></i>
            <br>
            Bag
        </a>
      </div>
      <div class="w3-col s3">
        <a href="account.html" class="w3-button w3-block ">
            <i class="fas fa-user-alt"></i>
            <br>Account
        </a>
      </div>
    </div>
</div><!-- /Footer -->
  

</body>
</html>