<?php
$_ENV = parse_ini_file('.env');


$dns = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
$usuario = "{$_ENV['USUARIO']}";
$senha = "{$_ENV['SENHA']}";

$conn = new PDO($dns, $usuario, $senha);
