<?php
    include "configuracao.php";
    $atividade = $_POST['atividade'];
    $cpf = $_POST['cpfMotorista'];
    if($atividade=='Desativar')
    {
        $sql = "UPDATE MOTORISTAS SET atividade='1' WHERE cpf=$cpf";
    }
    else
    {
        $sql = "UPDATE MOTORISTAS SET atividade='2' WHERE cpf=$cpf";
    }
    if ($con->query($sql) === TRUE) { ?>
        <script>
        alert("Status alterado com sucesso!") ;
        </script>
    <?php header("Refresh: 0; ../php/consultar_motoristas.php");
    } else {
        echo "Erro: " . $update . "<br>" . $con->error;
    }    
    
?>