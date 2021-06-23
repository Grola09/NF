<?php
require('banco.php');
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$stmt->bindParam(':email', $email);
$stmt->bindValue(':senha', $senha);
$stmt->execute();
$user = $stmt->fetch();


if ($user) {
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['id'] = $user['id'];

    echo "<script>
    window.location.href = 'painel.php';
    </script>";

} else {
    echo "<script>
    alert('Usuário ou Senha inválidos');
    window.location.href = 'login.php';
    </script>";
}

