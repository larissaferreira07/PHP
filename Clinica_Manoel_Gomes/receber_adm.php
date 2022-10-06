<?php  include "conecta_mysql.inc"; ?>
<?php

$cad_adm= $_REQUEST["cadadm"];

if ($cad_adm == 'adm'){

    $nome = $_REQUEST["nome"]; 
    $user = $_REQUEST ["username"];
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

   
    $sql = "INSERT INTO administrador (nome, username, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$user','$data_nasc','$telefone','$email','$senha');";  
    mysqli_query($mysqli,$sql);

    header ('location: perfil.html');

}

?>