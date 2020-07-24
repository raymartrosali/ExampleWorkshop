<!DOCTYPE html>
<html>
<title>Flair Beauty - Services</title>
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
  crossorigin="anonymous">
</script><!--jQuery-->
<script src="js/myjs.js"></script>
<style>
    html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
    .mySlides {display:none}
    .w3-tag, .fa {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
<!-- Links (sit on top) -->
<div class="w3-top w3-white">
    <div class="w3-large w3-black">
      <img src="../code/img/flairheadingminn.png" class="center">
    </div>
    <br>
    <div class="w3-container">
        <div class="w3-center" id="contact">
            <span class="w3-xlarge w3-bottombar w3-border-pale-red w3-padding-16">Services</span>
        </div>
        <div class="w3-row toppadding">
            <button class="w3-col s3 w3-button border_pink bg_pink" id="btnservice_hc">
                <span class="txt_grey">
                Hair Care
                </span>
            </button> 
            <button class="w3-col s3 w3-button bg_none border_pink" id="btnservice_nc">
                <span class="txt_grey">
                Nail Care
                </span>
            </button> 
            <button class="w3-col s3 w3-button bg_none border_pink" id="btnservice_sc">
                <span class="txt_grey">
                Skin Care
                </span>
            </button> 
            <button class="w3-col s3 w3-button bg_none border_pink" id="btnservice_s">
                <span class="txt_grey">
                Spa
                </span>
            </button>         
        </div>
    </div>
</div> 
<br><br><br><br><br><br><br><br>
<!-- Content: services--> 
<div class="w3-container">
	<?php include 'fetch_services.php'; ?>
	<div class="border_pink padding_small" id="divservice_hc">
		<?php include 'fetch_hairservices.php'; ?>		             
    </div><!-- /divservice_hc:-->
	<div class="border_pink padding_small " id="divservice_nc">
		<?php include 'fetch_nailservices.php'; ?>		     
    </div><!-- /divservice_nc:-->
	<div class="border_pink padding_small " id="divservice_sc" >
		<?php include 'fetch_skinservices.php'; ?>		     
	</div><!-- /divservice_sc:-->
	<div class="border_pink padding_small " id="divservice_s" >
		<?php include 'fetch_spaservices.php'; ?>	
	</div><!-- /divservice_s:-->
    <br><br><br><br>
</div><!--/Services Page--> 

<!-- Footer Links (sit on bottom) -->
<div class="w3-bottom">
    <div class="w3-row w3-small bg_pink ">
      <div class="w3-col s3">
        <a href="index.html" class="w3-button w3-block">
            <i class="fas fa-home"></i>
            <br>
            Home
        </a>
      </div>
      <div class="w3-col s3">
        <a href="services.php" class="w3-button w3-block btn_black">
            <i class="fas fa-search"></i>
			<br>
			Services
		</a>
      </div>
      <div class="w3-col s3">
        <a href="bag.php" class="w3-button w3-block">
            <i class="fas fa-shopping-bag"></i>
            <br>
            Bag
        </a>
      </div>
      <div class="w3-col s3">
        <a href="account.html" class="w3-button w3-block">
            <i class="fas fa-user-alt"></i>
            <br>Account
        </a>
      </div>
    </div>
</div><!-- /Footer -->
  

</body>
</html>