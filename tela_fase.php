<?php
session_start();

// Verificar se o usuário não está logado
if (!isset($_SESSION["nickname"])) {
    // Se não estiver logado, redirecionar para a página de login
    header("Location: tela_login.php");
    exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'; ?>
    <title>Tela de Fases</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 75;
            padding: 75;
        }
        .image-container {
            text-align: center;
        }
        .image-container img {
            width: 100%; /* Ajustando a largura da imagem para ocupar todo o espaço disponível */
        }
        .text-container {
            text-align: center; 
            padding: 100px; 
            font-size: 20px; 
            color: white;
            background-color: #ffff; 
        }
    </style>

</head>
<body>
   
    <div class="text-container" style="background-color: #0000;">
            <h3>Fases 01</h3>
            <p> O Encontro com Darius <br>
                <br>Em "Aventura dos Três Heróis", uma das fases mais desafiadoras e imersivas ocorre em uma densa e misteriosa floresta. À medida que você avança, a vegetação exuberante e os sons da vida selvagem criam uma atmosfera ao mesmo tempo encantadora e sinistra. Neste ambiente, nossos heróis se deparam com Darius, um dos seguidores mais leais e perigosos de Malik.<br>

                <br>Darius, conhecido por sua astúcia e força bruta, transformou a floresta em seu domínio. Ele utiliza o terreno a seu favor, emboscando os heróis e utilizando táticas de guerrilha. Para superar esse obstáculo, você precisará dominar as habilidades dos três heróis, combinando a força de Auron, a agilidade de Lyra e a magia de Thalos. Cada árvore, riacho e clareira da floresta guarda segredos e desafios que testarão sua estratégia e reflexos.</p>
        <br> <br>


        <div class="personagem-items">
            <a href="img/florestadia.jpg">
                <img src="img/florestadia.jpg" alt="florestadia">
            </a>            
        </div>
        
        
            <h3>Fases 02</h3>
            <p> Confronto Noturno: A Batalha com Malik <br>
                <br>Em uma das fases mais épicas e visualmente deslumbrantes do jogo, a ação se desenrola em uma floresta envolta pela escuridão da noite. A lua cheia ilumina o cenário, criando sombras inquietantes e uma atmosfera de suspense. É neste ambiente que ocorre o confronto decisivo com Malik, o antagonista principal.<br>

                <br>À medida que os heróis avançam pela floresta, a tensão aumenta. A presença de Malik é sentida a cada passo, e seus poderes das trevas tornam o ambiente ainda mais hostil. A batalha culmina em uma clareira iluminada pelo luar, onde Malik finalmente se revela. Utilizando um arsenal de feitiços poderosos e invocações de criaturas das trevas, Malik representa o teste final para Auron, Lyra e Thalos.<br>

                <br>A luta é intensa e exige o máximo de cada herói. Auron enfrenta Malik com sua espada flamejante, Lyra utiliza sua agilidade para desviar dos ataques e encontrar pontos fracos, enquanto Thalos conjura poderosos feitiços de luz para combater a magia negra de Malik. A união dos heróis, suas habilidades complementares e sua determinação são cruciais para triunfar nesta batalha épica.</p>

        <div class="personagem-items">
            <a href="img/florestanoite.jpg">
                <img src="img/florestanoite.jpg" alt="florestanoite">
            </a>            
        </div>
        
    </div>
</body>
</html>
