<?php
require('banco.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
$stmt->bindParam(':id', $id);
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