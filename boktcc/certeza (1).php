

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logout </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/styleLogin.css">

</head>
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

    .manter_checkbox:checked + .manter_botao::before {
      background: #55D069;
    }

    .manter_checkbox:checked + .manter_botao::after {
      left: 1.025em;
    }

    .manter_checkbox:focus + .manter_botao::before {
      outline: 3px dotted #CCC;
    }
  


</style>
</body>
<body>
  
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
        

            
         
           </div>

  <div style=
        "position: relative;
        width: 90%;
        height: 60px;
        left:0%;
        margin-top: 15px;
        margin-bottom: 5%;
        margin-left: 5%;
        top: 54%;
        text-align: center;
        font-family: Cambria, Georgia, serif;;
        font-style: normal;
        font-weight: normal;
        font-size: 10px;
        line-height: 33px;
        color: #2B3E51;
        "
        >
        
        <p style="font-size: 17px;
        margin-left: 2px;">Tem certeza que deseja <strong>sair</strong> da sua conta?</p>
        
        </div>
          

            <br>


        <a href="index.php">
         <div style="margin-top:3%; width:100%">
            <button class="login-btn" style="box-shadow: 3px 3px 2px #0003;
        border-radius: 25px
        margin-top:3%">
              Sim
            </button>
        </div>
        </a>

         <a href="home.php">
         <div style="margin-top:3%; width:100%">
            <button class="login-btn" style="box-shadow: 3px 3px 2px #0003;
        border-radius: 25px
        margin-top:3%">
              Não
            </button>
        </div>
        </a>

       
       
          

          
    
      </div>
    </div>
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