<?php
require_once 'conexao.php';
$con = open_conexao();
$rs = mysqli_query($con,"Select * From clientes");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>

</head>

<body class="">

<div class="wrapper ">
    <?php require_once "menu.php" ?>
    <div class="main-panel">

        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-8 col-sm-8">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">add</i>
                                </div>
                                <a href="#1"><h3 class="card-title"> Novo Cliente </h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8 col-sm-8">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">search</i>
                                </div>
                                <a href="#2"><h3 class="card-title"> Buscar Cliente </h3></a>
                            </div>
                        </div>
                    </div>


                </div>
                <hr>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title ">Clientes</h4>
                            <p class="card-category"> Acesso rapido</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-danger">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Celular
                                    </th>
                                    <th>
                                        Ações
                                    </th>
                                    </thead>
                                    <tbody>
                                    <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                        <tr>
                                            <td><?php echo $row['id_cliente'] ?></td>
                                            <td><img src="../fotos_clientes/<?php echo $row['foto'] ?>" width="70" height="70"></td>
                                            <td><?php echo $row['nome'] ?></td>
                                            <td><?php echo $row['celular'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-default" title="Ver cliente"
                                                        onclick="javascript:location.href='editos.php?id_cliente='
                                                                + <?php echo $row['id_cliente'] ?> ">
                                                    <ion-icon name="search" size="small"></ion-icon>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php

                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>

</body>

</html>
