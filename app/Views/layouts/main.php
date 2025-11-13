<?php
/** @var CodeIgniter\View\View $this */
$title = $this->renderSection('title') ?: 'Brixo | Servicios Profesionales en Construcción';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brixo conecta profesionales certificados en construcción, remodelaciones y mantenimiento con clientes que buscan resultados confiables.">
    <title><?= esc($title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXee9c7F2AX9J6yXo3g" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= esc(base_url('css/style.css')) ?>">
    <?= $this->renderSection('styles') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="<?= esc(route_to('home')) ?>">Brixo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= esc(route_to('home')) ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= esc(route_to('about')) ?>">Acerca de</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= esc(route_to('hire')) ?>">Contrata</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= esc(route_to('professionals')) ?>">Profesionales</a></li>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-lg-3" href="<?= esc(route_to('payment-demo')) ?>">Pago Demo</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5 class="fw-semibold">Brixo</h5>
                <p class="text-white-50">Gestiona tus proyectos con profesionales certificados en obra civil, remodelaciones y mantenimiento residencial o corporativo.</p>
            </div>
            <div class="col-lg-4">
                <h6 class="fw-semibold">Servicios destacados</h6>
                <ul class="list-unstyled text-white-50">
                    <li>Remodelación integral</li>
                    <li>Acabados y carpintería</li>
                    <li>Instalaciones eléctricas</li>
                    <li>Redes hidráulicas y gas</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="fw-semibold">Contacto</h6>
                <p class="text-white-50 mb-1"><i class="bi bi-envelope me-2"></i> soporte@brixo.co</p>
                <p class="text-white-50 mb-3"><i class="bi bi-telephone me-2"></i> +57 300 000 0000</p>
                <div class="d-flex gap-3">
                    <a class="text-white-50" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="text-white-50" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="text-white-50" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="border-top border-white-25 mt-4 pt-3 text-center text-white-50 small">
            &copy; <?= date('Y') ?> Brixo. Todos los derechos reservados.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A2z02t52x0RSq70pMQdWZS6h6Siu7K5Gm5JmZ9Y8dT94WrHftjDbrCEXSU1oB" crossorigin="anonymous"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
