<?php
include('protect.php');
include_once 'conexao.php';

if (!empty($_GET['profissao']) && !empty($_GET['estado'])) {
  $profissao = $_GET['profissao'];
  $estado = $_GET['estado'];
  $sql = "SELECT * FROM trabalhador WHERE profissao LIKE '%$profissao%' AND estado LIKE '%$estado%'";
} else if (!empty($_GET['profissao'])) {
  $profissao = $_GET['profissao'];
  $sql = "SELECT * FROM trabalhador WHERE profissao LIKE '%$profissao%'";
} else if (!empty($_GET['estado'])) {
  $estado = $_GET['estado'];
  $sql = "SELECT * FROM trabalhador WHERE estado LIKE '%$estado%'";
} else {
  $sql = "SELECT * FROM trabalhador";
}

$result = $mysqli->query($sql);

if ($result->num_rows == 0) {
  echo "Desculpe, não temos nenhum trabalhador nessa profissão ou estado :(";
} else {



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
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--fonte awesome-->
    <link rel="shortcut icon" href="img/Argal BRANCO.png">
    <!---link css-->
    
    <style>
        /* Seus estilos CSS aqui */
        #pesquisarProfissao,
        #pesquisarEstado {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #pesquisarButton {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        #inputProfissao {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #inputEstado {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #btnPesquisar {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        #tabelaResultados {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #tabelaResultados th,
        #tabelaResultados td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background-color: #f9f9f9; /* Cor de fundo para todas as células */
        }

        #tabelaResultados th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Seu conteúdo HTML aqui -->
</body>
</html>

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
                    <li><a href="logintrabalhador.php">Trabalhador</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
              
         </div>
        <section>
<input type="search" placeholder="Digite uma profissão" id="inputProfissao"> 
<input type="search" placeholder="Digite a região" id="inputEstado"> 
<button id="btnPesquisar" onclick="searchData()">Pesquisar</button>
<table id="tabelaResultados">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Profissão</th>
      <th>CEP</th>
      <th>Bairro</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <!-- Dados da tabela aqui -->
  </tbody>
  <?php
     while($user_data = mysqli_fetch_assoc($result))
     {
       echo "<tr>";
       echo "<td>".$user_data['Nome']."</td>";
       echo "<td>".$user_data['profissao']."</td>";
       echo "<td>".$user_data['cep']."</td>";
       echo "<td>".$user_data['bairro']."</td>";
       echo "<td>".$user_data['estado']."</td>";
     }
      ?>
  </tbody>

</table>
</body>
<?php
 }
 ?>

</table>
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
</body>
<script>
  var searchProfissao = document.getElementById('inputProfissao');
  var searchEstado = document.getElementById('inputEstado');
    
  searchProfissao.addEventListener("keydown", function(event) {
   if (event.key === "Enter")
    {
    searchData();
  }
 });

  searchEstado.addEventListener("keydown", function(event) {
  if (event.key === "Enter")
  {
    searchData();
  }
});
    
    function searchData()
{
  var profissao = document.getElementById('inputProfissao').value;
  var estado = document.getElementById('inputEstado').value;
  var url = 'listartrabalhadores.php?';
  if (profissao !== '') {
    url += 'profissao=' + encodeURIComponent(profissao) + '&';
  }
  if (estado !== '') {
    url += 'estado=' + encodeURIComponent(estado) + '&';
  }
  // Remove o último caractere '&' adicionado acima
  url = url.slice(0, -1);
  window.location = url;
}
  </script>
</html>

