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
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->
</head>
<body>
     <!--header-->
    <header style="background-image: url('img/hometrabalhador.jpg');">          
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
              
         </div>
         
                                                                                    

                </ul>
               
            </nav>
            <section class="banner"> 
                <div class="banner-text">
                    <h1>ARGAL</h1>                      <!--a section é a parte debaixo do menu-->
                    <p>Os melhores serviços para você</p>
                    <a href="cadastrocliente.php" class="btn animate-btn">Fazer cadastro</a> 
 
                </div>
            </section>
            <section></section>
       </div>
    <!--div container-->
    </header>
    <!--end header-->
    <!--faça parte-->
    <section class="faca-parte">
        <!---container-->
        <div class="container">
            <img src="img/faça-parte.png" width="" alt="Faça parte da Argal">
            <div class="faca-parte-text">
                <h3>Faça parte da Argal</h3>
                <p>Venha trabalhar com a gente! Diversas pessoas estão precisando <br> dos
                    seus serviços.
                </p>
                <a href="cadastrotrabalhador.php" class="btn animate-btn">Quero trabalhar na Argal</a>
            </div>
            
        </div>
        <div class="faca-parte-img"></div>
        
    </section>
    <!---end faça parte-->

    <!---faça parte 2-->
    <section class="faca-parte">
        <!---container-->
        <div class="container">
            
            <img src="img/diarista (2).png" width="550" alt="Diarista">
            <div class="faca-parte-text">
                <h3>Procurando profissionais de confiança e não encontra?</h3>
                <p>Na Argal você encontra! Aqui nós temos os melhores profissionais de diversas áreas
                    que atendem às suas necessidades.
                </p>
                <a href="cadastrocliente.php" class="btn animate-btn">Quero um profissional de confiança</a>
            </div>
            
        </div>
        <div class="faca-parte-img"></div>
    </section>
    <!---end faça parte 2-->
    <!--depoimentos-->
    <section class="depoimentos">
        <div class="container">
            <h3>Nossos depoimentos</h3>
            <p>Veja o que as pessoas acham da Argal</p>
            <div class="cards">
                <!---card item 1-->
                  <div class="card-item">
                    <img src="img/avatar1.jpg" alt="Cliente Bruno Silva">
                    <p class="nome-user">Bruno Silva</p>
                    <p class="depoimento-user">
                       Tive um problema na minha pia, chamei um encanador para consertar,
                       mas ele nunca tinha disponibilidade, então decidi procurar algum site especializado nesse 
                       tipo de serviço, encontrei a Argal, e em poucas horas minha pia estava consertada.
                    </p>
                    <div class="estrelas"></div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>  
                  <!--end card item 1-->
                   <!---card item 2-->
                   <div class="card-item">
                    <img src="img/avatar2.jpg" alt="Cliente Antônio Santos">
                    <p class="nome-user">Antônio Santos</p>
                    <p class="depoimento-user">
                        Gostei da Argal, estava precisando de uma diarista para limpar minha casa mas nunca encontrava
                        uma de confiança, um amigo me recomendou a Argal então decidi ver se atendia às minhas necessidades
                        contratei uma disrista e ela fez uma ótima limpeza.
                    </p>
                    <div class="estrelas"></div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>  
                  <!--end card item 2-->
                   <!---card item 3-->
                   <div class="card-item">
                    <img src="img/avatar3.jpg" alt="Cliente Isabelsa Souza">
                    <p class="nome-user">Isabela Souza</p>
                    <p class="depoimento-user">
                        Eu estava tendo infiltração de água na minha casa por conta das chuvas,
                        não achei nenhum pedreiro adequado para resolver meu problema, procurei na Argal e achei um
                        ótimo profissional, resolveu meu problema, 5 estrelas!!!
                    </p>
                    <div class="estrelas"></div>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>  
            </div>
            <!--end card item 3-->
        </div>
    </section>
    <!--end depoimentos-->

    <!--parceiros-->
    <section class="parceiros">
        <div class="container">
            <h3>Nossos parceiros</h3>
            <p>O projeto Argal só foi possível graças aos nossos parceiros, veja alguns deles:</p>
            <div>
               
                <img src="img/vscode.png" width="100" alt="">
                <img src="img/microsoft.png" alt="">
                <img src="img/coreldraw.png" alt="">
                <img src="img/google.png" alt="">
          
            </div>
        </div>
    </section>
    <!--end parceiros-->
      <!--faça parte-->
      <section class="faca-parte">
        <!---container-->
        <div class="container">
           
            <div class="faca-parte-text">
               
                <h3>De qual serviço está precisando?</h3>
                <p>A Argal tem diversos tipos de serviços disponíveis para você
                </p>
                <a href="servicos.html" class="btn animate-btn">Serviços</a>
            </div>
            <img src="img/Home trabalhador (2).png" width="500" alt=" ">
        </div>
        <div class="faca-parte-img"></div>
        
    </section>
    <!---end faça parte-->
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