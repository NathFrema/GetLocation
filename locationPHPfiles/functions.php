<?php
include_once 'Connection.php';

function get_connection_handle(){
    $con = new Connection();
    $conn = $con->connect();
    if($conn){
        return $conn;
    }
}
?>
