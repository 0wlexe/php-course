<?php
// COOKIE armazena dados utilizados no navegador = cliente
// SESSION armazena dados de login = servidor - boas práticas de segurança
 
$cookie_name = "user";
$cookie_value = "hackersec";

setcookie($cookie_name, $cookie_value);

// echo $_COOKIE['user'];

session_start();
$email = "contato@hackersec.com";

$_SESSION['email'] = $email;

echo $_SESSION['email'];


?>