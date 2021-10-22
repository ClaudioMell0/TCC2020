<?php
//Abre a sessão para puxar as informações do banco 
session_start();
$_SESSION['resp_certa'] = 0;
$_SESSION['perguntas_sorteadas'] = "";
?>

<style>


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

.login-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;

  width: 100%;
  height: 50px;
  border-radius: 25px;
  background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);
  transition: all 4s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

 
}

.login-btn:hover {
background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);

 transition:3s;
}



	


</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Entrar no Modo Prova  </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>


<body>
	<!-- Divs auxiliares para deixar o layout responsivo -->
	<div class="limiter">
			
		<div class="container-login100" style="background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);">

            <div class="wrap-login100" style="box-shadow: 2px 2px 10px #0006">
            
            <div  style="margin-top:-20%; width:100%">
            <div style="position: relative;
							width: 100%;
							margin-top: 0%;
							margin-bottom: 4%;
							background: ;
							text-align: center;
							align-items: center;
							align-content: center;">
				<p style="font-size:26px; font-style:bold"> Seja bem vindo/a ao Modo Prova! </p>
				</div>
				<!-- Divs auxiliares para a logo do battle royale -->
                <div style="position: relative;
							width: 100%;
							margin-top: 0%;
							margin-bottom: 140px;
                            background: ;
                             height: 100px;
							text-align: center;
							align-items: center;
							align-content: center;">
				<img src="modoprova.png" style="width:200px; height: 200px;">
                </div>
                
                

				<div style="width: 100%;
				text-align: center;
				align-content: center;
				psoition: relative;
				display: flex;
				align-itens: center;">
				<div style="position: relative;
							width: 100%;
							background: ;
							text-align: center;
							align-items: center;
							align-content: center;">
							<!-- Formulario para o usuario inserir a senha de entrada na prova -->
				<form class="validate-form" name="formLogin" method="POST" action="esperaprova.php" style="position: relative;">



					<div class="wrap-input100 validate-input" data-validate="Insira o Código da Sua Prova"  style="box-shadow: 2px 2px 2px #0003;
				border-radius: 25px">
					
						<input class="input100" type = "text" name="senha" placeholder="Insira o Código da Prova" style="text-transform: uppercase">
					
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>

					
					</div>
				</div>
				
                <div style="margin-top:3%; width:100%">
				<!-- Botão para verificar se a senha esta certa e se o horario está certo
				
				 -->
            <input type ="submit"  class="login-btn" style="box-shadow: 3px 3px 2px #0003;
				border-radius: 25px
                margin-top:3%" value="Entrar">
<a href="home.php">
<button  class="login-btn" style="box-shadow: 3px 3px 2px #0003;
				border-radius: 25px;
                margin-top:3%" > VOLTAR </Button>
</a>					
  
				</div>
				
					
				</form>
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