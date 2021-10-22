<?php 
//Inclui a sessão
include 'include/sessao.php';

//Resgata do banco a foto de perfil do usuário
$foto = $_SESSION['foto'];
?>


<body>
  <style>
    body{
    background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    li {
    position: relative;
    list-style: none;
    margin: 50px 0;
    font-weight: 500;
    text-transform: uppercase;
}

li:before {
    content: "";
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    width: 90%;
    height: 15px;
    background-color: rgba(207, 203, 203, 0.76);
    border-radius: 1000px;
}

li:after {
    content: "";
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    width: 0;
    height: 15px;
    background-color: rgb(255, 255, 255);
    border-radius: 1000px;
    animation-duration: .7s;
    animation-timing-function: ease;
    animation-fill-mode: forwards;
}

li.nivel:after {
    animation-name: nivel;
}

@keyframes nivel {
    to {
        width: 70%;
    }
}
</style>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Final Prova </title>
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
        color:  #0B7591;
        text-align: center;
        background: #FFFFFF;
        z-index: 2;
        ">
        <!--Link para redirecionar o usuario para a home-->
                    <a href="home.php">
                     <!--Botão Voltar-->
                        <button style="float: left;
                                    border:none;
                                    height: 100%;
                                    margin-left:3%;
                                    background: #FFFFFF;">
                          <!--Imagem do botão voltar-->
                            <img src="voltarprova.png" style="height: 40%;">
                        </button>
                    </a>
                        
            <h1 style=" position: absolute;
                        top: 40%;
                        right: 25%;
                        left: 25%;
                        bottom: 45%;
                        
                        font-style: normal;
                        font-weight: bold;
                        font-size: 0.8rem;
                        line-height: 1rem;">
            O JOGO ACABOU
            </h1>
        

        </header>
      
  
 <!--Divs auxiliares para deixar o layout responsivo-->     
    <div class="container-login100" style="background:none;margin-top:0px;height:900px;">

      <div class="wrap-login100" style=" background:none; margin-top:-350px;height:500px;">
        <div class="container">
        <center>
    
          <div style="
          position: relative;
          width: 160px; 
          height: 160px;
          top: -5px;
          margin-top:-90px;
          border-radius: 50%;
          background: linear-gradient(180deg, #45B0E5 0%, #FFFFFF 100%);

          ">
          <!--Puxa a foto do banco e mostra ela na tela-->
              <img class="perfil" src="a<?php echo $foto ?>" style=" width: 155px;

            height: 155px;
            top: 10px;
            margin-top: 2%;
            border-radius: 50%;"> 
    
       

</center>
      </div>
     
 <ul style="margin-top: 10px;
    position:relative;
    margin-left:50px;
    margin-bottom:5px;
    width:100%;
    ">
        <li class="nivel" style="color:white; margin-left:-20px;"><?php 
        //Conexão do banco de dados
          $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
      //Resgata o ID do usuário
          $id = $_SESSION['idUsuario']; 
      //Seleciona a tabela do usuário
          $nivel = "SELECT st_nivel FROM tb_usuario WHERE id_usuario = '$id'";
          $resultii = mysqli_query ($conecta, $nivel);
          $row = mysqli_fetch_assoc($resultii);
      //Resgata o nível do usuário
          $_SESSION['niv'] = $row["st_nivel"];
      //Mostra na tela o nível do usuário
          echo $_SESSION['niv']
          ?>
</li>
    </ul>
    
    <br>
    <!--Div que armazena o texto "Seu jogo chegou ao fim"-->
    <div class="container" style="position: relative;
    width: 100%;
    top:10px;
    margin-left: 8px;
    margin-right:0px;
    height: auto;
    border:1px solid #ffffff;
    box-sizing:border-box;
    border-radius: 20px;">

    <div style="font-size: 42px;
    text-align: center;
    text-align-last: center;
    color: #ffffff;
    line-height: 75px;">
     <p style="font-size:22px;color:white;"> <strong>Sua prova chegou ao fim! </strong> </p> 


    <div>
  <!--tabela de acertos-->
    <table style="
    position: relative;
    width:100%;
    color: #ffffff;
    font-size: 19px;
    left:auto;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    justify-content:center;
    align-items:center;
    line-height: 30px;
    top: auto;">
      <tr>
        <td>
          <div>
            Voce teve um total de:
          </div>
        </td>
      </tr>
      <tr>
        <td>
        Acertos:  <?php 
        //Conexão do Banco 
          $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
       //Busca a reposta certa no banco   
        $resp = $_SESSION['resp_certa'];

        //Busca o id do usuário no banco 
          $id = $_SESSION['idUsuario']; 
        //Seleciona os acertos totais da tabela de usuário
          $acerto = "SELECT acertos_totais FROM tb_usuario WHERE id_usuario = '$id'";
          $resultu = mysqli_query ($conecta, $acerto);
          $row  = mysqli_fetch_assoc($resultu);
          $_SESSION['acertu'] = $row["acertos_totais"];
        //soma a resposta certa com oa certo da pessoa
          $acert_somabanc = $resp + $_SESSION['acertu'];      
        //Atualiza os acertos do usuário no banco 
          $acertoban = "UPDATE tb_usuario SET acertos_totais = '$acert_somabanc' WHERE id_usuario = '$id'";
          $result = mysqli_query ($conecta, $acertoban);
       //Mostra na tela a resposta certa
          echo  $_SESSION['resp_certa']; ?>
        </td>
      </tr>
      <tr>
        <td>
          
        </td>
      </tr>
      <tr>
      <td>
         <div>
         XP: <?php 
         //Conexão do banco
           $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok", "Bok_12345","bok","3306");
           $xp_soma = $_SESSION['resp_certa']*1500;
           echo  $xp_soma;
           $id = $_SESSION['idUsuario']; 
           $xpbanc = "SELECT st_xp FROM tb_usuario WHERE id_usuario = '$id'";
           $resulti = mysqli_query ($conecta, $xpbanc);
           $row  = mysqli_fetch_assoc($resulti);
           $_SESSION['xp'] = $row["st_xp"];
          
           $xp_somabanc = $xp_soma + $_SESSION['xp'];        
           $xpban = "UPDATE tb_usuario SET st_xp = '$xp_somabanc' WHERE id_usuario = '$id'";
           $result = mysqli_query ($conecta, $xpban);
           $nivel = "SELECT st_nivel FROM tb_usuario WHERE id_usuario = '$id'";
          $resultii = mysqli_query ($conecta, $nivel);
          $roww= mysqli_fetch_assoc($resultii);
          $_SESSION['niv'] = $roww["st_nivel"];
          if ($_SESSION['xp'] >= '10000'){
            $somaniv = $_SESSION['niv'] +1;
           $update = "UPDATE tb_usuario SET st_nivel = '$somaniv' WHERE id_usuario = '$id'";
           $zero ="UPDATE tb_usuario SET st_xp = '0' WHERE id_usuario = '$id'";
           $resulty= mysqli_query($conecta, $update);
           $resultyy= mysqli_query($conecta, $zero);
          
          };
 
           ?>
           </div>
          
           </div>
           </div>
         </div>
      </td>
    </tr>
    </table>
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