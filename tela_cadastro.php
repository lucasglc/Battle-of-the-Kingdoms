<?php
session_start();

// Caminho para o arquivo onde os dados serão salvos
$caminho_arquivo = "dados_cadastro.json";


$usuarios = [];


if (file_exists($caminho_arquivo)) {
    // Lê o conteúdo do arquivo JSON e converte para um array PHP
    $conteudo_arquivo = file_get_contents($caminho_arquivo);
    $usuarios = json_decode($conteudo_arquivo, true);
}

// Variáveis para armazenar mensagens de erro
$erro_email = "";
$erro_nickname = "";
$exibir_mensagem = false;

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);
    $nickname = htmlspecialchars($_POST["nickname"]);

    // Verifica se os campos estão preenchidos
    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($nickname)) {
        // Verifica se o e-mail já está em uso
        foreach ($usuarios as $usuario) {
            if ($usuario["email"] === $email) {
                $erro_email = "O e-mail fornecido já está em uso. Por favor, escolha outro e-mail.";
                $exibir_mensagem = true;
                break;
            }
        }

        
        foreach ($usuarios as $usuario) {
            if ($usuario["nickname"] === $nickname) {
                $erro_nickname = "O nickname fornecido já está em uso. Por favor, escolha outro nickname.";
                $exibir_mensagem = true;
                break;
            }
        }

        // Se não houver e-mail ou nickname duplicados, proceda com o cadastro
        if (!$exibir_mensagem) {
            // Cria um array com os dados do novo usuário
            $novo_usuario = [
                "nome" => $nome,
                "email" => $email,
                "senha" => $senha,
                "nickname" => $nickname
            ];

            
            $usuarios[] = $novo_usuario;

            // Converte os dados para formato JSON
            $dados_json = json_encode($usuarios);

            // Salva os dados no arquivo JSON
            if (file_put_contents($caminho_arquivo, $dados_json)) {
                header("Location: tela_login.php");
                exit; // Termina o script para evitar qualquer saída adicional
            } else {
                echo "<p>Erro ao salvar os dados.</p>";
            }
        }
    } else {
        echo "<p>Todos os campos são obrigatórios.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'navbar.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        /* Estilos para centralizar o conteúdo */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #201b2c;
        }

        .login-content {
            width: 50vw; 
            height: 100vh;
            color: #fff;
            display: flex;
            justify-content: center; 
            align-items: center; 
        }

        
        form {
            width: 50%; 
            padding: 30px 40px;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            background: #2f2841;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;
        }

       
        label {
            display: block;
            margin-bottom: 8px;
            color: #77ffc0;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            background: #514869;
            color: #f0ffffde;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            background-color: #00ff88;
            color: #000;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00cc66;
        }

        .error {
            color: red;
            margin-top: 5px; 
        }
        .cadastro-text{
            color: #00ff88;
            font-weight: 800;
            margin: 0 auto; 
            text-align: center; 
        }
    </style>
</head>

<body>

<div class="login-content">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class = "cadastro-text">
            <h1>CADASTRE-SE</h1>
        </div>
        <div class="error">
            <?php if (!empty($erro_email)) echo '<p>' . $erro_email . '</p>'; ?>
            <?php if (!empty($erro_nickname)) echo '<p>' . $erro_nickname . '</p>'; ?>
        </div>
        <div class="textfield">
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="text" name="nickname" id="nickname" placeholder="Nickname">
        </div>
        <input type="submit" value="Cadastre-se">
    </form>
</div>

</body>
</html>
