<?php

//Arquivo de definição das rotas do sistema

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {
   case '/':
      echo "Página Inicial";
   break;

   case '/aluno':
      AlunoController::listar();
   break;

   case '/aluno/cadastro':
      AlunoController::cadastro();
   break;
}