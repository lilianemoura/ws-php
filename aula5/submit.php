<?php
session_star();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $username= $_POST['username'] ?? 'Anônimo';
    $email= $_POST['email'] ?? 'Sem email';
    $password = $_POST['password']?? ;

    echo "Usuario cadastro com sucesso! <br>";
    echo "Nome de Usuário: ".htmlspecialchar($username)."<br>";
    echo "Email: ".htmlspecialchar($email)."<br>";
}
else {
    header("Location: register.html");
    exit;
}
?>