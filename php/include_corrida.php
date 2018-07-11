<?php
    include "configuracao.php" ;
    // Checando campos vazios
    if (!empty($_POST['nomeMotorista']) or !empty($_POST['nomePassageiro']))
    {
        ?><script>alert("Preencha todos os campos!")</script><?php
        header("Refresh: 0; ../php/cadastrar_corridas.php");
    }
    else
    {
        $nomeMotorista = $_POST['NomeMotorista'];
        $nomePassageiro = $_POST['NomePassageiro'];
        $valorCorrida = (float)$_POST['Valor'];
        $sql = "INSERT INTO corridas (motorista, passageiro, valor)
        VALUES ('$nomeMotorista', '$nomePassageiro' , '$valorCorrida')";
        if ($con->query($sql) === TRUE)
        {
            ?>
                <script>alert("Corrida cadastrada com sucesso!");</script>
                <script> location.replace("cadastrar_corridas.php");</script>
            <?php        
        } else
        {}
            echo "Erro: " . $sql . "<br>" . $con->error;
        
    }
?>