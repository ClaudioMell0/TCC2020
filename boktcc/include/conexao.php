<?php
$link = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok","Bok_12345","bok", "3306");
if(!$link){
    echo "Error: Unable to connect to MySql" . PHP_EOL;
    echo "Debugging errno:" . myslqi_connect_errno() . PHP_EOL;
    echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>