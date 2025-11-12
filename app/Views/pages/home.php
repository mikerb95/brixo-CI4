<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | Encuentra profesionales de obra<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section py-5 py-lg-6 bg-light position-relative">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary mb-3 fw-semibold">Construcción y mantenimiento sin complicaciones</span>
                <h1 class="display-5 fw-bold mb-3">Contrata profesionales confiables para tu próximo proyecto</h1>
                <p class="text-muted mb-4">Brixo es el marketplace que reúne maestros de obra, electricistas, carpinteros y especialistas en reformas para hacer realidad tus ideas con seguimiento y pagos protegidos.</p>
                <form class="card shadow-sm border-0 p-3" action="<?= esc(route_to('hire')) ?>" method="get">
                    <div class="row g-2">
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-muted small mb-1" for="service">¿Qué necesitas?</label>
                            <input class="form-control form-control-lg" id="service" name="servicio" type="text" placeholder="Ej. remodelar cocina" aria-label="Servicio">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label class="form-label text-muted small mb-1" for="city">Ciudad</label>
                            <input class="form-control form-control-lg" id="city" name="ciudad" type="text" placeholder="Bogotá" aria-label="Ciudad">
                        </div>
                        <div class="col-12 col-lg-2 d-grid">
                            <label class="form-label text-muted small mb-1 invisible" for="">Buscar</label>
                            <button class="btn btn-primary btn-lg" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="d-flex align-items-center gap-3 mt-4 text-muted small">
                    <div><i class="bi bi-shield-check text-primary me-1"></i>Pagos protegidos</div>
                    <div><i class="bi bi-people text-primary me-1"></i>Profesionales verificados</div>
                    <div><i class="bi bi-clock-history text-primary me-1"></i>Soporte 24/7</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-illustration-card rounded-4 shadow-lg overflow-hidden">
                    <div class="ratio" style="--bs-aspect-ratio: 70%">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80" alt="Equipo de construcción trabajando" class="img-fluid object-fit-cover w-100 h-100">
                    </div>
                    <div class="p-4 bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0 fw-semibold">Proyecto en ejecución</h6>
                            <span class="badge bg-success-subtle text-success">Garantía Brixo</span>
                        </div>
                        <p class="text-muted small mb-0 mt-2">Controla avances, hitos y pagos desde el panel de proyectos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-lg-end justify-content-between mb-4">
            <div>
                <h2 class="fw-bold mb-2">Servicios destacados</h2>
                <p class="text-muted mb-0">Seleccionamos profesionales certificados para cada etapa de tu obra.</p>
            </div>
            <a class="btn btn-outline-primary" href="<?= esc(route_to('hire')) ?>">Ver todos los servicios</a>
        </div>
        <div class="row g-4">
            <?php foreach ($serviceCategories as $category): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card h-100 p-4 border-0 shadow-sm rounded-4">
                        <div class="icon-wrap bg-primary-subtle text-primary mb-3">
                            <i class="bi <?= esc($category['icon']) ?>"></i>
                        </div>
                        <h5 class="fw-semibold mb-2"><?= esc($category['title']) ?></h5>
                        <p class="text-muted small mb-0"><?= esc($category['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">¿Buscas contratar?</h2>
                <p class="lead text-white-75">Publica tu proyecto, evalúa propuestas y gestiona tu obra con contratos, hitos y pagos protegidos desde un mismo lugar.</p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a class="btn btn-light btn-lg text-primary" href="<?= esc(route_to('hire')) ?>">Comienza un proyecto</a>
                    <a class="btn btn-outline-light btn-lg" href="<?= esc(route_to('payment-demo')) ?>">Simular pago</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-dark rounded-4 p-4 shadow-lg">
                    <h5 class="fw-semibold mb-3">Así funciona Brixo</h5>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($workflowSteps as $index => $step): ?>
                            <li class="d-flex gap-3 align-items-start mb-3">
                                <div class="step-circle flex-shrink-0"><?= esc($index + 1) ?></div>
                                <div>
                                    <h6 class="fw-semibold mb-1"><?= esc($step['title']) ?></h6>
                                    <p class="mb-0 text-muted small"><?= esc($step['description']) ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6 bg-light">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-lg-end justify-content-between mb-4">
            <div>
                <h2 class="fw-bold mb-2">Profesionales destacados</h2>
                <p class="text-muted mb-0">Elige expertos con historial comprobado, calificaciones y garantías.</p>
            </div>
            <a class="btn btn-outline-primary" href="<?= esc(route_to('professionals')) ?>">Unirme como profesional</a>
        </div>
        <div class="row g-4">
            <?php foreach ($featuredProfessionals as $pro): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="professional-card p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="fw-semibold mb-0"><?= esc($pro['name']) ?></h5>
                            <span class="badge bg-primary-subtle text-primary"><?= esc($pro['badge']) ?></span>
                        </div>
                        <p class="text-muted mb-1"><?= esc($pro['role']) ?></p>
                        <div class="d-flex align-items-center gap-3 text-muted small">
                            <span><i class="bi bi-star-fill text-warning me-1"></i><?= esc(number_format($pro['rating'], 1)) ?></span>
                            <span><i class="bi bi-briefcase me-1 text-primary"></i><?= esc($pro['jobs']) ?> proyectos</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Historias de éxito</h2>
            <p class="text-muted mb-0">Clientes y empresas confían sus obras a Brixo gracias a la calidad y respaldo del ecosistema.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card h-100 p-4 rounded-4 border-0 shadow-sm">
                        <p class="fst-italic text-muted">“<?= esc($testimonial['quote']) ?>”</p>
                        <h6 class="fw-semibold mb-0 mt-3"><?= esc($testimonial['name']) ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 py-lg-6 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2">Tu próximo proyecto comienza hoy</h2>
                <p class="text-white-75 mb-0">Recibe asesoría personalizada para planear, ejecutar y entregar tus obras con seguridad, seguimiento y pagos protegidos.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="btn btn-primary btn-lg" href="<?= esc(route_to('hire')) ?>">Publicar proyecto</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
