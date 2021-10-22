<?php

$link = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok");
if(!$link){
	echo "Error: Unable to connect to MySql" . PHP_EOL;
	echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
	echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
	exit;
}else{
    
    $sql = "select * from tb_usuario where id_usuario='7'";
    $result = mysqli_query ($link, $sql);
}

?>
