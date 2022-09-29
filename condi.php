<!DOCTYPE html>
<html>
<head>
    <title> Condições PHP! </title>
</head>
<body>

<?php

$a = 10;
$b = 20;
$soma = $a + $b;

if($soma == 30){
    echo "sim";
}
else{
    echo "não";
}

$usuario = "hacker";
$senha = "hackersec";

if($usuario == "hacker" && $senha == "hackersec"){
    echo "Acesso Permitido! Olá  $usuario";
}
else{
    echo "Acesso Negado!";
}



?>

</body>
</html>