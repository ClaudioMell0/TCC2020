<?php include 'include/sessao.php';?> 
<html>
    <meta charset="utf-8">
    <title>Final Battle Royale</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <body>

   
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
  background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);
  transition: all 4s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

 
}

.login-btn:hover {
 background:linear-gradient(180deg,#EEA849 100%, #F46B45 0%);

 transition:3s;
}



    


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Battle Royale </title>
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
            
        <div class="container-login100" style="background: linear-gradient(180deg, #F46B45 0%, #EEA849 100%);">

            <div class="wrap-login100" style="box-shadow: 2px 2px 10px #0006">
            
            <div  style="margin-top:-20%; width:100%">
            <div style="position: relative;
                            width: 100%;
                            margin-top: 0%;
                            margin-bottom: 1%;
                            background: ;
                            text-align: center;
                            align-items: center;
                            align-content: center;">
                <p style="font-size:26px; font-style:bold"> O Battle Royale Acabou ! </p>
                </div>
                <div style="position: relative;
                            width: 100%;
                            margin-top: -2%;
                            margin-bottom: 4%;
                            background: ;
                            text-align: center;
                            align-items: center;>">
                <img src="GAMEOVER2.png" style="width:67%; ">
                </div>
                <div style="position: relative;
                            width: 100%;
                            margin-top: 0%;
                            margin-bottom: 1%;
                            background: ;
                            text-align: center;
                            align-items: center;
                            align-content: center;">
                <p style="font-size:26px; font-style:bold"> <strong>VOCÊ PERDEU! </strong>  </p>
                <p style="font-size:26px; font-style:bold">SE ESFORCE MAIS DA PRÓXIMA VEZ</p>
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
                            
                <div style="margin-top:3%; width:100%">
                <!-- Botão para voltar para a pagina inicial
                
                 -->
                 <a href="home.php">
            <button class="login-btn" style="box-shadow: 3px 3px 2px #0003;
                border-radius: 25px
                margin-top:3%"> Voltar </button>
                </a>
                        
  
                </div>

                    
                    
                
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
          
        $resp = $_SESSION['resp_certa'];
        $resp_errada = $_SESSION['resperrada'];

          $id = $_SESSION['idUsuario']; 

          $acertoban = "UPDATE tb_battleroyale_usuario SET st_acertos_battleroyale = '$resp' WHERE id_usuario = '$id'";
          $result = mysqli_query ($conecta, $acertoban);
          
          $acertoban = "UPDATE tb_battleroyale_usuario SET id_pergunta_errada = '$resp_errada' WHERE id_usuario = '$id'";
          $result = mysqli_query ($conecta, $acertoban);
            ?>  
            
</body>
</html>