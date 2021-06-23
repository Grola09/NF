<?php
require('banco.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindValue(':senha', $senha);
$stmt->execute();

if($stmt) {    
    echo "<script>
    window.location.href = 'usuarios.php';
    </script>";
} else {
    echo "Deu ruim";
}
    


?>