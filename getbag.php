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
<script src="css/myjs.js"></script> 
<style>
    html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
    .mySlides {display:none}
    .w3-tag, .fa {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
<?php
include 'connection.php';
 
$result = "SELECT SRVC_ID FROM fb_booked_services fbs";

$srvc_result = $conn -> query($result);
    while ($srvc_row = $srvc_result -> fetch_assoc()){ 
        $srvc_id = $srvc_row['SRVC_ID'];
        $detail_sql = "SELECT SRVC_NAME, PRICE FROM fb_services WHERE SRVC_ID = $srvc_id";
        $detail_sql_result = $conn -> query($detail_sql);
        $detail_sql_row = $detail_sql_result -> fetch_assoc();
        $srvc_name = $detail_sql_row['SRVC_NAME'];
        $price = $detail_sql_row['PRICE']; 
            echo '<div class="w3-row">
                    <div class="w3-col s9 margin-none">
                        <p class="margin-none">
                            <b>',$srvc_name,'</b>
                        </p>
                    </div>
                    <div class="w3-col s3 ">
                        <p><span class="totamount">',$price,'</span> AED</p>
                    </div>
                    <div class="textaddtobag w3-small w3-button w3-block btnremove w3-right-align">
                        <i class="fas fa-minus"></i> remove
                    </div>
                </div>   
                '; 
	}
		
mysqli_close($conn); 
?>
</body>
</html>

