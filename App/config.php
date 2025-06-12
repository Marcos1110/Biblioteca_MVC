<?php

//Arquivo de configurações do sistema

//Diretório base do sistema
define('BASE_DIR', dirname(__FILE__, 2));
//Diretório das VIEWS do sistema
define('VIEWS', BASE_DIR . '\Views');
//Credenciais de acesso ao banco de dados
$_ENV['db']['host']     = "localhost:3306";
$_ENV['db']['user']     = "root";
$_ENV['db']['pswd']     = "Marcos@2025";
$_ENV['db']['database'] = "bibliteca";

/* Essa forma de especificar os dados de conexão ao BD não é realmente segura,
 * todavia, para fins de estudo, não creio que seja um problema. */