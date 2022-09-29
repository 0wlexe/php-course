<?php
require_once("bootstrap.php"); // OR include("bootstrap.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title> Register PHP</title>
</head>

<body>
<h2> Register:</h2>
<form action="" method="POST">
    <br>Name: <input name="name" type="text" placeholder="Ex: André Silva" required>
    <br>E-mail: <input name="email" type="email" placeholder="Your E-mail" required>
    <br>Password: <input name="password1" type="password" placeholder="Must have 6 or more characters" autocomplete="off" required>
    <br>Confirm the Password:<input name="password2" type="password" placeholder="Confirm your password" autocomplete="off" required>
    
    <br><input type="checkbox" required="" name="terms"> I have read and agree to the terms.
    <br><button type="submit" class="btn btn-block mt-ig btn-default"><b>Register</b></button>

</form>


<?php

if($_POST){

    date_default_timezone_get('Brazil/East');
    
    $name = $_POST['name'];
    $name=htmlspecialchars($name,ENT_QUOTES); // security function to avoid XSS type vulnerabilities

    $email = $_POST['email'];
    $email=htmlspecialchars($email, ENT_QUOTES);

    $cpf = $_POST['cpf'];
    $cpf=htmlspecialchars($cpf, ENT_QUOTES);

    $numb = $_POST['number'];
    $numb=htmlspecialchars($number, ENT_QUOTES);

    $terms = $_POST['terms'];
    $terms=htmlspecialchars($terms, ENT_QUOTES);

    $password1 = $_POST['password1'];
    $password1=htmlspecialchars($password1, ENT_QUOTES);
    
    $password2 = $_POST['password2'];
    $password2=htmlspecialchars($password2, ENT_QUOTES);
    
    $passwordcryp = hash('sha256', $password2); // encrypt password
    
    $date = date("Y-m-d H:i:s");
    
    $ip = $_SERVER['REMOTE_ADDR'];

    if(empty($email)){
        echo "<script>window.alert('E-mail is missing!');</script>";
        echo "<meta http-equiv='refresh' content='0';'>";
        return false;
    }

    $veric = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $verifc = mysqli_num_rows($veric);

        if($verifc == true) {
            echo "<script>windows.alert('E-mail already registered!');</script>";
            echo "<meta http-equiv='refresh' content='0;'>";
            return false;
        }
    
    $veric2 = mysqli_query($conn, "SELECT * FROM users WHERE cpf='$cpf'");
    $verifc2 = mysqli_num_rows($veric2);
    
        if($verifc2 == true) {
            echo "<script>windows.alert('CPF already registered!');</script>";
            echo "<meta http-equiv='refresh' content='0;'>";
            return false;
         }

    if(empty($terms)){
        echo "<script>window.alert('You must accept the terms to register!');</script>";
        echo "<meta http-equiv='refresh' content='0';'>";
        return false;
    }

    if(empty($password1)){ // Verify password
        echo "<script>window.alert('You must write a password!');window.history.go(-1);</script>";
        return false;
    }
    
    if(empty($password2)){ // Verify password confirmation
        echo "<script>window.alert('You must confirm your password!');window.history.go(-1);</script>";
        return false;
    }

    if(strlen($password1) < 6){ 
        echo "<script>window.alert('Your password is too short!');window.history.go(-1);</script>";
        return false;
    }

    if($password1 != $password2) { 
        echo "<script>window.alert('Your passwords don't match!');window.history.go(-1);</script>";
        return false;
    }

    echo "<meta http-equiv='refresh' content='0;register.php?q=true'>";

////////// Gravando //////////////

$sqli=mysqli_query($conn, "INSERT INTO users (name, email, password, ip, date) VALUES ('$name', '$email', '$passwordcryp', '$ip', '$date')");

}
?>
</body>
</html>
