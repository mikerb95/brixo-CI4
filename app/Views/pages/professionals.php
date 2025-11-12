<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | Ofrece tus servicios como profesional<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="page-header py-5 bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold mb-3">Haz crecer tu negocio con clientes recurrentes</h1>
                <p class="lead text-muted">Brixo te conecta con proyectos de construcción y mantenimiento listos para ejecutar. Gestiona contratos, cronogramas y pagos protegidos con el respaldo de nuestra plataforma.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-primary btn-lg" href="#registro-pro">
                        Crear perfil profesional
                    </a>
                    <a class="btn btn-outline-primary btn-lg" href="<?= esc(route_to('payment-demo')) ?>">Probar flujo de pagos</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold mb-3">Beneficios clave</h5>
                    <ul class="list-unstyled text-muted mb-0">
                        <?php foreach ($perks as $perk): ?>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <i class="bi bi-stars text-primary mt-1"></i>
                                <span><?= esc($perk) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="registro-pro">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">¿Qué necesitas para unirte?</h2>
                <p class="text-muted">Queremos garantizar experiencias confiables a nuestros clientes. Por eso validamos tu experiencia, certificaciones y cumplimiento de normas de seguridad antes de activar tu perfil.</p>
                <ul class="list-unstyled text-muted">
                    <?php foreach ($requirements as $requirement): ?>
                        <li class="d-flex align-items-start gap-3 mb-3">
                            <i class="bi bi-check2-circle text-primary mt-1"></i>
                            <span><?= esc($requirement) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="fw-semibold mb-3">Solicitud de registro</h5>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" placeholder="Ej. Juan Pérez">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Especialidad</label>
                            <select class="form-select">
                                <option selected>Selecciona una opción</option>
                                <option>Maestro de obra</option>
                                <option>Carpintería</option>
                                <option>Plomería</option>
                                <option>Electricidad</option>
                                <option>Acabados</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="correo@empresa.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" placeholder="3001234567">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Experiencia destacada</label>
                            <textarea class="form-control" rows="4" placeholder="Cuéntanos sobre tus proyectos más relevantes"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-primary w-100">Enviar solicitud</button>
                        </div>
                    </form>
                    <p class="small text-muted mt-3 mb-0">*Pronto conectaremos este formulario con nuestro panel de onboarding para profesionales.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-3">Accede a oportunidades certificadas</h2>
                <p class="text-white-75">Recibe evaluaciones de desempeño, gana insignias y destaca frente a clientes corporativos. Brixo respalda tus proyectos con contratos digitales y pagos garantizados.</p>
            </div>
            <div class="col-lg-5">
                <div class="bg-white text-dark rounded-4 shadow-lg p-4">
                    <h6 class="fw-semibold text-uppercase text-muted small">Herramientas para profesionales</h6>
                    <ul class="list-unstyled mb-0 text-muted">
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="bi bi-kanban text-primary"></i> Tableros de proyectos y seguimiento diario.</li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="bi bi-cash text-primary"></i> Anticipos programados según hitos.</li>
                        <li class="d-flex align-items-start gap-2 mb-2"><i class="bi bi-people text-primary"></i> Gestión de cuadrillas y subcontratos.</li>
                        <li class="d-flex align-items-start gap-2"><i class="bi bi-award text-primary"></i> Certificaciones y cursos exclusivos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
