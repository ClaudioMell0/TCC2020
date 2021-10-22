<?php
//conexão com o banco de dados
$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok","Bok_12345","bok", "3306");

                     if(!$conecta){
                         echo "Error: Unable to connect to MySql" . PHP_EOL;
                         echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
                         echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
                         exit;
}else{




     
$sql = "select * from tb_ranking_usuario";
$result = mysqli_query ($conecta, $sql);
$posicao = 0;

//seleciona as informacoes do usuario para o ranking
$query = "select id_usuario,st_nome,st_sobrenome,acertos_totais from tb_usuario
group by id_usuario
order by acertos_totais
desc";


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

    background:linear-gradient(to top, #00c6fb 0%, #1a71ff 100%);
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
<!--Cabeçalho-->
    <header style="min-height: 60px;
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        height: 10%;
        align-items: initial;
        color: #fff;
        text-align: center;
        background: linear-gradient(to top, #00c6fb 0%, #1a71ff 100%);
        z-index: 2;
       box-shadow: 2px 2px 10px #0006;
        ">
                    <a href="home.php">
                    <!--botão voltar-->
                        <button style="float: left;
                                    border:none;
                                    height: 100%;
                                    margin-left:3%;
                                    background: none;">
                                    <!--Imagem do botão voltar-->
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
    <div style="position: relative;
    width: 130px;
    height: 130px;
    margin-top: 10%;
    border-radius: 50%;
    background: linear-gradient(180deg, #45B0E5 0%, #FFFFFF 100%);
    box-shadow: 2px 2px 10px #0004;">
    <!--Imagem de perfil do usuario-->
    <img src="a<?php echo $foto ?>" style="width:130px; height:130px; border-radius:50%;"/>


    </div>
</div>

    <div class="Card">
        <header>
            <p style="position: relative;">Ranking Usuários</p>
            <p style="position: relative; margin-top:0%">Ordenado por Acertos Totais</p>
            
           
<!--Informações do Ranking-->
            <div id='TableInfo'>
                    <div class="divisao"></div>
                <div class="info" style="text-align:center">Nome</div>
                <div class="info" style="text-align:center">Sobrenome</div>
                <div class="info" style="text-align:center">Acertos Totais</div>
                <div class="info" style="text-align:center">Posição</div>
            </div>
            
        </header>

        <content> 
        <?php
//estrutura de repetição para o funcionamento do ranking
while($row  = mysqli_fetch_assoc($retorno)){
    $posicao++ ;


?>


            <div class="row" style="margin-top: 1%; height: 30px;">
                <div class="col"><?php  echo $row['st_nome'] ?></div>
                <div class="col"><?php  echo $row['st_sobrenome'] ?></div>
                <div class="col"><?php  echo $row['acertos_totais'] ?></div>
                <div class="col" style="border:none;" id="pos"><?php echo $posicao ?></div>
            </div>
            <?php } ?>
            
            
           
        </content>
    </div>
</body>
</html>