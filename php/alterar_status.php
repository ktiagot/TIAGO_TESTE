<?php
    include "configuracao.php";
    $atividade = $_POST['atividade'];
    $cpf = $_POST['cpfMotorista'];
    if($atividade=='Desativar')
    {
        $sql = "UPDATE motoristas SET atividade='1' WHERE cpf='$cpf'";
    }
    else
    {
        $sql = "UPDATE motoristas SET atividade='2' WHERE cpf='$cpf'";
    }
    if ($con->query($sql) === TRUE)
        {
            ?>
                <script> alert("Status alterado com sucesso!");</script>
                <script> location.replace("consultar_motoristas.php");</script>
            <?php
        }
     else {
        echo "Erro: " . "<br>" . $con->error;
    }    
    
?>