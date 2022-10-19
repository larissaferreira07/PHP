<?php

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");

if(isset($_POST['update']))
{
    $nome = $_POST["nome"];
    $email = $_POST["email"];  
    $data_nasc = $_POST["data_nasc"]; 
    $ADM = $_POST["ADM"];
    $matricula = $_POST["matricula"];

    $sqlUpdate = "UPDATE funcionario SET nome='$nome', email='$email', data_nasc='$data_nasc', ADM='$ADM', matricula='$matricula'
    WHERE matricula='$matricula'";


}

header('Location: funcionario.php');
?>
