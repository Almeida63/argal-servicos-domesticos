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
    <title>Serviços</title>
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->
</head>
<body>
     <!--header-->
    <header style="background-image: url('img/servicos.jpg');">          <!--imagem de fundo-->
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
            <section class="banner"> 
                <div class="banner-text">
                    <h1>Serviços</h1>                      <!--a section é a parte debaixo do menu-->
                   
 
                </div>
            </section>
            <section></section>
       </div>
    <!--div container-->
    </header>
    <!--end header-->
    <!--section servicos-->
    <section class="servicos">
        <div class="container">
            <h3>Nossos serviços</h3>
            <p>Conheça alguns de nossos serviços</p>
            <!--row cards-->
            <div class="rows-cards">
                <!---row card item 1-->
                <div class="row-card-item">
                    <img src="img/mecanico.png" alt="">
                    <p class="nome-servico"><strong>Mecânico</strong></p>
                    <p class="descricao-servico">
                        Temos vários mecânicos disponíveis para te ajudar com problemas
                        em seu veículo
                    </p>
                </div>
                <!---end row card item 1-->
                 <!---row card item 2-->
                 <div class="row-card-item">
                    <img src="img/eletricista.png" alt="">
                    <p class="nome-servico"><strong>Eletricista</strong></p>
                    <p class="descricao-servico">
                        Está com problemas em sua energia? Temos eletricistas para te ajudar também!
                    </p>
                </div>
                <!---end row card item 2-->
                   <!---row card item 3-->
                   <div class="row-card-item">
                    <img src="img/diarista.png" alt="">
                    <p class="nome-servico"><strong>Diarista</strong></p>
                    <p class="descricao-servico">
                        Precisando de uma limpeza em sua casa? Entre em contato com algumas
                        de nossas diaristas.
                    </p>
                </div>
                <!---end row card item 3-->
                 <!---row card item 4-->
                 <div class="row-card-item">
                    <img src="img/encanador.png" alt="">
                    <p class="nome-servico"><strong>Encanador</strong></p>
                    <p class="descricao-servico">
                        Também temos encanadores disponíveis em nossos serviços.
                </div>
                <!---end row card item 4-->
                 <!---row card item 5-->
                 <div class="row-card-item">
                    <img src="img/pintor.png" alt="">
                    <p class="nome-servico"><strong>Pintor</strong></p>
                    <p class="descricao-servico">
                       Precisando de uma pintura nova? Na Argal tem!
                </div>
                <!---end row card item 5-->
                  <!---row card item 6-->
                  <div class="row-card-item">
                    <img src="img/marceneiro.png" alt="">
                    <p class="nome-servico"><strong>Marceneiro</strong></p>
                    <p class="descricao-servico">
                       Serviço de marcenaria? Na Argal também tem!
                </div>
                <!---end row card item 6-->
            </div>
            <!--end row cards-->
        </div>
    </section>
    <!--end section servicos-->
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