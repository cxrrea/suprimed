<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div{
            background-color: #fff;
            border-radius: 5px;
            padding: 40px;
            width: 400px;
            text-align: center;
        }
        input{
            margin-bottom: 30px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .inputSubmit{
            background-color: #02907d;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color:#03453d;
                        cursor: pointer;
        }

        h1{
          color:  #03453d
        }

        img{
            width: 100px;
        }
    </style>
</head>

<body>
    <div>
        <img src="imagem1.jpg" alt="">
        <h1>Clinica Suprimed</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>

        <p>Não tem uma conta? <a href="formulario.php">Cadastre-se</a></p>

        <a href="home.php">Voltar</a>
    </div>
</body>
</html>