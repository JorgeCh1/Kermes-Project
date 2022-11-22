<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="../index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Seguridad</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="usuario.php">
                        <i class="bi bi-circle"></i><span>Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="agregar_usuario.php">
                        <i class="bi bi-circle"></i><span>Agregar Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="crear_roles.php">
                        <i class="bi bi-circle"></i><span>Crear Roles</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#parroquia-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Comunidad</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="parroquia-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="comunidad.php">
                        <i class="bi bi-circle"></i><span>Comunidad</span>
                    </a>
                </li>
                <li>
                    <a href="agregar_comunidad.php">
                        <i class="bi bi-circle"></i><span>Agregar Comunidad</span>
                    </a>
                </li>
                <li>
                    <a href="parroquias.php">
                        <i class="bi bi-circle"></i><span>Parroquias</span>
                    </a>
                </li>
                <li>
                    <a href="agregar_parroquia.php">
                        <i class="bi bi-circle"></i><span>Agregar Parroquia</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#producto-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-basket3"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="producto-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="productos.php">
                        <i class="bi bi-circle"></i><span>Productos</span>
                    </a>
                </li>
                <li>
                    <a href="agregar_categoriaProd.php">
                        <i class="bi bi-circle"></i><span>Categoría de Productos</span>
                    </a>
                </li>
                <li>
                    <a href="agregar_productos.php">
                        <i class="bi bi-circle"></i><span>Agregar Productos</span>
                    </a>
                </li>

            </ul>
        </li>

    </ul>

</aside>