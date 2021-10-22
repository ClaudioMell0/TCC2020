<?php include 'include/sessao.php';
$foto = $_SESSION['foto'];
?>
<html>
    <meta charset="utf-8">

    <title>Home</title>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <body>




<style> .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #FFFFFF;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }





.sidenav a:hover, .dropdown-btn:hover, i:hover {
  color: #1a71ff;
}




.active {
  background-color: green;
  color: white;
}

.dropdown-container {
  display: none;

  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}
    body {

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



.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
    
    .sidenav a:hover {
      color: #1a71ff;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 16px;
    
    }
    
    #main {
      transition: margin-left .5s;
      margin-top:-35%;
      margin-right:85%;
      
      


    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }


    .botoes_fora{
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
    
    }




    </style>
    
    <body>
    
    
    

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Links de estilização -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>
	<!-- Divs auxiliares para deixar o layout responsivo -->
	<div class="limiter">
			
		<div class="container-login100">

			<div class="wrap-login100" style="box-shadow: 2px 2px 10px #0008;background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);">
	<!-- Menu Lateral -->
      <div id="mySidenav" class="sidenav">

      <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()"><i class="small material-icons" style="margin-left:95%; margin-top:7%;">clear</i></a>
      <div style="display:flex; flex-direction: row;"><i class="medium material-icons" style="margin-top:5%; margin-left:5%;">perm_identity </i><a href="perfil.php">Perfil </a></div>
      <div style="margin-left:10%"><hr width="80%"></div>
      <div style="display:flex; flex-direction: row;"><i class="small material-icons" style="margin-top:0%; margin-left:0%;;"><img src="mais.png"> </i><a href="queronota.php" style="margin-left:-4%;">Quero + Nota</a></div>
      <div style="margin-left:10%"><hr width="80%"></div>
      
