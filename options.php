<option value="">Select a person:</option>
<?php

$con = mysqli_connect('localhost','root','','fb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM sampleajax";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) { 
    echo "<option value=" . $row['id'] . ">" . $row['firstname'] . " " . $row['lastname'] . "</option>";
} 
mysqli_close($con);

?>