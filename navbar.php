<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: f;
            justify-content: center;
            align-items: flex-start;
            height: 100vh; 
            background: #201b2c;
            flex-direction: column;
        }
        nav {
            text-align: center;
            background-color: #1C1C1C;
            overflow: hidden;
            position: absolute; /* Torna o navbar fixo no topo da janela */
            width: 100%; 
            top: 0; /* Alinha o navbar ao topo */
            z-index: 1000; 
        }
        nav a {
            display: inline-block;
            color: #77ffc0;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;
            font-size: 18px;    
        }
        nav a:hover {
            background-color: #201b2c;
            color: red;
        }
        .ola {
            position: absolute;
            top: 0;
            left: 70px; /* Posiciona no canto esquerdo */
            color: #77ffc0;
            padding: 20px 20px;
            font-size: 18px; 
        }
        .login-icon {
            position: absolute;
            top: 0;
            right: 20px;
            padding: 20px 70px;
            color: #77ffc0;
            font-size: 20px;
            z-index: 1001;
        }
    </style>
</head>
<body>

<nav>
    <?php
    // Verifique se o usuário está autenticado antes de exibir o nickname
    if (isset($_SESSION["nickname"])) {
        $nickname = $_SESSION["nickname"];
        echo '<span class="ola">Olá, ' . $nickname . '</span>'; 
    }
    ?>

    <a href="index.php">Home</a>
    <?php
    // Se o usuário estiver autenticado, exiba os links para as outras páginas
    if (isset($_SESSION["nickname"])) {
        echo '<a href="tela_personagem.php">Personagens</a>';
        echo '<a href="tela_fase.php">Fases</a>';
        echo '<a href="historia.php">História</a>';
    }
    ?>
    <a href="tela_cadastro.php">Cadastre-se</a>
    <?php
    
    if (isset($_SESSION["nickname"])) {
        echo '<a href="logout.php" class="login-icon"><i class="fas fa-sign-out-alt"></i></a>';
    } else {
        echo '<a href="tela_login.php" class="login-icon"><i class="fas fa-user"></i></a>';
    }
    ?>
</nav>

</body>
</html>