<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
       echo "Preencha o seu email";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha a sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE email = '$email'  ";
        $sql_query = $mysqli->query($sql_code) or die("Erro!" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
    
           $usuario = $sql_query->fetch_assoc();
           $senhaArmazenada = $usuario['senha'];

           if(password_verify($senha, $senhaArmazenada)){
             
            session_start();
            $_SESSION['id'] = $usuario;
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['cep'] = $usuario['cep'];
            $_SESSION['estado'] = $usuario['estado'];
            $_SESSION['bairro'] = $usuario['bairro'];
            header("Location: telacliente.php");
            exit();
        } else {
            echo '<span class="erro1">senha incorreta</span>';
            }

        } else {
            echo '<span class="erro2">Conta não existe</span>';
        }
        

    }
    }
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
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->
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
                            <img src = "img/Argal BRANCO.png">
                        </div>
                        
            
                        <form action="" method="POST">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="senha" placeholder="Senha">
                            <input type="submit"value="LOGIN"><a href="cadastrocliente.php"></a>
                        </form>
                        <br>
                        <p>Não tem uma conta?<a href="cadastrocliente.php">Criar</a></p>
                        
                        
                        
                    </div>
            
            
                  
                </section>
               
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