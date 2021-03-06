<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TaxiManager - Administrador de Corridas Compartilhadas</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="icon" href="../favicon.ico">
</head>
<?php
    include "configuracao.php";
    $corrida = mysqli_query($con, $query_consulta_corrida);
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="../index.php">TaxiManager</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Painel de Controle</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Motoristas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti4">
            <li>
              <a href="../php/cadastrar_motoristas.php">Cadastrar</a>
            </li>
            <li>
              <a href="../php/consultar_motoristas.php">Consultar</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Passageiros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti5">
            <li>
              <a href="../php/cadastrar_passageiros.php">Cadastrar</a>
            </li>
            <li>
              <a href="../php/consultar_passageiros.php">Consultar</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti6" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Corridas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti6">
            <li>
              <a href="../php/cadastrar_corridas.php">Cadastrar</a>
            </li>
            <li>
              <a href="../php/consultar_corridas.php">Consultar</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <h4 style="color: white">Bem vindo, Administrador</h4>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../index.php">Painel de Controle</a>
        </li>
        <li class="breadcrumb-item active">Corridas</li>
      </ol>
      <!-- Icon Cards-->
      
      <div class="container">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Consultar Corridas</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Passageiro</th>
                  <th>Motorista</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Passageiro</th>
                  <th>Motorista</th>
                  <th>Valor</th>
                </tr>
              </tfoot>
              <tbody>
                  <?php 
                    while($row = mysqli_fetch_assoc($corrida))
                      {
                        echo"<tr>";
                        echo "<td>".$row["nome_passageiro"]."</td>";
                        echo "<td>".$row["nome_motorista"]."</td>";
                        echo "<td>R$".$row["valor"]."</td>";
                        echo"</tr>";
                      }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    </div>


    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Tiago Thomas Assis</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>

</body>
</html>
