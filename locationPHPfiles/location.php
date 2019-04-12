<?php
if(isset($_REQUEST['location'])){
    include_once("functions.php");
    if(isset($_REQUEST['longitude'])){
        $longitude = strval(strip_tags($_REQUEST['longitude']));
    }

    if(isset($_REQUEST['latitude'])){
        $latitude = strval(strip_tags($_REQUEST['latitude']));
    }

    if(($longitude && $latitude) && $latitude !== "" && $longitude !== ""){
        $conn = get_connection_handle();
        $stmt = $conn->prepare("insert into location(longitude, latitude) 
        values(?,?)");
        $stmt->bind_param("ii", $longitude, $latitude);
        $stmt->execute();
        if($stmt->affected_rows == 1){
            echo "Location has been recorded";
        }
    }
}
