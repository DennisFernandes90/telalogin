<?php
session_start();
include "dao/connect.php";
include "controller/login_usuario.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="form-container">
            <form method="POST">

                <?php
                   if(isset($message_error)){
                       echo "<label class='text-danger'>".$message_error."</label>";
                   }

                   if(isset($_GET["success"])){
                    $message_success = "Cadastro realizado com sucesso";
                    echo "<label class='text-success'>".$message_success."</label>";
                    }
                ?>
                
                <div class="mb-3">
                    <label for="username" class="form-label">Nome de usuário *</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu nome de usuario">
                    
                </div>
                <div class="mb-3">
                    <label for="senha1" class="form-label">Senha *</label>
                    <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Digite sua senha">
                </div>


                <button type="submit" class="btn btn-success form-control mb-3" id="login" name="login">Fazer Login</button>

                <div class="logout-box">
                    <a href="index.php">Fazer Cadastro</a>
                </div>
            </form>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

