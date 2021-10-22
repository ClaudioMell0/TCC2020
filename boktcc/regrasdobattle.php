<?php
session_start();
$_SESSION['resp_certa'] = 0;
$_SESSION['perguntas_sorteadas'] = "";
?>
<?php include 'include/conexao.php';?>
<style>

body{
    background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);
        background-repeat: no-repeat;
        background-attachment: fixed;
        
}

container-login100-form-btn{

	transition:all 3s ease;
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

.input { 
    width:200px;
    border: 2px solid #fff;
    background:none;
    color: #fff;
    height:50px;
    border-radius: 10px;
   
   margin-bottom:10%;
   position: relative;
    
  }

      

        .input:hover {
            background:#fff;
            color: #F46B45;
            transition: 0.7s;
            border:none;
        }
	


</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Regras do Battle Royale </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>


<body>
<!--Cabeçalho -->
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
                    <a href="home.php">
                    <!--Botao voltar -->
                        <button style="float: left;
                                    border:none;
                                    height: 100%;
                                    margin-left:3%;
                                    background: #FFFFFF;">
                            <img src="voltar.png" style="height: 40%;">
                        </button>
                    </a>
                       
            <h1 style=" position: absolute;
                        top: 40%;
                        right: 25%;
                        left: 25%;
                        bottom: 45%;
                        color:#F46B45;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 1.8rem;
                        line-height: 1rem;">
            Battle Royale
            </h1>
        

        </header>
<!--Divs auxiliares para deixar o layout responsivo -->
	<div class="limiter">
			
		<div class="container-login100" style="background:none">

			<div class="wrap-login100" style="background: none; margin-top:-10%;">
			<div class="externa"  style="background: none;width:100%; align-itens:center;display: flex; flex-direction:row; flex-wrap:wrap; justify-content:center; text-align:center; margin-top:0%;">
        
        <!--Regra 1 -->
        <div class="container" style="
            position: relative;
            text-align: center;
                width: 240px;
                height:100px;
                margin-bottom: 85%;
                margin-top:10%;
                border:1px solid #ffffff;
                box-sizing:border-box;
                border-radius: 20px;
                background-color: white;">
    
        <div style="width:200px;
        font-family:sans-serif;
        text-align: center;
        text-align-last: center;
        height:70px;
        color: #F46B45;
        font-family: Open Sans
        font-style: normal;
        font-weight: bold;">
        <h3>
                O que é o Battle Royale?
        </h3>

       
        </div>
            <div class="container" style="position: relative;
            width: 240px;
            height: 350px;
            margin-top:-20%;
            margin-left:-8%;
            text-align: initial;
            border: 2px solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 20px;">
                <div style="position: absolute;
                height: auto;
                 margin-top: 30%;
                    font-family: sans-serif;
                    font-style: normal;
                     font-weight: normal;
    
                    
                    
        
                    color: #FFFFFF;
                    ">
                     É um modo onde você enfrenta seus colegas de classe por meio de perguntas, quem errar uma pergunta será eliminado, ganha o ultimo que sobrar, o primeiro colocado ganha 1 ponto e o segundo ganha 0,5. Você só pode jogar esse modo em sala de aula, quando algum professor 
             abrir uma partida para a sala
                </div>
            </div>
    
    </div>













			<!--Regra 2 -->
    <div class="container" style="
            position: relative;
            text-align: center;
                width: 240px;
                height:80px;
                margin-bottom:70%;
                margin-top:10%;
                border:1px solid #ffffff;
                box-sizing:border-box;
                border-radius: 20px;
                background-color: white;">
    
        <div style="width:200px;
        font-family:sans-serif;
        text-align: center;
        text-align-last: center;
        height:70px;
        color: #F46B45;
        font-family: Open Sans
        font-style: normal;
        font-weight: bold;">
        <h5 style="margin-top:10px">
        É possível ocorrer um empate?
        </h5>
       
        </div>
            <div class="container" style="position: relative;
            width: 240px;
            height: 230px;
            margin-top:-20%;
            margin-left:-8%;
            text-align: initial;
            
            border: 2px solid #FFFFFF;
            border-top:none;
            box-sizing: border-box;
            border-radius: 20px;">
                <div style="position: absolute;
                height: auto;
                 margin-top:20%;
                    font-family:Arial, Helvetica, sans-serif;
                    font-style: normal;
                     font-weight: normal;
    
                    
                    
        
                    color: #FFFFFF;
                    ">
                    Não, se as perguntas acabarem e tiver mais que um jogador na partida, aquele que respondeu mais rápido ganha!s
</div>
</div>
    </div>
    <a href="codigobattle.php" style="width:100%;">
<div style=" background: none;width:100%; align-itens:center;display: flex; flex-direction:row; flex-wrap:wrap; justify-content:center; text-align:center; margin-top:0%;">

<button class="input" style="width:100%"> Continuar </button>
    </a>
                </div>
            </div>

    </div>



			</div>
		</div>
	</div>
	
	

	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>

</body>
</html>
	