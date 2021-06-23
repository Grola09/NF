<?php

session_start();
unset($_SESSION['id']);
session_destroy();

echo "<script>
    alert('Usuário deslogado com sucesso!');
    window.location.href = 'index.php';
    </script>";