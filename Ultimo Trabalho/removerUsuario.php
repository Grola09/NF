<?php
require('banco.php');
$id = $_GET['id'];


$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

if($stmt) {    
    echo "<script>
    alert('Usuário removido com sucesso!');
    window.location.href = 'usuarios.php';
    </script>";
} else {
    echo "Deu ruim";
}

?>