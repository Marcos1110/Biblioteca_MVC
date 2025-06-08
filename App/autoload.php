<?php

//Arquivo de carregamento automático das classes do sistema

spl_autoload_register(function ($nome_da_classe) 
{
   $arquivo = BASE_DIR . "/" . $nome_da_classe . ".php";

   if(file_exists($arquivo)) {
      //Verifica a existência do arquivo, caso verdadeiro, realiza o include
      include $arquivo;
   } else {
      //Caso falso, retorna um erro. A tratativa para o erro será adicionada posteriormente
      throw new Exception("Arquivo não encontrado");
   }

});