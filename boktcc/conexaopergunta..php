<?php 
$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok");
if(!$conecta){
	echo "Error: Unable to connect to MySql" . PHP_EOL;
	echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
	echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
	exit;
}else{
    
    $sql = "select * from tb_perguntas";
    $result = mysqli_query ($conecta, $sql);
}


$query = ("SELECT * FROM tb_perguntas WHERE st_materia = 'Espanhol' ORDER BY RAND() limit 1");
    //echo $query; 
  
    $retorno = mysqli_query($link,$query);
    $row  = mysqli_fetch_assoc($retorno);
    //echo  mysqli_num_rows($retorno);
    mysqli_num_rows($retorno);{
    
        $_SESSION['pergunta'] ="";
      
    }else{
        
         $_SESSION['pergunta'] = $row ["st_pergunta"];
       
 
   
    }
}
?>

