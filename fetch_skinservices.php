<?php 		
//fetch services 
$result = "SELECT * FROM FB_SERVICES WHERE SRVC_TYPE = '3' ORDER BY SRVC_NAME ASC ";
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