<div class="dropdown-btn">Ranking
      
    <i class="fa fa-caret-down"></i>
      </div>
      
  <div class="dropdown-container" style="margin-left:15%;">
  
  <div style="margin-left:0%"><hr width="80%"></div>
    <a href="ranking_acertos.php">Acertos Totais</a>
    <div style="margin-left:10%"><hr width="80%"></div>
    <a href="ranking_vit.php">Nível</a>

    
  
  </div>
      <div style="margin-left:10%"><hr width="80%"></div>
      <div style="display:flex; flex-direction: row;"><i class="small material-icons" style="margin-top:0%; margin-left:0%;"><img src="medal.png" style="width:2.5rem;"> </i><a href="Conquistas.php">Conquistas</a></div>
      <div style="margin-left:10%"><hr width="80%"></div>
      <div style="display:flex; flex-direction: row;"><i class="small material-icons" style="margin-top:5%; margin-left:5%;">phone </i><a href="Suporte.php">Suporte</a></div>
      <div style="margin-left:10%"><hr width="80%"></div>
      <div style="display:flex; flex-direction: row;"><i class="small material-icons" style="margin-top:0%; margin-left:0%; "><img src="sair.png"> </i><a href="certeza (1).php" style="margin-left:-4%;">Sair da Conta</a></div>


    </div>
    
    <!-- Código para abrir o Menu Lateral -->
    <script>
    function openMenu() {
      document.getElementById("mySidenav").style.width = "200px";
      document.html.style.backgroundColor = "rgba(70, 70, 70, 1.0)";
    }
    
    function closeMenu() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
   // Código para abrir o botão dropdown
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>
  
    <div style="justify-content:center;margin-left:2%;width:100%;height:100%;">
	<div style="width:100%;
                  heigth: 20%;
                  display: flex;
                  flex-direction: row;
                  flex-wrap: wrap;
                  justify-content: center;
                  align-content: center;
                  text-align: center;
                  align-items: center;">
                  <!-- Icone para abrir o Menu Lateral -->
                  <div id="main">
      <span style="font-size:30px;cursor:pointer" onclick="openMenu()">&#9776; </span>
    </div>
          <div style="
          width: 130px;
          height: 130px;
          margin-top: -20%;
          border-radius: 50%;
          background: linear-gradient(180deg, #45B0E5 0%, #FFFFFF 100%);
          box-shadow: 2px 2px 7px #0005;
          ">

<!-- Foto de Perfil -->
            <img class="perfil" src="a<?php 
            echo $foto ?>" style=" width: 130px;
            height: 130px;
           
            border-radius: 50%;">

             


</div>

           
           </div>
      </div>






<!-- Paragrafo com o nome do usuario -->
<div style=
"position: relative;
width: 100%;
height: 50px;
left:0%;
margin-top: 4%;
text-align: center;
font-family: Cambria, Georgia, serif;;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 20px;
color: #2B3E51;"
<p>Olá, <strong><?php echo $_SESSION['nomeUsuario'];?></strong>!</p>




</div>
<!-- Paragrafo para mostrar a turma e o ano do usuario -->
<div style="position: relative;
width: 100%;
height: 2%;
left: 0%;
margin-top: -3%;
text-align: center;
font-family: Cambria, Georgia, serif;;
font-style: normal;
font-weight: normal;
font-size: 17px;
line-height: 22px;
color: #2B3E51;"
<p style=""> <?php echo $_SESSION['ano']; ?>°|<?php echo $_SESSION['curso']; ?> </p>

</div>

<div style="position: relative;
width: 100%;
height: 7%;
left:0%;
margin-top: 5%;
text-align: center;
align-content: center;
font-family: Cambria, Georgia, serif;;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 60px;
color: #2B3E51;">O que vai <strong>jogar</strong> hoje? </p>



</div>   
<!-- Div dos Botões -->
<div class="botoes_fora">
<div style="width: 25%; margin-right:10%">
<a href="RegrasdoComum.php">
    <button style= "position: relative;
            width: 100%;
            height: 140px;
            box-shadow: 2px 2px 2px #0005;
			     margin-top:23%;
            font-family: Anonymous Pro;
            font-size: 60px;
            font-style: normal;
            font-weight: bold;
            color: #FFFFFF;
            border: none;
            background: linear-gradient(180deg, #46E2C9 0%, #008F76 100%);
            border-radius: 19px;
            "> 

<!-- Botão que redireciona a pessoa para a tela de regras do modo comum -->
 <img class="fixed" src="comum.png" style="width:39px;
                                                                                            height:39px;
                                                                                            margin-top: 18%;">
               <p style="position: relative;
               
               margin-top: 10%;
               margin-left:2%;
               margin-bottom:20%;
               color: #ffffff;">
       Comum
     </p>
            
            
    </button>
  </a>  
</div>


<div style="width: 25%; margin-right:10%;">
<a href="regrasdobattle.php">
<!-- Botão que redireciona a pessoa para a tela de regras do modo Battle Royale -->
    <button style= "position: relative;
    box-shadow: 2px 2px 2px #0005;
            width: 100%;
            height: 140px;
			      margin-top:23%;
            font-family: Anonymous Pro;
            font-size: 60px;
            font-style: normal;
            font-weight: bold;
            color: #FFFFFF;
            border: none;
            background: linear-gradient(180deg, #EEA849 0%, #F46B45 100%), #C4C4C4;
            border-radius: 19px;"> 

<img class="fixed" src="battle.png" style=" width:39px ;
                                                                             height: 39px;
                                                                             margin-top: 4%;">

<p  class="fixed" style=" position: relative;
          margin-top: 10%;
          margin-left: 20%
          margin-bottom:30%;
          color: #ffffff;">
  Battle 
  Royale
</p>                                                                             


            
            
    </button>
  </a>  
</div>



<div style="width: 25%;">
<a href="regrasprova.php">
<!-- Botão que redireciona a pessoa para a tela de regras do modo prova -->
    <button style= "position: relative;
            width: 100%;
            box-shadow: 2px 2px 2px #0005;
            height: 140px;
			margin-top:23%;
            font-family: Anonymous Pro;
            font-size: 60px;
            font-style: normal;
            font-weight: bold;
            color: #FFFFFF;
            border: none;
			background: linear-gradient(180deg, #22C4EA 0%, #0B7590 100%), #C4C4C4;
            border-radius: 19px;"> 


 <img class="fixed" src="prova.png" style="width:39px ;
                                                                             height: 39px;
                                                                             margin-top: 3%;
                                                                             margin-left: 6%">

<p class="fixed" style="position: relative;
          margin-top: 10%;
          margin-left: 20%
          margin-bottom:30%;
          color: #ffffff;">
  Prova
</p>                                                                             


            
            
    </button>
  </a>  
</div>
</div>

		
				

			</div>
		</div>
	</div>
	</div>
  </div>
	

	


</body>
</html>