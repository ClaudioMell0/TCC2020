
<?php include 'include/conexao.php';?>
<?php 
//inicia a sessão
session_start();
$alerta="none";
if(isset($_POST['email']) && isset($_POST['senha']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $query = "SELECT * FROM tb_usuario WHERE st_email = '$email' AND st_senha = md5('$senha')";
    //echo $query; 
  
    $retorno = mysqli_query($link,$query);
    $row  = mysqli_fetch_assoc($retorno);
    //Verifica se o email ou senha corresponde a algo do banco de dados
    if (mysqli_num_rows($retorno)<=0){
        $alerta="block";
        $_SESSION['idUsuario'] ="";
        $_SESSION['nomeUsuario'] ="";
        $_SESSION['emailUsuario'] ="";
        $_SESSION['curso'] ="";
        $_SESSION['ano'] ="";
        $_SESSION['foto'] ="";
		
    }else{
        $alerta="none";
       
        $_SESSION['idUsuario'] =$row["id_usuario"];
        $_SESSION['nomeUsuario'] =$row["st_nome"];
        $_SESSION['emailUsuario'] =$row["st_email"];
        $_SESSION['curso'] =$row["st_curso"];
        $_SESSION['ano'] = $row ["st_ano"];
         $_SESSION['foto'] = $row ["st_foto"];
       
 
        header("Location:home.php");
    }
}

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
  background: linear-gradient(135deg, #22d9f1, #006cff);
  transition: all 4s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

 
}

.login-btn:hover {
 background:linear-gradient(135deg,#006cff, #22d9f1);

 transition:3s;
}



.manter__checkbox {
			position: absolute;
			left: -9999px;
		}

		.manter__botao {
			display: inline-block;
			vertical-align: middle;
			position: relative;
			cursor: pointer;
		}

		.manter__botao::before,
		.manter__botao::after {
			content: "";
			box-shadow: 0 0 0 1px #CCC;
			transition: all 0.2s ease;
		}

		.manter__botao::before {
			display: inline-block;
			border-radius: 1em;
			height: 1em;
			width: 2em;
			margin-right: 0.5em;
			background:#e0e0d1;
		}

		.manter__botao::after {
			position: absolute;
			top: 0.025em;
			left: 0.025em;
			width: 0.95em;
			height: 0.95em;
			border-radius: 100%;
			background: #FFF;
		}

		.manter__checkbox:checked + .manter__botao::before {
			background: #55D069;
		}

		.manter__checkbox:checked + .manter__botao::after {
			left: 1.025em;
		}

		.manter__checkbox:focus + .manter__botao::before {
			outline: 3px dotted #CCC;
		}
	


</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
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
			
		<div class="container-login100" >

			<div class="wrap-login100" style="box-shadow: 2px 2px 10px #0006">
			<!-- Div para a logo do BoK -->
				<div style="position: relative;
							width: 100%;
							margin-top: -20%;
							margin-bottom: 10%;
							background: ;
							text-align: center;
							align-items: center;
							align-content: center;">

							<img src="imagens_icones\logoazul.png">
				</div>
				<!-- Div para o posicionamento do formulario -->
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
				<!-- Formulario de Login -->
				<form class="validate-form" name="formLogin" method="POST" action="index.php" style="position: relative;">
				<!-- Email -->
				<div class="wrap-input100 validate-input" data-validate="Insira um Email Válido"  style="box-shadow: 2px 2px 2px #0003;
				border-radius: 25px">

						
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
				<!-- Senha -->
					<div class="wrap-input100 validate-input" data-validate="Insira sua Senha"  style="box-shadow: 2px 2px 2px #0003;
				border-radius: 25px">
					
						<input class="input100" type="password" name="senha" placeholder="Senha" >
					
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>
					<!-- Div e Botão de Manter o Usuario Conectado -->
					<div class="manter" style="margin-left:-5%;margin-top:-5%;">
						<div style="width:100%;
						position: relative;
						margin-top: 10%;
									align-content: center;
									align-itens : center;
									text-align: center;
									display: flex;
									flex-direction: row;
									justify-content: center;">
					
						<input type="checkbox" class="manter__checkbox" style="position: relative;
																					" id="manter__checkbox">
						<label for="manter__checkbox" class="manter__botao" ></label>
						<p style=";
						font-family: sans-serif
								  ">Manter Conectado?</p>
							
					</div>
					</div>
					</div>
				</div>
				<!-- Botão que executa o login -->
				<div style="margin-top:3%; width:100%">
						<button class="login-btn" style="box-shadow: 3px 3px 2px #0003;
				border-radius: 25px
				margin-top:3%">
							Login
						</button>
				</div>

					<!-- Mensagem de erro -->
					<div class="alert alert-danger" style="display: <?= $alerta; ?>;width:100%;text-align:center;margin-top:3%;margin-bottom:-2%; position:relative;">E-mail ou senha incorreto.</div>
			
					
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
	