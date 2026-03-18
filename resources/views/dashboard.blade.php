<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rally Matemático - FESC UNAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar px-4">
        <div class="container-fluid">

            <span class="fw-semibold text-white">Rally Matemático - FESC UNAM</span>

            <div class="dropdown ms-auto">
                <button class="btn btn-light border dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i> Nombre Usuario
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li>
                        <a class="dropdown-item text-danger" href="#">
                            <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- CONTENIDO -->
    <div class="container-fluid main-container d-flex align-items-center">

        <div class="container">

            <div class="row g-4 justify-content-center">

                <!-- FILA 1 -->
                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-primary mb-3">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <div class="card-title">Carreras</div>
                        <div class="card-text">Administración de carreras</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-success mb-3">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <div class="card-title">Maestros</div>
                        <div class="card-text">Gestión de docentes</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-warning mb-3">
                            <i class="bi bi-calendar"></i>
                        </div>
                        <div class="card-title">Periodos</div>
                        <div class="card-text">Control académico</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-danger mb-3">
                            <i class="bi bi-flag"></i>
                        </div>
                        <div class="card-title">Rallies</div>
                        <div class="card-text">Eventos activos</div>
                    </div>
                </div>

                <!-- FILA 2 -->
                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-info mb-3">
                            <i class="bi bi-grid"></i>
                        </div>
                        <div class="card-title">Módulos</div>
                        <div class="card-text">Configuración de módulos</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-secondary mb-3">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <div class="card-title">Registros</div>
                        <div class="card-text">Consulta de información</div>
                    </div>
                </div>

                <!-- NUEVO -->
                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-success mb-3">
                            <i class="bi bi-check2-square"></i>
                        </div>
                        <div class="card-title">Calificar</div>
                        <div class="card-text">Asignación de calificaciones</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card dashboard-card">
                        <div class="icon bg-soft-dark mb-3">
                            <i class="bi bi-gear"></i>
                        </div>
                        <div class="card-title">Configuración</div>
                        <div class="card-text">Ajustes del sistema</div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>