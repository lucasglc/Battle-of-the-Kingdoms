<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        header {
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .titulo {
            font-family: Georgia, helvetica, sans-serif;
            font-size: 2rem;
            font-weight: 900;
            color: #77ffc0;
        }
        .personagens-container {
            display: flex;
            flex-wrap: wrap; /* Para quebrar as linhas */
            justify-content: space-evenly;
            align-items: center;
            gap: 20px; /* Espaço entre os itens */
            padding: 0 2vw;
        }
        .personagem-items {
            width: calc(33.33% - 20px); 
            height: 600px;
            border-radius: 20px;
            background-color: #201b2c;
            box-shadow: 5px 4px 4px #00000056;
            display: flex;
            flex-direction: column; /* Para alinhar a imagem e o texto verticalmente */
            align-items: center;
            overflow: hidden; 
            margin-bottom: 20px; 
        }
        .personagem-items img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
        }
        .personagem-items p {
            font-family: Georgia, helvetica, sans-serif;
            margin-top: 18px;
            margin: 10px;
            text-align: justify;
            color: #f9f9f9;
            font-size: 1.2rem; /* Tamanho do texto */
            font-weight: bold; /* Negrito */
        }
    </style>
</head>
<body>
    <header>
        <div class="titulo">
            <h1>Personagens</h1>
        </div>
    </header>
    <main>
        <div class="personagens-container">
            <div class="personagem-items">
                <a href="img/Auron.png">
                    <img src="img/Auron.png" alt="Auron">
                </a>
                <p>Auron, o Mestre da Espada</p>
                <p>Auron é um guerreiro habilidoso que domina a arte da espada como ninguém. Ele vem de uma linhagem de guerreiros honrados e tem como objetivo proteger os reinos dos perigos que os cercam. Auron é o maior guerreiro do seu reino, onde ele é o responsável por proteger e treinar todos de seu reino.</p>
            </div>
            <div class="personagem-items">
                <a href="img/Lyra.png">
                    <img src="img/Lyra.png" alt="Lyra">
                </a>
                <p>Lyra, o Arqueiro Ágil</p>
                <p>Lyra é um arqueiro talentoso, conhecido por sua agilidade e precisão com o arco e flecha. Ele cresceu em uma floresta isolada, treinando desde cedo para se tornar um guardião do reino da floresta. Lyra cresceu entre os animais e com eles aprendeu todas as técnicas de batalha e sobrevivência. Ninguém melhor que Lyra para sobreviver uma noite na floresta.</p>
            </div>
            <div class="personagem-items">
                <a href="img/Talos.png">
                    <img src="img/Talos.png" alt="Talos">
                </a>
                <p>Thalos, o Elemental do Raio</p>
                <p>Thalos possui o dom de manipular raios e trovões com suas mãos. Ele é um misterioso viajante que descobre seu poder durante uma tempestade, e desde então busca usar suas habilidades para o bem. O objetivo de Thalos é simples e direto, ser o maior dominador de raios, mas para isso precisará passar por muitos treinamentos e batalhas para testar suas habilidades.</p>
            </div>
            <div class="personagem-items">
                <a href="img/Malok.png">
                    <img src="img/Malok.png" alt="Malik">
                </a>
                <p>Malik, o Senhor das Trevas</p>
                <p>Malik é um tirano que deseja controlar todos os reinos, subjugar seus habitantes e espalhar a escuridão. Ele é o mestre de um exército sombrio e busca conquistar tudo em seu caminho. Malik possui uma espada indestrutível que só ele pode controlar, e é com ele que ele pretende espalhar seu reino, mesmo que isso custe a vida e a liberdade de todos.</p>
            </div>
            <div class="personagem-items">
                <a href="img/Darius.png">
                    <img src="img/Darius.png" alt="Darius">
                </a>
                <p>Darius, o Executor Implacável</p>
                <p>Darius é o braço direito de Malik, um guerreiro formidável que empunha uma espada indestrutível forjada nas profundezas do vulcão Visork. Sua lealdade ao Malik é inquestionável, e ele fará qualquer coisa para alcançar seus objetivos.</p>
            </div>
            <div class="personagem-items">
                <a href="img/Limiam.png">
                    <img src="img/Limiam.png" alt="Limiam">
                </a>
                <p>Limian, o Feiticeiro</p>
                <p>Limian é um feiticeiro poderoso que controla o fogo. Ele é inteligente e astuto, usando suas habilidades para destruir qualquer um que se oponha a Malik e seus planos.</p>
            </div>
        </div>
    </main>
</body>
</html>
