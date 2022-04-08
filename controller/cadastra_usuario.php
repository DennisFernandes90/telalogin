<?php

if(isset($_POST["cadastro"])){

    unset($_GET["success"]);

    $user = $_POST["username"];
    $senha1 = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    if($user == "" || $senha1 == "" || $senha2 == ""){
        $message_error = "* Preencha todos os campos";
    }else{

        $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = '".$user."' ");
        $stmt->execute();

        $count = $stmt->rowCount();

        if($count > 0){  
            $message_error = "Usuário já cadastrado";
        }elseif(strlen($senha1) < 6){
            $message_error = "Senhas devem conter pelo menos 6 caracteres";
        }
        elseif($senha1 != $senha2){
            $message_error = "Senhas não conferem";
        }else{

            $senha1 = password_hash($senha1, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (user_name, password) VALUES (:user_name, :password)");
            $stmt->bindParam(":user_name", $user);
            $stmt->bindParam(":password", $senha1);
            $stmt->execute();

            header("Location: index.php?success");       
            
        }
    }
}
?>