<html>

<style>
   body{
        background: linear-gradient(180deg, #46E2C9 0%, #008F76 99.48%);
        background-repeat: no-repeat;
        background-attachment: fixed;
        line-height: 1rem;
        letter-spacing: 2px;
    }

    .btn {
  animation-name: fade;
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

    .btn {
  
 
  background-color: transparent;

  border-radius: 1.2em;

  border-color: #fff;
  cursor: pointer;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  align-items: center;
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: center;

  font-size: 3rem;
 
  line-height: 1;
  margin: 20px;
  height: 70px;
  align-content: center;
  text-align: center;
  width:130px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700; }


    .materia {
        border-width: 3px solid white;
  color: #fff;
  background-image: -webkit-linear-gradient(45deg, #ffffff 50%, transparent 50%);
  background-image: linear-gradient(45deg, #ffffff 50%, transparent 50%);
  background-position: 90%;
  background-size: 400%;
  text-align: center;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
}

.materia:hover {
    text-align: center;
    color: #31AE98;
  background-position: 0;
}
            
	


</style>
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
        <!--Link que redireciona o usuario para home-->
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
        

        </header>

	<div class="limiter" style="margin-top:0%">
        <div style="width:100%; font-size: 40px;color:#fff; text-align:center; position:relative;margin-top:5%;"> Escolha sua matéria:</h1></div>	
        <!--Divs Auxiliares para ajudar na responsividade do layout-->
		<div class="container-login100" style="background:none;margin-top:0%">
               
			<div class="wrap-login100" style="background: none; margin-top:-30%">
			

                        <div style="width:100%;
                    height: 5%;
                    text-align: center;
                    justify-content: center;
                    text-align:center;
                    margin-top: 0%;
                    color: #ffffff;">
       



    <a href="PergComumPort.php">
    <!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
                                       margin-top: 5%;
                                         
                                        border: 1px solid;
                                        
                                        "><div style="margin-top:17%"> Português</div></btn></a>


<a href="PergComumMat.php">
  <!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Matemática</div>
        
</btn>


    <a href="PergComumGeo.php">
     <!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Geografia</div></btn>


<a href="PergComumHist.php">
 <!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
                margin-top: 5%;
                 
                border: 1px solid;
                "><div style="margin-top:17%">História</div></btn>


<a href="PergComumFilo.php">
 <!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Filosofia</div></btn>



<a href="PergComumFis.php">
<!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Física</div></btn>


<a href="PergComumBio.php">
<!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Biologia</div></btn>


<a href="PergComumQuim.php">
<!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Química</div></btn>
</a>

<a href="PergComumIng.php">
<!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Inglês</div></btn>
</a>

<a href="PergComumEsp.php">
<!--Botão que te redireciona para a tela da matéria selecionada-->
        <btn class="btn materia" style="text-align: center;
        margin-top: 5%;
         
        border: 1px solid;
        "><div style="margin-top:17%">Espanhol</div></btn>

</a>










				</div>
				</div>
			</div>
		</div>
	</div>
	
	

	


</body>
</html>