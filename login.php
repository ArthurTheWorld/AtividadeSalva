<?php
if (isset($_POST['submit'])) {
    include_once("dados.php");

    $usuario = $_POST["usuario"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $result = mysqli_query($conecta, "INSERT INTO tb_usuario (usuario,nome,email,senha)
                  VALUES('$usuario','$nome','$email','$senha')");

    if ($result) {
        echo '<script>alert("Usuário cadastrado com sucesso!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/cores.css">
    <style>
        body {
            background-image: url('./img/berserk-skeletons.gif');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }
    </style>

</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form id="loginForm" action="testlogin.php" method="POST" onsubmit="return validateLoginForm()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" id="loginEmail" >
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" id="loginSenha">
                    <label>Senha</label>
                </div>
                <button type="submit" name="submit" id="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Não tem uma conta?<a href="#" class="register-link"> Registrar-se</a></p>
                    <p><a href="index.html" class="register-link"> Voltar</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Cadastro</h2>
            <form id="registerForm" action="login.php" method="POST" onsubmit="return validateRegisterForm()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="usuario" id="registerUsuario" >
                    <label>Usuário</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="nome" id="registerNome" >
                    <label>Nome Completo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" id="registerEmail" >
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" id="registerSenha" >
                    <label>Senha</label>
                </div>
                <button type="submit" name="submit" id="submit" class="btn">Registrar-se</button>
                <div class="login-register">
                    <p>já tem uma conta?<a href="#" class="login-link"> Entrar</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function validateLoginForm() {
            const email = document.getElementById('loginEmail').value;
            const senha = document.getElementById('loginSenha').value;

            if (email === '' || senha === '') {
                alert('Por favor, preencha todos os campos.');
                return false;
            }
            return true;
        }

        function validateRegisterForm() {
            const usuario = document.getElementById('registerUsuario').value;
            const nome = document.getElementById('registerNome').value;
            const email = document.getElementById('registerEmail').value;
            const senha = document.getElementById('registerSenha').value;

            if (usuario === '' || nome === '' || email === '' || senha === '') {
                alert('Por favor, preencha todos os campos.');
                return false;
            }
            return true;
        }

        document.querySelector('.register-link').addEventListener('click', () => {
            document.querySelector('.form-box.login').style.display = 'none';
            document.querySelector('.form-box.register').style.display = 'block';
        });

        document.querySelector('.login-link').addEventListener('click', () => {
            document.querySelector('.form-box.register').style.display = 'none';
            document.querySelector('.form-box.login').style.display = 'block';
        });
    </script>
</body>
</html>
