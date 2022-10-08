<?php 
     include "conecta_mysql.inc"; 
     // aqui você vai criar uma variável pra receber o código da tabela que você quer editar
    //o meu tá cod_paciente mas é só substituir pelo nome que você colocou na hora de criar
     $cod_paciente = $_GET ["cod_paciente"];
     // aqui você vai substituir pelo nome da tabela que você quer editar
     // exemplo: se o nome da tabela no banco de dados for cliente você usa "SELECT * FROM cliente WHERE cod_cliente = $cod_cliente"
     $sql= "SELECT * FROM paciente WHERE cod_paciente = $cod_paciente;";
     $res= mysqli_query($mysqli,$sql);
     // aqui eu criei uma variável que recebe as informações do banco de dados, ela vai ser importante no formulário de edição
     $paciente = mysqli_fetch_array ($res);
?>

<html>
    <head>
        <title>Edição de Usuário</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="v  iewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="_css/perfil.css" />
        <link rel="stylesheet" href="_css/form.css" />
    </head>
    
<body>

          <div class="registration-form">
            <form action="editar_cliente.php" method="POST">
                <input type="hidden" name="operacao" value="editar">
                 <!-- aqui eu coloquei um input escondido que recebe o código que eu peguei lá no inicio, assim o arquivo edita.php vai saber de qual usuário substituir as informações -->
                <input type="hidden" name="cod_paciente" value="<?php echo $cod_paciente?>">
                <div class="form-icon">
                    <span><i class="icon far fa-user" align-self-center ></i></span>
                </div>
                
                <h5 class="text-uppercase">Editar Cliente:</h5>
                <br>
                <div class="form-group">
                     <!-- aqui eu coloquei no valor de cada input o valor da respectiva coluna que tem na tabela, fiz isso com todos os campos -->
                    <input type="text" required="required" class="form-control item" name="nome" placeholder="Nome Completo" value="<?php echo $paciente['nome']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="cpf" placeholder="CPF" value="<?php echo $paciente['cpf']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="telefone" placeholder="Telefone" value="<?php echo $paciente['telefone']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $paciente['data_nasc']?>">
                </div>
                <div class="form-group">
                    <input type="text" required="required" class="form-control item" name="email" placeholder="Email" value="<?php echo $paciente['email']?>">
                </div>

                <div class="form-group">
                    <input type="password" required="required" class="form-control item" name="senha" placeholder="Senha" value="<?php echo $paciente['senha']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Enviar</button>
                </div>
            </form>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    </body>
</html>