<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | ¿Para qué me sirves?<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section py-5 py-lg-6 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">¿Para qué me sirves?</h1>
                <p class="lead mb-4">Brixo es la plataforma que conecta personas y empresas con profesionales verificados en construcción, remodelaciones y mantenimiento. Coordinamos tu proyecto de principio a fin con pagos protegidos, contratos digitales y seguimiento en tiempo real.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a class="btn btn-light btn-lg text-primary" href="<?= esc(route_to('hire')) ?>">Comienza un proyecto</a>
                    <a class="btn btn-outline-light btn-lg" href="<?= esc(route_to('professionals')) ?>">Únete como profesional</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Características principales</h2>
            <p class="text-muted mb-0">Todo lo que necesitas para gestionar tus proyectos de construcción con confianza y tranquilidad.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($mainFeatures as $feature): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                        <div class="icon-wrap bg-primary-subtle text-primary mb-3 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 56px; height: 56px; font-size: 24px;">
                            <i class="bi <?= esc($feature['icon']) ?>"></i>
                        </div>
                        <h5 class="fw-semibold mb-2"><?= esc($feature['title']) ?></h5>
                        <p class="text-muted mb-0"><?= esc($feature['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">¿Para quién es Brixo?</h2>
            <p class="text-muted mb-0">Diseñamos soluciones específicas para cada tipo de usuario.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($useCases as $useCase): ?>
                <div class="col-lg-4">
                    <div class="h-100 p-4 bg-white rounded-4 shadow-sm">
                        <h4 class="fw-semibold mb-3"><?= esc($useCase['title']) ?></h4>
                        <p class="text-muted mb-3"><?= esc($useCase['description']) ?></p>
                        <ul class="list-unstyled">
                            <?php foreach ($useCase['benefits'] as $benefit): ?>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span><?= esc($benefit) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">¿Cómo funciona?</h2>
            <p class="text-muted mb-0">Proceso simple y transparente de principio a fin.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($howItWorks as $step): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="h-100 p-4 rounded-4 border border-2 border-primary-subtle">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 40px; height: 40px; font-size: 18px;">
                                <?= esc($step['step']) ?>
                            </div>
                            <h5 class="fw-semibold mb-0 ms-3"><?= esc($step['title']) ?></h5>
                        </div>
                        <p class="text-muted mb-0"><?= esc($step['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-3">Sirvo para simplificar tus proyectos</h2>
                <p class="lead text-white-75 mb-4">Ya sea que necesites remodelar tu hogar, reparar una tubería de emergencia o coordinar una construcción completa, Brixo te conecta con los mejores profesionales con garantías, seguimiento y pagos protegidos.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a class="btn btn-light btn-lg text-primary" href="<?= esc(route_to('hire')) ?>">Publicar proyecto</a>
                    <a class="btn btn-outline-light btn-lg" href="<?= esc(route_to('home')) ?>">Explorar servicios</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">¿Tienes más preguntas?</h2>
                <p class="text-muted mb-4">Nuestro equipo está disponible para ayudarte a entender cómo Brixo puede facilitar tus proyectos de construcción y remodelación.</p>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Email</h6>
                            <p class="text-muted mb-0">soporte@brixo.co</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Teléfono</h6>
                            <p class="text-muted mb-0">+57 300 000 0000</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Horario</h6>
                            <p class="text-muted mb-0">Lun - Dom, 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded-4 p-5">
                    <h5 class="fw-semibold mb-3">Datos clave</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="text-center p-3 bg-white rounded-3">
                                <h3 class="text-primary fw-bold mb-1">2,500+</h3>
                                <p class="text-muted small mb-0">Proyectos completados</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-white rounded-3">
                                <h3 class="text-primary fw-bold mb-1">850+</h3>
                                <p class="text-muted small mb-0">Profesionales activos</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-white rounded-3">
                                <h3 class="text-primary fw-bold mb-1">4.8★</h3>
                                <p class="text-muted small mb-0">Calificación promedio</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-white rounded-3">
                                <h3 class="text-primary fw-bold mb-1">98%</h3>
                                <p class="text-muted small mb-0">Proyectos exitosos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
