<style>
    body{
        background: linear-gradient( #BEF5FF -2%, #F8F8FF 58%);
        line-height: 1rem;
        align-items: center;
        align-content: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        
    }

    .card {
        font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
        font-size: 4rem;
  margin-top : 8%;
  width: 90%;
  height: auto;
  box-shadow: 0 10px 18px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  margin-left:5%;
}

.card{ animation-name: fade;
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


  </style>
  </head>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quero + Nota </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>


<body>
 <!--Cabeça-->  
     <header style="min-height: 60px;
        position: relative;
        top: 0;
        right: 0;
        left: 0;
        height: 10%;
        align-items: initial;
        color: #31AE98;
        text-align: center;
        background: white;
        z-index: 2;
        ">
        <!--Link que redireciona o usuario para a home-->
                    <a href="home.php">
            <!--Botão Voltar-->
                        <button style="float: left;
                        position:absolute;
                      
                                    border:none;
                                    height: 100%;
                                    margin-top:0%;
                                    left:8px;
                                    margin-left:0%;
                                    background: none;">
                          <!--Imagem do botão voltar-->
                            <img src="voltarazul.png" style="height: 40%;">
                        </button>
                    </a>
        
            <h1 style=" position: absolute;
                        top: 40%;
                        right: 25%;
                        left: 25%;
                        bottom: 45%;
                        color:#1C81FF;
                        font-style: normal;
                        font-weight: bold;
                        font-size: 1.8rem;
                        line-height: 1rem;">
            Quero + Nota
            </h1>
        

        </header>
           
  <!--Divs auxiliares para deixar o layout responsivo-->
<div class="container-login100" style="background:none;margin-top:0px;height:900px;">

      <div class="wrap-login100" style=" background:none; margin-top:-350px;height:500px;">
        <div class="container">

          
<div class="card" style="width:100%;">
    <h1 style="
   margin-top:-100px;
    display:flex;
    text-align: center;
    align-items:center;
    justify-content:center;
               font-size: 4rem;
               color: #FFFFFF;
               background:  #5098FB;
               height: 20%;
               "><p style="font-size:1.5rem; margin-top:1%;color:white;">Como Funciona?</p></h1>
               </div>

             
               <div class="card" style="margin-top:-55px; width:100%;">
    <p style="margin-top: 2px;
   
    display:flex;
    text-align: center;
    align-items:center;
    justify-content:center;
    margin-left: 2%;
    margin-right: 2%;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              font-size: 1rem;
              line-height: 3rem;">Se você acertar 30 perguntas seguidas, sem errar, de uma determinada matéria, você poderá ganhar meio ponto! Assim que você completar esses requisitos, será enviada uma notificação para o professor da respectiva matéria, que pode aprovar ou rejeitar, se ele aprovar você ganhou meio ponto! </p>
</div>


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