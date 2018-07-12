<?php
    include "configuracao.php" ;
?>
    <?php
    // Checando campos vazios
    if (empty($_POST['cpfMotorista']) or empty($_POST['nomeMotorista']) or
    empty($_POST['dataNascimentoMotorista']) or empty($_POST['modeloCarroMotorista'])
    or empty($_POST['sexoMotorista']) or empty($_POST['statusMotorista']))
    {
        ?><script>alert("Preencha todos os campos!")</script>
        <script> location.replace("cadastrar_motoristas.php"); </script><?php
    }

     else
    {
        $cpf = $_POST['cpfMotorista'];
        $nome_motorista = $_POST['nomeMotorista'];
        $dt_nascimento = $_POST['dataNascimentoMotorista'];
        $modelo_carro = $_POST['modeloCarroMotorista'];
        $sexo = (int)$_POST['sexoMotorista'];
        $status = (int)$_POST['statusMotorista'];
        $sql = "INSERT INTO motoristas VALUES('$cpf', '$nome_motorista', '$dt_nascimento', '$modelo_carro', $sexo, $status)";
        if ($con->query($sql) === TRUE)
        {
            ?>
                <script>alert("Motorista cadastrado com sucesso!");</script>
                <script> location.replace("cadastrar_motoristas.php");</script>
            <?php
        }
        else
        {
            echo "Erro: " . $sql . "<br>" . $con->error;
        }
    }
?>