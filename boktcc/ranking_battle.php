<?php

$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok","Bok_12345","bok", "3306");

                     if(!$conecta){
                         echo "Error: Unable to connect to MySql" . PHP_EOL;
                         echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
                         echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
                         exit;
}else{

//$result_query = mysqli_query("SELECT COUNT(id_usuario) FROM tb_usuario") or die(' Erro na contagem de campos do banco de dados' . mysql_error() );
//while ($row = mysqli_fetch_array( $result_query ));



     
$sql = "select * from tb_ranking_usuario";
$result = mysqli_query ($conecta, $sql);
$posicao = 0;


$query = " select b.st_nome, b.st_sobrenome, a.st_acertos_battleroyale, case when flag_ativo = 0 then 'Perdeu' else 'Jogando' end as status
from bok.tb_battleroyale_usuario a 
    inner join tb_usuario b on b.id_usuario = a.id_usuario
    where a.id_battleroyale = 1
order by st_acertos_battleroyale desc";


$retorno = mysqli_query($conecta,$query);

}
?>

<?php
include 'include/sessao.php';
$foto = $_SESSION['foto'];

?>







<html>
    

    <style>

body{
   
    

    background-image: linear-gradient(to top, #ece9e6, #ffffff);
    background-repeat: no-repeat;
   
    align-items: center;

    margin:0;
    padding:0;

    font-family:sans-serif;
}




.Card{
    width:90%;
    margin-top:7%;
    margin-left:auto;
    margin-right:auto;
    padding:10px;
    position: relative;

     background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);
    border-radius:20px;

    display:flex;
    justify-content: center;
    flex-direction:column;
}
.Card header{
    display:flex;
    flex-direction:column;
}
.Card header #TableInfo{
    display: flex;
    flex-direction:row;
}
#TableInfo .info{
    margin-top:1%;
    width: 33.33%;
    color: #FFF;
}

.Card p{
    width: 90%;
    color: #FFF;

    font-weight: bold;
}

content{
    width: 100%;
    background:;
    
}
.row{
    background:#FFF;
    width:96%;
    padding:2%;

    display:flex;
    flex-direction:row;
    border-radius:10px;

     height: 30px;
     overflow: hidden
    
    

    border-bottom: 1px solid gray;
}
.row .col{
    width: 25%;
    
}

.col{border:1px solid;
border-left: none;
border-top: none;
border-bottom:none;
text-align:center;
overflow: hidden;

}




    /* Clearing floats */
.cf:before,
.cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  *zoom: 1;
}

/* Mini reset, no margins, paddings or bullets */
.menu,
.submenu {
  margin: 0;
  padding: 0;
  list-style: none;
}

/* Main */
.menu {     
  margin: 50px auto;
  width: auto;
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content; 
}

.menu > li {
  background: #34495e;
  float: left;
  position: relative;
  transform: skewX(25deg);
}

.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}   

.menu li:hover {
  background: #e74c3c;
}   

.menu > li > a {
  transform: skewX(-25deg);
  padding: 1em 2em;
}

/* Dropdown */
.submenu {
  position: absolute;
  width: 140px;
  left: 50%; margin-left: -100px;
  transform: skewX(-25deg);
  transform-origin: left top;
}

.submenu li {
  background-color: #34495e;
  position: relative;
  overflow: hidden;   
}           

.submenu > li > a {
  padding: 1em 2em;     
}

.submenu > li::after {
  content: '';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;      
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);     
}   


.submenu > li:nth-child(odd){
  transform: skewX(-25deg) translateX(0);
}

.submenu > li:nth-child(odd) > a {
  transform: skewX(25deg);
}

.submenu > li:nth-child(odd)::after {
  right: -50%;
  transform: skewX(-25deg) rotate(3deg);
}       


.submenu > li:nth-child(even){
  transform: skewX(25deg) translateX(0);
}

.submenu > li:nth-child(even) > a {
  transform: skewX(-25deg);
}

.submenu > li:nth-child(even)::after {
  left: -50%;
  transform: skewX(25deg) rotate(3deg);
}

/* Mostra o dropdown */
.submenu,
.submenu li {
  opacity: 0;
  visibility: hidden;     
}

.submenu li {
  transition: .2s ease transform;
}

.menu > li:hover .submenu,
.menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
}   

.menu > li:hover .submenu li:nth-child(even){
  transform: skewX(25deg) translateX(15px);     
}

.menu > li:hover .submenu li:nth-child(odd){
  transform: skewX(-25deg) translateX(-15px);     
}


.row:hover{
    margin:20px 0;
    font-size:1.3rem;
}

</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='CSS/Ranking.css'>
    <title>Ranking</title>
    
</head>
<body>
    <header style="min-height: 60px;
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        height: 10%;
        align-items: initial;
        color: #fff;
        text-align: center;
        background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);
        z-index: 2;
       box-shadow: 2px 2px 10px #0006;
        ">
                    <a href="home.php">
                        <button style="float: left;
                                    border:none;
                                    height: 100%;
                                    margin-left:3%;
                                    background: none;">
                            <img src="voltarbranco.png" style="height: 40%;">
                        </button>
                    </a>
                       
            <h1 style=" position: absolute;
                        top:8%;
                        right: 25%;
                        left: 25%;
                        bottom: 50%;
                        font-size:24px
                        ">
            Ranking
            </h1>
        

        </header>


<div style="width:100%;display:flex;flex-direction: column; align-items: center; justify-content: center; text-align:center">
 <p style="position: relative;margin-top:10%;margin-left:3%; margin-right:3%; font-family: sans-serif; font-size:20px;"> Continue acompanhando a partida através desse ranking e descubra quem será o vencedor !!!</p>
    

    </div>


    <div class="Card">
        <header>
            <p style="position: relative; text-align:center; margin-left:30px;">Ranking da Partida</p>
            <p style="position: relative; text-align:center; margin-left:30px;"> Veja em qual posição você ficou</p>
            
            
           

            <div id='TableInfo'>
                    <div class="divisao"></div>
                <div class="info" style="text-align:center">Nome</div>
                <div class="info" style="text-align:center">Sobrenome</div>
                <div class="info" style="text-align:center">Situação</div>
                <div class="info" style="text-align:center">Posição</div>
            </div>
            
        </header>

        <content> 
        <?php

while($row  = mysqli_fetch_assoc($retorno)){
    $posicao++ ;


?>


            <div class="row" style="margin-top: 1%; height: 30px;">
                <div class="col"><?php  echo $row['st_nome'] ?></div>
                <div class="col"><?php  echo $row['st_sobrenome'] ?></div>
                <div class="col"><?php  echo $row['acertos_totais'] ?></div>
                <div class="col" style="border:none;" id="pos"><?php echo $row['status'] ?></div>
            </div>
            <?php } ?>
            
            
           
        </content>
    </div>
</body>
</html>