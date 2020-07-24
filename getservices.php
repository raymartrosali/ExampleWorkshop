<!DOCTYPE html>
<html>
<title>Flair Beauty - Services</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--bootstrap-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"><!--fontfamily-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--fontawesome-->
<link href="../code/fontawesome/css/all.css" rel="stylesheet"><!--load all styles -->
<link href="mine.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
</script><!--jQuery-->
<script src="myj.js"></script> 
<style>
    html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
    .mySlides {display:none}
    .w3-tag, .fa {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
<?php
include 'connection.php';

$btnval = intval($_GET['srvc']);

$result = "SELECT * FROM FB_SERVICES WHERE SRVC_TYPE = '".$btnval."' ";

$srvc_result = $conn -> query($result);
    while ($srvc_row = $srvc_result -> fetch_assoc()){ 
        $srvc_name = $srvc_row['SRVC_NAME'];
        $price = $srvc_row['PRICE'];
        $id = $srvc_row['SRVC_ID'];
            echo '<div class="w3-row w3-border-top w3-border-pale-red"> 
                    <button class="w3-button w3-block w3-left-align hahaha" value="',$id,'">
                        <div class="w3-col s9 textservice">
                            <p>
                                <i class="far fa-heart" style="width: 20px"></i>
                                <b >',$srvc_name,'</b>
                            </p>
                        </div>
                        <div class="w3-col s3 w3-right-align textprice">
							<p>',$price,' AED </p>
                        </div> 
                    </button>
                  </div>
                '; 
	}
		
mysqli_close($conn);

//onclick="saveService(this.value)"
//<button class="hahaha w3-button w3-block w3-left-align" value="',$id,'">
//<i class="fas fa-heart"></i>
?>
</body>
</html>