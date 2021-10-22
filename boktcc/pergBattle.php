<?php 
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
if(!$conecta){
    echo "Error: Unable to connect to MySql" . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
    exit;

}

$queryr = "select count(id_usuario) as qtde from tb_battleroyale_usuario where flag_ativo = 1 and id_battleroyale= ". $_SESSION['senha_battle'] ."";
$retorno2 = mysqli_query($conecta,$queryr);
$row2  = mysqli_fetch_assoc($retorno2);
//echo  $queryr;

$id = $_SESSION['idUsuario'];
if ($_SESSION['id_battleperg']==""){
    $_SESSION['id_battleperg']=1;
}
if($row2['qtde']== 1){
    header("Location: finalbattle.php");

}

if(isset($_POST['resp_certa'])){
    $_SESSION['id_battleperg']=$_SESSION['id_battleperg']+1;
    if($_POST['botao'] == $_POST['resp_certa']){

        $flagcerto = "UPDATE tb_battleroyale_usuario SET flag_ativo = '1' WHERE id_usuario = '$id'";
          $flagui = mysqli_query ($conecta, $flagcerto);

        
        $_SESSION['resp_certa']++;
        
    
    }else{
        $flagerrado = "UPDATE tb_battleroyale_usuario SET flag_ativo = '0' WHERE id_usuario = '$id'";
          $flagi = mysqli_query ($conecta, $flagerrado);
        header("Location: finalbattleperdedor.php");
    }
    

}

/*
    query do ranking final.
    select b.st_nome, b.st_foto, a.st_acertos_battleroyale, case when flag_ativo = 0 then 'Perdeu' else 'Jogando' end as Status
from bok.tb_battleroyale_usuario a 
    inner join tb_usuario b on b.id_usuario = a.id_usuario
    where a.id_battleroyale = 1
order by st_acertos_battleroyale desc
*/

//$_SESSION['id_battleperg'];

$id_battleperg = $_SESSION['id_battleperg'];
$battleperg = "SELECT * FROM tb_battleroyale_perguntas WHERE id_battleroyale = '1' and id_battleroyale_perguntas = '$id_battleperg'";

$retorni = mysqli_query($conecta,$battleperg);
    $rowl  = mysqli_fetch_assoc($retorni);
    $_SESSION['id_bperg'] = $rowl ["id_perguntas"];
    $id_battle = $_SESSION['id_bperg'];
    /*$_SESSION['id_battleperg'] = $rowl ["id_battleroyale_perguntas"];
    $id_battleperg = $_SESSION['id_battleperg'];

    $battlepergg = "SELECT * FROM tb_battleroyale_perguntas WHERE id_battleroyale_perguntas = '$id_battleperg'";

    $retornii = mysqli_query($conecta,$battlepergg);
    $rowll  = mysqli_fetch_assoc($retornii);
    */


if($_SESSION['perguntas_sorteadas'] == ""){
    $query = "SELECT * FROM tb_perguntas WHERE id_perguntas = '$id_battle'";
}else{
    $query = "SELECT * FROM tb_perguntas WHERE id_perguntas = '$id_battle' and id_perguntas ";
}

//$query = "SELECT * FROM tb_perguntas WHERE st_materia = 'Portugues' and id_perguntas not in (" .  $_SESSION['perguntas_sorteadas'] . ") ORDER BY RAND() limit 1";
    //echo $query; 
    //die;
  
    $retorno = mysqli_query($conecta,$query);
    $row  = mysqli_fetch_assoc($retorno);
    //echo  mysqli_num_rows($retorno);
   // mysqli_num_rows($retorno);

   //echo $row['st_resp_certa'];
   //die;

    
        
        
        if($_SESSION['perguntas_sorteadas'] == ""){
            $_SESSION['perguntas_sorteadas'] = "'" . $row ["id_perguntas"] . "'";
        }else{
            $_SESSION['perguntas_sorteadas'] = $_SESSION['perguntas_sorteadas'] . ",'" . $row ["id_perguntas"] . "'";
        }
        $_SESSION['pergunta'] = $row ["st_pergunta"];
        $_SESSION['respostaA'] = $row ["st_resp_a"];
        $_SESSION['respostaB'] = $row ["st_resp_b"];
        $_SESSION['respostaC'] = $row ["st_resp_c"];
        $_SESSION['resperrada'] = $row ["id_perguntas"];

           
    
?>

<html>
    <meta charset="utf-8">
    <title>Questões Comum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
    <body>

   
<style>
    body{

        line-height: 1rem;
        color:#fff;
       background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);
        background-repeat: no-repeat;
        background-attachment: fixed;
        
    }

    body{ animation-name: fade;
  animation-duration: 1s;
}

