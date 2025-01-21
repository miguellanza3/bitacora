<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: usuarios.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Usuarios</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- aquí va el nav -->
     <?php 
     include('layout/nav.php')
     ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- Aquí va el sideNav -->
            <?php 
                include('layout/sideNav.php')
            ?>     
        </div>


        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 20px;">
                        <div class="col">
                            <h1>Usuarios</h1>
                        </div>
                        <button class="btn btn-success me-md-2" onclick="window.location.href='html/register.html'" style="margin-bottom: 5px;" type="button">Agregar Usuario</button>
                    </div>
                    <table class="table table-striped table-hover" id="usuariosTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre de Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí se mostrarán las incidencias registradas -->
                        </tbody>
                    </table>
                    
            </main>

            <!-- Aquí va el footer -->
            <?php 
                include('layout/footer.php')
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>