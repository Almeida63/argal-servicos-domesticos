<?php

include('protect.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--fonte awesome-->
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro | Cliente</title>
    <!---link css-->
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
</head>
<body>
     <!--header-->
    <header style="background-image: url('img/login.jpg');">          <!--imagem de fundo-->
       <div class="container">
        <nav>
          <a href="index.php">
            <img src="img/Argal BRANCO.png" width="70" alt="Logo">  
          </a>
          <ul>
            <li><a href="index.php">Home</a></li>   
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li>
              <a href="#">Cadastro</a>
              <ul class="dropdown sub-menu">
                <li><a href="cadastrocliente.php">Cliente</a></li>
                <li><a href="cadastrotrabalhador.php">Trabalhador</a></li>
              </ul>
            </li>
            <li>
                    <a href="#">Login</a>
                    <ul class="dropdown sub-menu">
                    <li><a href="logincliente.php">Cliente</a></li>    
                    <li><a href="loginTrabalhador.php">Trabalhador</a></li>
                    </ul>
                  </li>
          </ul>  
        </nav>
            <section>
            </section>
           
            <body>

                <section class="area-cadastro">
                    <div class="cadastro">
                        <div>
                           
                        </div>
                        
            
                        <form class="poslogin">
                            <h3>Suas informações</h3>
                            <br>
                            <h1>Nome:<?php echo $_SESSION['Nome']; ?></h1>
                            <h1>Profissão:<?php echo $_SESSION['profissao']; ?></h1>
                            <h1>CEP:<?php echo $_SESSION['cep']; ?></h1>
                            <h1>Estado:<?php echo $_SESSION['estado']; ?></h1>
                            <h1>Bairro:<?php echo $_SESSION['bairro']; ?></h1>
                      
                            
                        
                        
                        
                    </div>
            
            
                  
                </section>
                <a href="editartrabalhador.php" class="botaocontratar" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-right: 10px;">Editar Conta</a>
                <a href="deletartrabalhador.php" class="botaocontratar" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-right: 10px;">Excluir Conta</a>
            </body>
            <section>
            </section>
            <section></section>
       </div>
    <!--div container-->
    </header>
    <!--end header-->
   

    
    <!--rodapé-->
    <footer class="footer">
        <div class="container">
            <div class="links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
            <p>&copy; 2023 Argal. Todos os direitos reservados</p>
        </div>

    </footer>
    <!--end rodapé-->
    <script src="js/main.js"></script>
</body>
</html> 