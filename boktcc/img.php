
<?php include 'include/sessao.php';?>


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





</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alterar Foto </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>


<body>
	<!--Divs auxiliares para deixar o layout responsivo -->
	<div class="limiter">
			
		<div class="container-login100" >

			<div class="wrap-login100" style="box-shadow: 2px 2px 10px #0006">
			<!--Logo BoK -->
				<div style="position: relative;
							width: 100%;
							margin-top: -20%;
							margin-bottom: 10%;
							background: ;
							text-align: center;
							align-items: center;
							align-content: center;">
				<img src="imagens_icones\logoazul.png">





<form method="post" enctype="multipart/form-data" action="upload.php">
 <p style="font-size:30px">  Selecione uma imagem para ser sua foto de perfil: </p>
 <!--Input para Selecionar a foto de perfil -->
    <input name="arquivo" type="file" style="margin-top:2%; border-radius:205px"/>
   <br>




				<!--Input para enviar a foto de perfil -->
						<input type="submit" value="Salvar" class="login-btn" style="box-shadow: 3px 3px 2px #0003;
				border-radius: 25px;
				margin-top:5%">
							
						</input>
				</div>

					
					
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	

	


</body>
</html>
	