<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM pacientes WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $data_nasc = $user_data['data_nasc'];
                $telefone = $user_data['telefone'];
            
             
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
        .box{
            position: absolute;
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
    
        h2{
            padding: 10px;
            text-align: center;
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
        .labelInput{
                    top: 0px;
            left: 20px;
        }
        #data_nascimento{
            width: 100%;
            padding: 9px;
            margin-bottom: 0px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        #submit{
            background-color:  #03453;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
                <h2>Editar Paciente</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput" placeholder="Nome Completo"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput" placeholder="Email"></label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput" placeholder="Telefone"></label>
                </div>
                    <br><br>
                <label for="data_nascimento"><b>Nasc</b></label>
                <input type="date" name="data_nasc" id="data_nasc" value=<?php echo $data_nasc;?> required>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
        </form>
    </div>
</body>
</html>