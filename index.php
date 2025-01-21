<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

include_once 'php/conexion_paginacion.php';

// Llamar a todos los registros
$sql = "SELECT b.descripcion, b.fecha_actual, u.nombre_usuario, t.tipo, d.departamento
        FROM bitacora b
        JOIN usuarios u ON b.usuario_id = u.id
        JOIN tipos_incidencia t ON b.tipo_incidencia_id = t.id
        JOIN departamentos d ON b.departamento_id = d.id
        ORDER BY b.fecha_actual DESC";
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

// Número de registros por página
$registros_x_pagina = 10;

// Contar artículos desde la base de datos
$total_registros_db = $sentencia->rowCount();

// Calcular el número de páginas
$paginas = ceil($total_registros_db / $registros_x_pagina);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bienvenido</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <!-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php?pagina=1"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
        
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="php/logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav> -->
    <?php
    include('layout/nav.php')
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
            include('layout/sideNav.php')
            ?>
        </div>
        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <main>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 20px;">
                        <div class="col">
                            <h1>Incidencias Registradas</h1>
                        </div>
                        <button class="btn btn-success me-md-2 mb-2 mr-2" onclick="window.location.href='agregar_incidencia.php'" type="button">Agregar
                            Incidencia</button>
                    </div>
                    <!-- Hacer que la paginacion arranque en 1 -->
                    <?php
                    if (!$_GET) {
                        header('Location:../index.php?pagina=1');
                    }

                    if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
                        header('Location:index.php?pagina=1');
                    }

                    $iniciar = ($_GET['pagina'] - 1) * $registros_x_pagina;
                    //echo $iniciar;

                    // sentencia sql traer los datos
                    $sql_registros = "SELECT b.descripcion, b.fecha_actual, u.nombre_usuario, t.tipo, d.departamento
                    FROM bitacora b
                    JOIN usuarios u ON b.usuario_id = u.id
                    JOIN tipos_incidencia t ON b.tipo_incidencia_id = t.id
                    JOIN departamentos d ON b.departamento_id = d.id
                    ORDER BY b.fecha_actual DESC LIMIT :iniciar, :nregistros";
                    $sentencia_registros = $pdo->prepare($sql_registros);
                    $sentencia_registros->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
                    $sentencia_registros->bindParam(':nregistros', $registros_x_pagina, PDO::PARAM_INT);
                    $sentencia_registros->execute();

                    $resultados_registros = $sentencia_registros->fetchAll();

                    ?>
                    <table class="table table-striped table-bordered table-hover " id="incidenciasTable">
                        <thead>
                            <tr>
                                <th>Nombre de Usuario</th>
                                <th>Tipo de Incidencia</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Departamento</th>
                            </tr>
                        </thead>
                        <?php foreach ($resultados_registros as $registro):  ?>
                            <tbody>
                                <!-- Aquí se mostrarán las incidencias registradas -->
                                <td><?php echo $registro['nombre_usuario']  ?></td>
                                <td><?php echo $registro['tipo']  ?></td>
                                <td><?php echo $registro['descripcion']  ?></td>
                                <td><?php echo $registro['fecha_actual']  ?></td>
                                <td><?php echo $registro['departamento']  ?></td>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </main>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">Anterior</a>
                    </li>

                    <?php for ($i = 0; $i < $paginas; $i++): ?>
                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                            <a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a>
                        </li>
                    <?php endfor ?>

                    <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                        <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">Siguiente</a>
                    </li>
                </ul>
            </nav>
            <?php
            include('layout/footer.php')
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>