<!DOCTYPE html>
<html>
<title>Flair Beauty</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--bootstrap-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"><!--fontfamily-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--fontawesome-->
<link href="../code/fontawesome/css/all.css" rel="stylesheet"><!--load all styles -->
<link href="css/mine.css" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
</script><!--jQuery-->
<script src="js/myjss.js">
</script>
<body>

<?php 		
//fetch services 
$result = "SELECT * FROM FB_SERVICES WHERE SRVC_TYPE = '1' ORDER BY SRVC_NAME ASC ";
$srvc_result = $conn -> query($result);
    while ($srvc_row = $srvc_result -> fetch_assoc()){ 
        $srvc_name = $srvc_row['SRVC_NAME'];
        $price = $srvc_row['PRICE'];
        $id = $srvc_row['SRVC_ID'];
        $savedsql = "SELECT * FROM fb_booked_services WHERE SRVC_ID = $id";
        $savedresult = $conn -> query($savedsql);
        if ($savedresult -> num_rows>0){
            $savedclass = "bg_pink";
            $savedicon = "fas";
        }else{
            $savedclass = "normal";
            $savedicon = "far";
        }
        //booked services, if srvc id is existing in the Booed services, add a class. lets define the class in the css as the BG pink and heart icon as solid

            echo '<div class="w3-row w3-border-top w3-border-pale-red">
                    <button class="w3-button w3-block w3-left-align srvc_row ',$savedclass,'" value="',$id,'">
                        <div class="w3-block textservice" style="padding: 0px; margin-bottom: 0px">
                            <p style="margin-bottom: 0px">
                                <i class="srvc_heart ',$savedicon,' fa-heart" style="width: 20px"></i>
                                <b>',$srvc_name,'</b>
                            </p>
                        </div>
                        <div class="w3-block w3-right-align textprice" >
							<p style="margin-top: 0px">',$price,' AED </p>
                        </div>
                    </button>
                </div> '; 
    }
    
				
?>
</body>
</html>