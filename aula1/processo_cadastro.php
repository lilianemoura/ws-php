<?php
$nome = $_POST['nome'] ?? 'Não informado';
$idade = $_POST['idade'] ?? 'Não informado';
$email = $_POST['email'] ?? 'Não informado';

$usuario = [
    'nome' => $nome,
    'idade' => $idade,
    'email' => $email
];

function saudacao ($nome){
    return "Olá $nome, seja bem-vindo ao nosso sistema!";
}

echo saudacao($usuario['nome']). "<br>";
echo "Aqui estão os detalhes do seu cadastro: <br>";
echo "Nome: ".$usuario['nome']. "<br>";
echo "Idade: ".$usuario['idade']. "<br>";
echo "Email:" .$usuario['email']. "<br>";

?>