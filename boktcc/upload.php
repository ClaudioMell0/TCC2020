<?php 

header('Content-Type: text/html; charset=iso-8859-1');
$conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
//destino da imagem
$destino = 'C:\xampp\htdocs\boktcc\a' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 //move a imagem para o destino
move_uploaded_file( $arquivo_tmp, $destino);

include 'include/sessao.php';
$id = $_SESSION['idUsuario'];
//Insere o nome da imagem no banco de dados
$sql = "update tb_usuario set st_foto = '" . $_FILES['arquivo']['name']."' where id_usuario = '$id'";
$resultii = mysqli_query ($conecta, $sql);


?>
<html>
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
	<!--Divs auxiliares para deixar o layout responsivo -->
<div class="limiter">
			
            <div class="container-login100" >
    
                <div class="wrap-login100" style="box-shadow: 2px 2px 10px #0006">
                    <div style="position: relative;
                                width: 100%;
                                margin-top: -20%;
                                margin-bottom: 10%;
                                background: ;
                                text-align: center;
                                align-items: center;
                                align-content: center;">
                    <img src="imagens_icones\logoazul.png">
    
    
    
    
                   
<!--texto para mostrar ao usuario que a imagem foi inserida corretamente -->
                 <p style="font-size:18px">
                 A foto <?php echo $_FILES['arquivo']['name']; ?> foi enviada com sucesso! Reinicie o bok para que as mudancas sejam feitas
                 </p>
    
    
    
                    <a href="perfil.php">
                    <!--Botao para voltar a tela de perfil -->
                            <button class="login-btn" style="box-shadow: 3px 3px 2px #0003;
                    border-radius: 25px;
                    margin-top:5%">
                                Voltar
                            </button>
                    </div>
                    </a>
                        
                        
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        