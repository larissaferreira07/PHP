<?php
    // Recebe os campos do formulário
    $username = $_POST["username"];
    $senha = $_POST["senha"];

    // Realiza a consulta no banco de dados
    include "conecta_mysql.inc";
    $sql = "SELECT * FROM administrador WHERE username = '$username';";
    $res = mysqli_query($mysqli, $sql);

    //testa se não encontrou o e-mail
    if(mysqli_num_rows($res) != 1){
        echo "E-mail inválido!";
        echo "<p><a href='login.html'>Página de login</a></p>";
    }
    else{
        $adm = mysqli_fetch_array($res);
        // testa se a senha está errada
        if(!password_verify($senha, $adm["senha"])){
            echo "Senha inválida!";
            echo "<p><a href='login.html'>Página de login</a></p>";
        }
        else{
            // Abre a sessão e registra as variáveis de login
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["senha"] = $adm["senha"];
            // direciona para a página inicial
            header("Location: perfil.html");
        }
    }
?>