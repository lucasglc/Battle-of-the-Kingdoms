<?php
session_start();

// Destrua a sessão
session_destroy();

// Redirecionar para a página inicial
header("Location: index.php");
exit;
?>
