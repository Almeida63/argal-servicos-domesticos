<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


session_start();
ob_start();
include_once 'conexao.php';
require_once 'PHPMailer-master/PHPMailer.php';
require_once 'PHPMailer-master/SMTP.php';
require_once 'PHPMailer-master/Exception.php';
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
  <?php
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  if (!empty($dados['cadTrabalhador'])) {

    $empty_input = false;

    array_map('trim', $dados);
    if (in_array("", $dados)) {
      $empty_input = true;
      echo "Erro! necessário preencher todos os campos";
    }

    if (!$empty_input) {
      $senha = password_hash($dados['senha'], PASSWORD_DEFAULT);
      $query_trabalhador = "INSERT INTO trabalhador (nome, dataNascimento, profissao, email, senha,cep,estado,bairro) VALUES ('" . $dados['nome'] . "', '" . $dados['dataNascimento'] . "',
        '" . $dados['profissao'] . "', '" . $dados['email'] . "', '" . $senha . "', '" . $dados['cep'] . "', '" . $dados['estado'] . "','" . $dados['bairro'] . "') ";

      $cad_trabalhador = $conn->prepare($query_trabalhador);
      $cad_trabalhador->execute();
      if ($cad_trabalhador->rowCount()) {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.office365.com'; // altere para o host do seu provedor de e-mail
        $mail->Port = 587;
        $mail->Username = 'argalservicos@outlook.com'; // altere para o seu e-mail
        $mail->Password = 'ARGAL122'; // altere para a senha do seu e-mail
        $mail->setFrom('argalservicos@outlook.com', 'Argal Servicos'); // altere para o seu e-mail e nome
        $mail->addAddress($dados['email'], $dados['nome']); // destinatário do e-mail
        $mail->isHTML(true); // define que a mensagem será enviada em formato HTML
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Bem-vindo(a) a Argal'; // assunto do e-mail
        $mail->Body = 'Olá '.$dados['nome'].',<br><br>Bem-vindo(a) a Argal! Seu cadastro foi realizado com sucesso.<br><br>Atenciosamente,<br>Equipe da Argal'; // conteúdo do e-mail em HTML
        $mail->AltBody = 'Olá ' . $dados['nome'] . ', Bem-vindo a Argal! Seu cadastro foi realizado com sucesso. Atenciosamente, Equipe da Argal'; // conteúdo do e-mail em texto plano
        $mail->send();

        unset($dados);
        $_SESSION['msg'] = "<p style='color: green;'>Cadastro realizado com sucesso! </p>";
        header("Location: index.php");
      } else {
        echo "<p style='color: red;'> Erro </p>";
      }
    }
  }
  ?>

  <!--header-->
  <header style="background-image: url('img/cadastro\ \(2\).png');"> <!--imagem de fundo-->
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
      <section>
      </section>

      <body>

        <section class="area-cadastro">
          <div class="cadastro">
            <div>
              <img src="img/Argal BRANCO.png">
            </div>


            <form id="form1" name="cadTrabalhador" method="POST" action="">
              <input type="text" name="nome" placeholder="Nome completo">
              <input type="date" name="dataNascimento" placeholder="Data de nascimento">
              <input type="text" name="profissao" placeholder="Profissão">
              <input type="text" name="cep" placeholder="CEP">
              <input type="text" name="estado" placeholder="Estado">
              <input type="text" name="bairro" placeholder="Bairro">
              <input type="email" name="email" placeholder="E-mail">
              <input type="password" name="senha" placeholder="Senha">
              <input type="submit" value="Criar conta" name="cadTrabalhador">
            </form>
            <br>
            <p>Já tem uma conta?<a href="login.php">Entrar</a></p>



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