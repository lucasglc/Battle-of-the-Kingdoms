<?php
session_start();


if (isset($_SESSION["email"])) {
    header("Location: index.php");
    exit; 
}


function lerUsuarios() {
    $data = file_get_contents('dados_cadastro.json');
    return json_decode($data, true);
}


function login($email, $senha) {
    $usuarios = lerUsuarios();

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
            $_SESSION['email'] = $usuario['email']; 
            $_SESSION['nickname'] = $usuario['nickname']; // Definir o nickname na sessão
            header("Location: index.php");
            exit();
        }
    }

    
    echo "<p style='color: red; text-align: center;'>Credenciais inválidas. Por favor, tente novamente.</p>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST["email"]) && !empty($_POST["senha"])) {
       
        login($_POST["email"], $_POST["senha"]);
    } else {
       
        echo "<p style='color: red; text-align:;'>Por favor, preencha todos os campos.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
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
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #00ff88;
            color: #000;
            font-size: 16px;
            cursor: pointer;
        }
        
        .card-login > h1{
          color: #00ff88;
          font-weight: 800;
          margin: 0 auto; 
          text-align: center;
        }
        .card-login > h2{
          color: #00ff88;
          font-weight: 800;
          margin: 0 auto; 
          text-align: center;
        }
        .textfield{
          display:flex;
          flex-direction: column;
          align-items: center; 
          justify-content: center;
          width: 100%; 
        }
        .textfield > input{
          width: 100%;
          border: none;
          border-radius: 4px;
          padding: 12px;
          background: #514869;
          color: #f0ffffde;
          font-size: 12pt;
          box-shadow:0px 10px 40px #00000056;
          margin-bottom: 10px; 
          box-sizing: border-box;
        }
        .login-content p {
            margin-top: 20px;
            text-align: center;
        }
        .login-content a button {
            background-color:  #77ffc0;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
        .login-content a button:hover {
            background-color: #77ffc0;
        }
        .login-content a {
            color: #00ff88; 
            text-decoration: none; 
        }
        .login-content a:hover {
            text-decoration: underline;
        }
        .error-tooltip {
            position: relative;
            display: inline-block;
            cursor: help;
        }
        .error-tooltip .error-message {
            visibility: hidden;
            width: 150px;
            background-color: #ff0000;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .error-tooltip .error-message::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #ff0000 transparent transparent transparent;
        }
        .error-tooltip:hover .error-message {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="login-content">
        
           
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="card-login"> 
                 
                <h1>LOGIN</h1>
                <h2>Entre nessa aventura com a gente!</h2>
                  <p></p>
                  <p></p>
                  <div class="textfield"> 
                    <label for="email" class="error-tooltip">

                        <span class="error-message">Por favor, preencha este campo.</span> 
                    </label>
                    <input type="email" name="email" id="email" placeholder="Email"> <br>
                    <label for="senha" class="error-tooltip"> 

                        <span class="error-message">Por favor, preencha este campo.</span> 
        
                    </label>
                      
                    <input type="password" name="senha" id="senha" placeholder="Senha"><br>
                  </div>
                  <input type="submit" value="Entrar">
                  <p></p>
                  <label>Ainda não tem uma conta? <a href="tela_cadastro.php">Cadastre-se</a></label>
              </div>
        </form>
    </div>
</body>
</html>
