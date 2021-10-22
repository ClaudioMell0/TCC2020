<?php 
//Abre a sessão
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
//Conexão com o Banco de Dados
$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
//Verifica se a conexão foi bem sucedida
if(!$conecta){
    echo "Error: Unable to connect to MySql" . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
//Seleciona a tabela de perguntas do Banco de Dados
    $sql = "select * from tb_perguntas";
    $result = mysqli_query ($conecta, $sql);
}
//Verifica a reposta certa
if(isset($_POST['resp_certa'])){
//Compara a reposta escolhida com a resposta certa
    if($_POST['botao'] == $_POST['resp_certa']){
        $_SESSION['resp_certa']++;
    }else{
//Leva o usuário para outra página caso a resposta for errada
        header("Location: finalcomum.php");
    }
    

}

//Coloca um limite de sortear uma pergunta apenas uma vez, para nao repetir
if($_SESSION['perguntas_sorteadas'] == ""){

    $query = "SELECT * FROM tb_perguntas WHERE st_materia = 'geografia' ORDER BY RAND() limit 1";
}else{
    $query = "SELECT * FROM tb_perguntas WHERE st_materia = 'geografia' and id_perguntas not in (" .  $_SESSION['perguntas_sorteadas'] . ") ORDER BY RAND() limit 1";
}


  
    $retorno = mysqli_query($conecta,$query);
    $row  = mysqli_fetch_assoc($retorno);


    
        
        
        if($_SESSION['perguntas_sorteadas'] == ""){
            $_SESSION['perguntas_sorteadas'] = "'" . $row ["id_perguntas"] . "'";
        }else{
            $_SESSION['perguntas_sorteadas'] = $_SESSION['perguntas_sorteadas'] . ",'" . $row ["id_perguntas"] . "'";
        }
        $_SESSION['pergunta'] = $row ["st_pergunta"];
        $_SESSION['respostaA'] = $row ["st_resp_a"];
        $_SESSION['respostaB'] = $row ["st_resp_b"];
        $_SESSION['respostaC'] = $row ["st_resp_c"];
     
      
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
        background: linear-gradient(180deg, #46E2C9 0%, #008F76 99.48%);
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
   margin-left: 6%;
    
  }

      

        .input:hover {
            background:#fff;
            color: #008F76;
            transition: 0.7s;
        }
    
    
</style>

<script>
//Define o tempo do time
    var counter = 20;
//Faz o tempo diminuir
    setInterval( function(){
        counter--;
//Verifica se o tempo é maior ou igual a 0, se for, mostra o contador na pagina
        if( counter >= 0 ){
            id = document.getElementById("count");
            id.innerHTML = counter;
        }
//Verifica se o tempo é menor que 0, se for, passa para a próxima página 
        if( counter === 0 ){
           window.location.href="finalcomum.php";



        
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
<!--Cabeçalho-->    
<header style="min-height: 60px;
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        height: 10%;
        align-items: initial;
        color: #31AE98;
        text-align: center;
        background: #FFFFFF;
        z-index: 2;
        ">
        <!--Link que redireciona o usuario para a pagina anterior-->
                    <a href="home.php">
              <!--Botão Voltar-->
                        <button style="float: left;
                                    border:none;
                                    height: 100%;
                                    margin-left:3%;
                                    background: #FFFFFF;">
                        <!--Imagem do botão voltar-->
                            <img src="voltarcomum.png" style="height: 40%;">
                        </button>
                    </a>
          
            <h1 style=" position: absolute;
                        top: 40%;
                        right: 25%;
                        left: 25%;
                        bottom: 45%;
                        
                        font-style: normal;
                        font-weight: bold;
                        font-size: 1.8rem;
                        line-height: 1rem;">
            Comum
            </h1>
              
            <div style="            position:absolute;           
                                    margin-left:85%;
                                    border:none;
                                    height: 100%;
                                    width:50px;
                                    background: #FFFFFF;">
                        <!--Mostra o tempo na tela-->
                            <h1 style="margin-top: 50%; word-wrap: none; font-size:1.6rem;font-style: normal;
                        font-weight: bold;" id="count"></p>
                        </h1>


        </header>
	<!--pergunta-->
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
                <!--Puxa do Banco e mostra a pergunta na tela-->
                  <?php echo  $row["st_pergunta"]; ?>
                </p>

                

        </div>


 
<div class="container-login100" style="background:none; position:absolute" >

<form name="form1" method="POST" action="PergComumGeo.php" style="margin-top:10%; margin-left:-25%;" id="form">
<!--Pega a resposta certa do banco de dados-->
             <input type ="hidden" name="resp_certa" value="<?php echo $row['st_resp_certa']; ?>">

    
                <div class="container" style="margin-top: 0%; margin-bottom:0%; width:100%;margin-left:10%;text-transform:capitalize">
            <input type="radio" name="botao" id="A" class="A" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="A"></input>
<!--resposta-->
                    <label for="A" class="labelA" style=" border-radius:50%;"><div class="alt" style="width: 70px;
                    height: 70px;
                    align-items: center;
                    align-content: center;
                    position:relative;
                    display:flex;
                    justify-content:center;
                        
                    text-align: center;">A
                                                                            </div>
                                                              
                                                            
                                                                         
                                        <div class="resp" style="position:absolute; margin-top:-7%; color:#fff; margin-left:20%;word-wrap:no-wrap;">                                    
                                       <!--Pega a resposta do banco e faz aparecer na tela--> <?php echo $row ["st_resp_a"];?>
                                        </div>

                </div>


                <div class="container" style="margin-top: 40%; margin-bottom:0%; width:100%;margin-left:10%;text-transform:capitalize">
            <input type="radio" name="botao" id="B" class="B" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="B"></input>
         <!--resposta-->
                    <label for="B" class="labelB" style=" border-radius:50%;"><div class="alt" style="width: 70px;
                    height: 70px;
                    align-items: center;
                    align-content: center;
                    position:relative;
                    display:flex;
                    justify-content:center;
                        
                    text-align: center;">B
                                                                            </div>
                                                              
                                                            
                                                                          
                                        <div class="resp" style="position:absolute; margin-top:-7%; color:#fff; margin-left:20%;word-wrap:no-wrap;">                                    
                                       <!--Pega a resposta do banco e faz aparecer na tela--> <?php echo $row ["st_resp_b"];?>
                                        </div>

                </div>




                <div class="container" style="margin-top: 40%; margin-bottom:0%; width:100%;margin-left:10%; text-transform:capitalize">
            <input type="radio" name="botao" id="C" class="C" style="position: relative;

                                                                    width: 70px;
                                                                     height: 70px;

                     " value="C"></input>
       <!--resposta-->
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
                                      <!--Pega a resposta do banco e faz aparecer na tela-->   <?php echo $row ["st_resp_c"];?>
                                        </div>

</div>

<div style="position:relative;
margin-left:10%;
height:200px;
        margin-top:5%;
        width:100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center">
 <!--Botão de Enviar: Compara a reposta certa com a resposta selecionada-->
<input type="submit" value="Enviar" class="input" form="form">
</form>





        </div>

        </div>
      

	




        

        
            
      
 
      

                </div>
</div>

</body>
</html>