<?php
include 'connection.php';
$id = intval($_GET['id']);
$selectsql = "SELECT * FROM fb_booked_services where SRVC_ID = '$id' LIMIT 1";
$sql = $conn->query($selectsql);

//existing:
if ($sql -> num_rows>0){
    $deletesql = "DELETE FROM fb_booked_services where SRVC_ID = '$id' ";
    if ($conn->query($deletesql)===TRUE){
        echo 'deleted';
    }
}else{
    //not existing
    $insertsql = "INSERT INTO fb_booked_services (SRVC_ID) VALUES ('$id')";
    if ($conn->query($insertsql)===FALSE){
        echo "Error: " . $insertsql . "<br>" . $conn->error;
    }
    echo 'inserted';
}

mysqli_close($conn);
?>