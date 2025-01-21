<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: agregar_incidencia.php");
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
    <title>Agregar Incidencia</title>
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
                <h1>Añadir Incidencia</h1>
                    <form id="bitacoraForm" action="php/process.php" method="POST">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nombre de Usuario:</label>
                            <select class="form-select" id="usuario" name="usuario">
                                <option value="" selected disabled>Seleccione un usuario</option>
                                <!-- Opciones de usuarios -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tipo_incidencia" class="form-label">Tipo de Incidencia:</label>
                            <select class="form-select" id="tipo_incidencia" name="tipo_incidencia">
                                <option value="" selected disabled>Seleccione un tipo de incidencia</option>
                                <!-- Opciones de tipos de incidencia -->
                            </select>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" required placeholder="Agregar descripción" id="descripcion" name="descripcion" style="height: 100px"></textarea>
                            <!-- <label for="descripcion" class="form-label">Descripción:</label>-->
                        </div>
                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento:</label>
                            <select class="form-select" id="departamento" name="departamento">
                                <option value="" selected disabled>Seleccione un departamento</option>
                                <!-- Opciones de departamentos -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form><br>
                </div>
                    
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