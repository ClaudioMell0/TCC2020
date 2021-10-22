<?php
 $_SESSION['Post'] = $_POST;
 //conexão
 $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok","Bok_12345","bok", "3306");

                     if(!$conecta){
                         echo "Error: Unable to connect to MySql" . PHP_EOL;
                         echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
                         echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
                         exit;
 }else{

 



    // Seleciona os usuarios da tabela, para mostrar na estrutura de repetição
 $sql3 = "SELECT * FROM `tb_usuario` CROSS JOIN `tb_prova_usuario` where id_usuario = id_usuario_x and id_prova_x = " . $_POST['senha'] ."";
 $result3 = mysqli_query ($conecta, $sql3);
 $posicao = 0;

//seleciona as informações do usuario para mostrar na estrutura de repetição
 $query = "select id_usuario,st_nome,st_curso,st_ano, st_nivel from tb_usuario where
 group by id_usuario
 desc;
 ";


 $retorno = mysqli_query($conecta,$query);




 };
 ?>

 <?php
//Muda o fuso para o horario de brasilia
 //date_default_timezone_set('America/Brasilia');

 include 'include/sessao.php';
 $foto = $_SESSION['foto'];
 $conecta = mysqli_connect("clovis-cartola.czcbeh0esbig.us-east-1.rds.amazonaws.com","bok","Bok_12345","bok", "3306");

                     if(!$conecta){
                         echo "Error: Unable to connect to MySql" . PHP_EOL;
                         echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
                         echo "Error: Unable to connect to MySql" . mysqli_connect_error() . PHP_EOL;
                         exit;
 }
 // Verificar se existe o codigo do batlle royale no banco de dados





 $sql = "select * from tb_prova
           where id_prova = " . $_POST['senha'] . " and dia_inicio >='" . date("Y-m-d") . "' and hora_inicio > '" . date("H:i:s") . "'" ;

           $result = mysqli_query ($conecta, $sql);
           if(mysqli_num_rows($result) == 0){
             header("Location: codigoprova.php?id_erro=1");
           }else{
             $row = mysqli_fetch_assoc($result);
           //  Insere o usuario na tabela, pra ele participar do battle royale;
               $sql_insert_usuario = "insert into tb_prova_usuario (id_prova_x, id_usuario_X, st_acertos_prova)
                                       values(". $_POST['senha'].",".$_SESSION['idUsuario'].",0)";

           };

 ?>




<script>
// `Puxa o dia e a hora do banco de dados
var countDownDate = new Date("<?php echo $row['dia_inicio'] . " " . $row['hora_inicio'];  ?>").getTime();

// Muda o timer a cada 1 segundo
var x = setInterval(function() {

  // Pega a data atual
  var now = new Date().getTime();

// ve quanto tempo falta, fazendo a hora vinda do banco de dados menos a hora atual
  var distance = countDownDate - now;

//calculo para a hora ficar no formato certo
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Mostra a contagem no elemento com id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // Se o tempo acabar, muda o texto, e depois de 5 segundos vai pra pagina do battle royale
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "JÁ VAI COMEÇAR! ACERTE O MÁXIMO DE PERGUNTAS QUE CONSEGUIR";
    setTimeout( function() {
 window.location.href = "pergProva.php";
  
}, 5000 );
  }
  
}, 1000);

</script>













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
      box-shadow: 2px 2px 10px #0006;
      background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);
      border-radius:20px;
      margin-bottom: 5%;
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
      margin-top:2%;
      display:flex;
      flex-direction:row;
      border-radius:10px;
      margin-top: 0%;
      height: 30px;
      overflow: hidden;
      box-shadow: 1px 1px 10px #0006;
 
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
      margin-top:20px;
      margin-bottom:20px
      
  }

  </style>


  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' type='text/css' href='CSS/Ranking.css'>
      <title>Tela de Espera</title>
      
  </head>
  <body> 
  <!-- Cabeçalho da Página, onde fica o botao voltar caso o usuario queira sair -->
      <header style="min-height: 60px;
          position: relative;
          top: 0;
          right: 0;
          left: 0;
          height: 10%;
          align-items: initial;
          color: #fff;
          text-align: center;
          background: linear-gradient(180deg, #22C4EA 0%, #0B7591 100%);
          z-index: 2;
        box-shadow: 2px 2px 10px #0006;
          ">
                      <a href="home.php">
                          <button style="float: left;
                                      border:none;
                                      height: 100%;
                                      margin-left:3%;
                                      background: none;">
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
              Aguarde
              </h1>
          

          </header>

<!-- Div para posicionamento -->
  
  <div style="width:100%;display:flex;flex-direction: column; align-items: center; justify-content: center; text-align:center">
  <!-- Div para a foto de perfil -->
      <div style="position: relative;
      width: 130px;
      height: 130px;
      margin-top: 10%;
      border-radius: 50%;
      background: linear-gradient(180deg, #45B0E5 0%, #FFFFFF 100%);box-shadow: 2px 2px 10px #0004;">
      <img src="a<?php echo $foto ?>" style="width:130px; height:130px; border-radius:50%;"/>
      </div>
      <p style="position: relative;margin-top:5%;margin-left:3%; margin-right:3%; font-family: sans-serif; font-size:20px;">Fique Atento! sua partida vai começar em :<p id="demo" style="font-size:22px;"> </p></p>
  </div>

      <div class="Card">
          <header>
              <p style="position: relative;">Usuários na Sala</p>

              
            
            <!-- Informações da tabelaL -->
              <div id='TableInfo'>
                      <div class="divisao"></div>
                  <div class="info" style="text-align:center">Nome</div>
                  <div class="info" style="text-align:center">Ano</div>
                  <div class="info" style="text-align:center">Turma</div>
                  <div class="info" style="text-align:center">Nível</div>
              </div>
              
          </header>

          <content> 
          <!-- Estrutura de Repetição para mostrar os jogadores que estão na sala -->
          <?php

  while($row  = mysqli_fetch_assoc($result3)){
        $posicao++ ;


  ?>


              <div class="row" style="margin-top: 1%; height: 30px;">
                  <div class="col" style="margin-top:1%;"><?php  echo $row['st_nome'] ?></div>
                  <div class="col" style="margin-top:1%;"><?php echo $row['st_ano'] ?></div>
                  <div class="col" style="margin-top:1%;"><?php  echo $row['st_curso'] ?></div>
                  <div class="col" style="margin-top:1%;  border:none"><?php  echo $row['st_nivel'] ?></div>
                  
              </div>
              <?php } ?>
              
              
            
          </content>
      </div>
  </body>
  </html>

