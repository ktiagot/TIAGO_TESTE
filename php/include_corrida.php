<?php
    include "configuracao.php" ;

    if (empty($_POST['nomeMotorista']) or empty($_POST['nomePassageiro']) or
    empty($_POST['Valor']))
    {
        ?><script>alert("Preencha todos os campos!")</script><?php
        header("Refresh: 0; ../php/cadastrar_corridas.php");
    }
    else
    {
        $nomeMotorista = $_POST['NomeMotorista'];
        $nomePassageiro = $_POST['NomePassageiro'];
        $valorCorrida = (double)$_POST['Valor'];
        $sql = "INSERT INTO CORRIDAS (motorista, passageiro, valor)
        VALUES ('$nomeMotorista', '$nomePassageiro' , '$valorCorrida')";
        if ($con->query($sql) === TRUE) { ?>
            <script>
            alert("Corrida cadastrada com sucesso!") ;
            </script>
        <?php header("Refresh: 0; ../php/cadastrar_corridas.php");
        } else
        {
            echo "Erro: " . $sql . "<br>" . $con->error;
        }
    }
?>