<?php

include "conecta_mysql.inc";
$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    // Aqui as variáveis vão receber os valores, é só você substituir pelos campos da sua tabela
    $cod_paciente = $_REQUEST["cod_paciente"];
    $nome = $_REQUEST["nome"]; 
    $cpf = $_REQUEST["cpf"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    // Aqui você vai selecionar a tabela que você quer alterar e inserir os valores
    $sql = "UPDATE paciente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', data_nasc = '$data_nasc', email = '$email', senha = '$senha'";
    $sql .= "WHERE cod_paciente = $cod_paciente;";  
    mysqli_query($mysqli,$sql);
        
}



?>