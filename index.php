<?php

    if(isset($_POST['submit']))
    {

        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['telefone']);
        // print_r('<br>');
        // print_r($_POST['sexo']);
        // print_r('<br>');
        // print_r($_POST['data_nascimento']);
        // print_r('<br>');
        // print_r($_POST['cidade']);
        // print_r('<br>');
        // print_r($_POST['estado']);
        // print_r('<br>');
        // print_r($_POST['endereco']);
         // print_r('<br>');
        // print_r($_POST['motivo']);
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $motivo = $_POST['motivo'];
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco, motivo) 
        VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco', '$motivo')");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="feminino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="feminino">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="motivo">Motivo do contato:</label>
                <select name="motivo">
                    <option value="parceria" name="motivo">Parcerias</option>
                    <option value="duvida" name="motivo">Duvidas</option>
                    <option value="outro" name="motivo">Outros</option>
                </select>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>