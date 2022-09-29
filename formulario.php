<!DOCTYPE html>
<html>
<head>
    <title> Condições PHP! </title>
</head>
<body>
    <h2> Login </h2>
<form action="" method="POST">
    <input type="text" name="user" required="" placeholder="Username">
    <input type="password" name="pass" required="" placeholder="Password">
    <input type="submit" name="" value="Entrar">
</form>

<?php
if($_POST){
    // echo "Dado enviado!"

    $user = $_POST['user'];
    $pass = $_POST['pass'];
}

if($user == "hackersec" && $pass == "hacker"){
    echo "Acesso Permitido!";
}else{
    echo "Acesso Negado!";
}

// POST - internamente
// GET - externo, mostrado na URL - vulnerável

?>

</body>
</html>