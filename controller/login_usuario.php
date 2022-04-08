<?php

if(isset($_POST["login"])){
    $user = $_POST["username"];
    $senha = $_POST["senha1"];

    if($user == "" || $senha == ""){
        $message_error = "* Preencha todos os campos";
    }else{

        $stmt = $conn->prepare("SELECT * FROM users WHERE user_name='".$user."' ");
        $stmt->execute();

        $count = $stmt->rowCount();

        if($count > 0){

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                if(password_verify($senha, $row["password"])){
                    $_SESSION["usuario"] = $user;
                    header("Location: welcome.php");
                }else{
                    $message_error = "Senha incorreta!";
                }
            }
   
        }else{
            $message_error = "Usuário não cadastrado.";
        }
    }

}




?>