<?php

if(isset($_POST['submit'])) {

    //print_r($_POST['nome']);
   // print_r('<br>');//
   // print_r($_POST['email']);//
    //print_r('<br>');//
    //print_r($_POST['telefone']);//
   // print_r('<br>');//
   // print_r($_POST['data_nascimento']);//
  //  print_r('<br>');//
   // print_r($_POST['senha']);//

   include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nasc = $_POST['data_nascimento'];

$result = mysqli_query($conexao,"INSERT INTO pacientes(nome,email,telefone,data_nasc) VALUES ('$nome', '$email', '$telefone', '$data_nasc')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suprimed</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4fa;
    
        }
        .box{
            position: abso;
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1{
            text-align: center;
            color: #03453d;
        }

        .inputBox{
            position: relative;
        }
        .inputUser{
            width: 100%;
            padding: 9px;
            margin-bottom: 0px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    
        
        
         #data_nascimento{
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;

         }
        
        #submit{
            background-color: #02907d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
    
        }
        #submit:hover{
            background-color: #03453d;        }

        a{
            display: flex;
            justify-content: right;
        }

     
    </style>
</head>
<body>
    <a href="home.php"></a>
    <div class="box">
        <form action="pacientes.php" method="POST">
                <h1>Cadastro Pacientes</h1>
                <br>
                <div class="inputBox">
                <label for="nome" class="labelInput"></label>
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="Digite seu nome" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="email" class="labelInput"></label>
                    <input type="text" name="email" id="email" class="inputUser" placeholder="Email" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput"></label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder="Telefone" maxlength="13" required>
                </div>
                <br><br>
                <label for="data_nascimento"></label>
                <input type="text" name="data_nascimento" id="data_nascimento" placeholder="Data Nascimento" maxlength="10"  required>
                                
                <br><br>
                <div class="botao">
                <input type="submit" name="submit" id="submit" value="Enviar" ></input>
                </div>

               <a href="sistema.php">Voltar</a>                

                
        </form>
    </div>
</body>
</html>