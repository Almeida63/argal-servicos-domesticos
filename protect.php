<?php

if(!isset($_SESSION)) {
   session_start();    
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta pagina porque você não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}


?>