@keyframes fade {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

input[type="radio"]{
    display: none;
}



.container{
    width:80%;
    margin-left: 5%;


}       

.alt{
    border-radius:50%;
    border: 2px solid #FFFFFF;
    
    
}

input:checked + label{

  background: #fff;
  border-radius: 50%;
  color: #008F76;
  transition:1s;

}

label{
    color:#fff;
}



.input { 
    width:320px;
    border: 2px solid #fff;
    background:none;
    color: #fff;
    height:50px;
    border-radius: 10px;
   margin-top:0%;
    
  }

      

        .input:hover {
            background:#fff;
            color: #008F76;
            transition: 0.7s;
        }
    
    
</style>

<script>
  var counter = 20;

    setInterval( function(){
       counter--;

       if( counter >= 0 ){
           id = document.getElementById("count");
           id.innerHTML = counter;
        }

        if( counter === 0 ){
           //window.location.href="finalbattle.php";
           document.getElementById("form").submit();

        
        }
    }, 1000);

</script> 
<title> Matéria </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>

<body>


<header style="min-height: 60px;
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        height: 10%;
        align-items: initial;
        color: #F47B51;
        text-align: center;
        background: #FFFFFF;
        z-index: 2;
        ">
                   
                       
            <h1 style=" position: absolute;
                        top: 40%;
                        right: 25%;
                        left: 25%;
                        bottom: 45%;
                        
                        font-style: normal;
                        font-weight: bold;
                        font-size: 1.2rem;
                        line-height: 1rem;">
            Battle Royale
            </h1>
            <div style="            position:absolute;           
                                    margin-left:85%;
                                    border:none;
                                    height: 100%;
                                    width:50px;
                                    background: #FFFFF;">
                            <h1 style="margin-top: 50%; word-wrap: none; font-size:1.6rem;font-style: normal;
                        font-weight: bold;" id="count"></p>
                        </h1>

        </header>
    
    <div style="position: relative;
                    margin-left:10%;
                    width: 80%;
                    height: 150px;
                    margin-top:5%;
                    overflow: scroll;
                    align-items: center;
                    border: 2px solid #FFFFFF;
                    box-sizing: border-box;
                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
                    border-radius: 30px">
        
            
                <p style="position:relative;

                font-size:20px;
                color:#FFFFFF;
                margin-top: 0%;
                margin-left :8%;
                margin-right:5%;
                margin-bottom: 6%;"> 
                  <?php echo  $row["st_pergunta"]; ?>
                </p>

                

        </div>

<p style="font-size:30px;
                color:#FFFFFF; margin-left:10%; margin-top:2%; margin-bottom:10%;"> Jogadores Restantes: <?php echo $row2['qtde'];
                  ?> </p>



<div class="container-login100" style="background:none; position:absolute" >
<form name="form" method="POST" action="pergBattle.php" style="margin-top:10%; margin-left:-25%;" id="form">
             <input type ="hidden" name="resp_certa" value="<?php echo $row['st_resp_certa']; ?>">

    
                <div class="container" style="margin-top: -330px; margin-bottom:-10px; width:100%;margin-left:-100px;text-transform:capitalize">
            <input type="radio" name="botao" id="A" class="A" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="A"></input>

                    <label for="A" class="labelA" style=" border-radius:50%;"><div class="alt" style="width: 70px;
                    height: 70px;
                    align-items: center;
                    align-content: center;
                    position:relative;
                    display:flex;
                    justify-content:center;
                        
                    text-align: center;">A
                                                                            </div>
                                                              
                                                            
                                                                        
                                        <div class="resp" style="position:absolute; margin-top:-6%; color:#fff; margin-left:20%;word-wrap:no-wrap;">                                    
                                        <?php echo $row ["st_resp_a"];?>
                                        </div>

                </div>

                <div class="container" style="margin-top:60px; margin-bottom:0px; width:100%;margin-left:-100px;text-transform:capitalize">
            <input type="radio" name="botao" id="B" class="B" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="B"></input>

                    <label for="B" class="labelB" style=" border-radius:50%;"><div class="alt" style="width: 70px;
                    height: 70px;
                    align-items: center;
                    align-content: center;
                    position:relative;
                    display:flex;
                    justify-content:center;
                        
                    text-align: center;">B
                                                                            </div>
                                                              
                                                            
                                                                        
                                        <div class="resp" style="position:absolute; margin-top:-6%; color:#fff; margin-left:20%;word-wrap:no-wrap;">                                    
                                        <?php echo $row ["st_resp_b"];?>
                                        </div>

                </div>



                <div class="container" style="margin-top: 40px; margin-bottom:20px; width:100%;margin-left:-100px; text-transform:capitalize">
            <input type="radio" name="botao" id="C" class="C" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="C"></input>

                    <label for="C" class="labelC" style=" border-radius:50%;"><div class="alt" style="width: 70px;
                    height: 70px;
                    align-items: center;
                    align-content: center;
                    position:relative;
                    display:flex;
                    justify-content:center;
                        
                    text-align: center;">C
                                                                            </div>
                                                              
                                                            
                                                                        
                                        <div class="resp" style="position:absolute; margin-top:-6%; color:#fff; margin-left:20%;word-wrap:no-wrap;margin-bottom:10%;">                                    
                                        <?php echo $row ["st_resp_c"];?>
                                        </div>

</div>

</form>




        </div>

        </div>
      

    



        

        
            
      
 
      

                </div>
</div>

</body>
</html>
