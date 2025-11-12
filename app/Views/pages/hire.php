<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | Contrata profesionales certificados<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="page-header py-5 bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold mb-3">Gestiona tu obra con un equipo especializado</h1>
                <p class="lead text-muted">Brixo centraliza la contratación, seguimiento y pagos de tus proyectos. Desde remodelaciones hogar hasta adecuaciones corporativas, encuentra profesionales verificados listos para empezar.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a class="btn btn-primary btn-lg" href="#publica-proyecto">Publicar proyecto</a>
                    <a class="btn btn-outline-primary btn-lg" href="<?= esc(route_to('payment-demo')) ?>">Simular pago protegido</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 p-4 h-100">
                    <h5 class="fw-semibold mb-3">¿Por qué Brixo?</h5>
                    <ul class="list-unstyled mb-0 text-muted">
                        <?php foreach ($benefits as $benefit): ?>
                            <li class="d-flex gap-3 align-items-start mb-3">
                                <i class="bi bi-check-circle-fill text-primary mt-1"></i>
                                <span><?= esc($benefit) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="publica-proyecto">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Publica tu proyecto en minutos</h2>
                <p class="text-muted">Describe necesidades, adjunta planos o fotografías y define un presupuesto estimado. Los profesionales disponibles reciben alertas y envían propuestas con cronogramas y alcances claros.</p>
                <div class="card border-0 shadow-sm p-4 mt-4">
                    <h6 class="text-uppercase text-muted small fw-semibold">Checklist inicial</h6>
                    <ul class="list-unstyled mb-0 text-muted">
                        <li class="d-flex gap-3 align-items-start mb-3"><i class="bi bi-journal-check text-primary mt-1"></i> Alcance del proyecto y materiales clave.</li>
                        <li class="d-flex gap-3 align-items-start mb-3"><i class="bi bi-clock-history text-primary mt-1"></i> Fechas tentativas y horarios permitidos.</li>
                        <li class="d-flex gap-3 align-items-start"><i class="bi bi-geo-alt text-primary mt-1"></i> Ubicación precisa y requisitos de acceso.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary text-white rounded-4 p-4 h-100 shadow-lg">
                    <h5 class="fw-semibold mb-3">Hitos y entregables</h5>
                    <p class="text-white-75">Divide tu proyecto en hitos. Cada liberación de pago se activa cuando apruebas avances documentados con fotografías y reportes.</p>
                    <div class="d-flex flex-column gap-3 mt-4">
                        <div class="hito-card p-3 bg-white text-dark rounded-3 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary-subtle text-primary">Hito 1</span>
                                <span class="text-muted small">Planeación</span>
                            </div>
                            <p class="mb-0 mt-2 small">Visita técnica, cronograma detallado y cotización final.</p>
                        </div>
                        <div class="hito-card p-3 bg-white text-dark rounded-3 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary-subtle text-primary">Hito 2</span>
                                <span class="text-muted small">Ejecución</span>
                            </div>
                            <p class="mb-0 mt-2 small">Avances semanales con firmas digitales y reportes fotográficos.</p>
                        </div>
                        <div class="hito-card p-3 bg-white text-dark rounded-3 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary-subtle text-primary">Hito 3</span>
                                <span class="text-muted small">Entrega</span>
                            </div>
                            <p class="mb-0 mt-2 small">Checklist final, garantías y actas de recibo firmadas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-3">Preguntas frecuentes</h3>
                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-<?= esc($index) ?>">
                                <button class="accordion-button <?= $index !== 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-<?= esc($index) ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="faq-collapse-<?= esc($index) ?>">
                                    <?= esc($faq['question']) ?>
                                </button>
                            </h2>
                            <div id="faq-collapse-<?= esc($index) ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    <?= esc($faq['answer']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold mb-3">Servicios más solicitados</h5>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-2"><i class="bi bi-building-add text-primary me-2"></i> Remodelaciones integrales</li>
                        <li class="mb-2"><i class="bi bi-bricks text-primary me-2"></i> Construcción de muros y divisiones livianas</li>
                        <li class="mb-2"><i class="bi bi-door-open text-primary me-2"></i> Carpintería arquitectónica</li>
                        <li class="mb-2"><i class="bi bi-lightning text-primary me-2"></i> Adecuaciones eléctricas</li>
                        <li><i class="bi bi-water text-primary me-2"></i> Instalaciones hidrosanitarias</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-3">Equipo de acompañamiento especializado</h2>
                <p class="text-muted">Un project manager asignado supervisa tu obra, resuelve dudas contractuales y asegura la correcta ejecución de cada hito. Reportes consolidados, evidencias fotográficas y actas digitales quedan registradas para tu tranquilidad.</p>
            </div>
            <div class="col-lg-5">
                <div class="bg-white border rounded-4 shadow-sm p-4">
                    <h6 class="fw-semibold mb-3">Documentación generada</h6>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-2"><i class="bi bi-file-text text-primary me-2"></i>Actas de inicio y entrega</li>
                        <li class="mb-2"><i class="bi bi-card-checklist text-primary me-2"></i>Reportes semanales con evidencias</li>
                        <li class="mb-2"><i class="bi bi-cash-coin text-primary me-2"></i>Control de costos vs cronograma</li>
                        <li><i class="bi bi-safe text-primary me-2"></i>Garantías digitales hasta por 12 meses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
