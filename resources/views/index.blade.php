<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rally Matemático | FESC UNAM</title>
    <link rel="icon" href="{{ asset('img/logo.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold">
                <img src="{{ asset('img/rallymate.png') }}" class="logo me-2">
                Rally Matemático | FESC UNAM
            </a>
        </div>
    </nav>

    <!-- LOGIN -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">

        <div class="card login-card p-4" style="max-width: 400px; width: 100%;">

            <h3 class="text-center mb-4" style="color:#AE8714;">Iniciar Sesión</h3>

            <form method="POST">

                <!-- USUARIO -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control text-center" name="usuario" placeholder="Usuario"
                        required>
                    <label><i class="bi bi-person"></i> No. de Trabajador</label>
                </div>

                <!-- PASSWORD -->
                <div class="form-floating mb-3 position-relative">
                    <input type="password" class="form-control text-center" id="password" name="fecha"
                        placeholder="Password" required maxlength="8">
                    <label><i class="bi bi-lock"></i> Contraseña</label>

                    <i class="bi bi-eye position-absolute top-50 inset-e-0 translate-middle-y me-3" style="cursor:pointer;"
                        onclick="togglePassword()" id="icono"></i>
                </div>

                <div class="text-center mb-3">
                    <small>Tu contraseña es tu fecha de nacimiento (ddmmaaaa)</small><br>
                    <small>¿No tienes cuenta? <a href="nuevoMaestro">Regístrate aquí</a></small>
                </div>

                <button class="btn btn-login w-100 py-2 fw-bold">
                    Iniciar Sesión
                </button>

            </form>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>