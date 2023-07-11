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
    <title>Contato</title>
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->
</head>
<body>
     <!--header-->
    <header style="background-image: url('img/hometrabalhador3.jpg');">          <!--imagem de fundo-->
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
          </nav>
            <section class="banner"> 
                <div class="banner-text">
                    <h1>Fale conosco</h1>                      <!--a section é a parte debaixo do menu-->
                    <p>Entre em contato conosco caso tenha alguma dúvida ou problema</p>
                   
 
                </div>
            </section>
            <section></section>
            
       </div>
    <!--div container-->
    </header>
    
    <!--end header-->
    <section class="contacto">
        <div class="container">
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0499758796423!2d-46.371096385586306!3d-23.530704866344696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce656d8ce04089%3A0xd2169bbc341b839e!2sFatec%20Ferraz%20de%20Vasconcelos!5e0!3m2!1spt-BR!2sbr!4v1679274088827!5m2!1spt-BR!2sbr" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacto-info">
                <div class="left-side">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>Rua Carlos de Carvalho, 200 - Jardim Sao Joao, Ferraz de Vasconcelos - SP, 08545-130</p>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>argalservicoscontato@gmail.com</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+55 (11) 96530-5214</p>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+55 (11) 92084-4692</p>
                    </div>
                </div>
                <div class="right-side">
                    <form action="">
                        <input type="text" placeholder="Nome" required>
                        <input type="email" placeholder="E-mail" required>
                        <input type="text" placeholder="Assunto" required>
                        <textarea cols="30" rows="10" placeholder="Sua Mensagem" required></textarea>
                        <button class="btn">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
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