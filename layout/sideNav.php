<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            
            <div class="sb-sidenav-menu-heading">Addons</div>

            <a class="nav-link" href="index.php?pagina=1">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Incidencias
                            </a>
                            <a class="nav-link" href="agregar_incidencia.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Agregar Incidencia
                            </a>
                            <a class="nav-link" href="usuarios.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Usuarios
                            </a>
                            <a class="nav-link" href="html/register.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Registrar Usuarioss
                            </a>
                            
                            <a class="nav-link" href="php/logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cerrar Session
                            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Iniciaste como:</div>

        <a><?php echo htmlspecialchars($_SESSION['username']); ?></a>
    </div>
</nav>