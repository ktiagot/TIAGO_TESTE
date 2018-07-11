<?php
    include "configuracao.php" ;
    // Checando campos vazios
    if (empty($_POST['cpfPassageiro']) or empty($_POST['nomePassageiro']) or
    empty($_POST['dataNascimentoPassageiro']) or empty($_POST['sexoPassageiro']))
    {
        ?><script>alert("Preencha todos os campos!")</script><?php
        header("Refresh: 0; ../php/cadastrar_passageiros.php");
    }
    else
    {
        $cpf = $_POST['cpfPassageiro'];
        $nome_passageiro = $_POST['nomePassageiro'];
        $dt_nascimento = $_POST['dataNascimentoPassageiro'];
        $sexo = (int)$_POST['sexoPassageiro'];
        $sql = "INSERT INTO passageiros VALUES('$cpf', '$nome_passageiro', '$dt_nascimento', $sexo)";

        if ($con->query($sql) === TRUE)
        {
            ?>
                <script>alert("Passageiro cadastrado com sucesso!");</script>
                <script> location.replace("cadastrar_passageiros.php");</script>
            <?php
        }
        else
        {
            echo "Erro: " . $sql . "<br>" . $con->error;
        }
    }
?>