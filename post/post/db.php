<?php
    $db = mysqli_connect("localhost","root","","house_office");
    if(mysqli_connect_error()){
        echo "failed to connect".mysqli_connect_error();
    }

$connect = mysqli_connect('localhost', 'root', '', 'house_office');

if (!$connect) {
    exit('connection failed for database ...');
}
?>