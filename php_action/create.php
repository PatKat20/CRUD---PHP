<?php
// Conexão com banco de dados
require_once 'db_connect.php';

// Inicia sessão
session_start();

// Função para limpar a entrada de dados
function clear($input){
    global $connect;
    // Limpa SQL Injection
    $var = mysqli_escape_string($connect, $input);
    
    // Limpa XSS
    $var = htmlspecialchars($input);
    return $var;
}

if(isset($_POST['btn-adicionar'])){
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES('$nome', '$sobrenome', '$email', '$idade')";
    $resultado = mysqli_query($connect, $sql);

    if($resultado){
        $_SESSION['mensagem'] = "Cliente adicionado com sucesso!";
        header("Location: ../index.php");
    } else{
        $_SESSION['mensagem'] = "Erro ao adicionar cliente";
        header("Location: ../index.php");
    }
}