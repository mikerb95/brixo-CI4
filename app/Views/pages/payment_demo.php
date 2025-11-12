<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | Demo de pago protegido<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="py-5 bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold mb-3">Prueba el flujo de pagos protegidos</h1>
                <p class="lead text-muted">Simula una transacción con nuestro escrow digital. Este entorno no genera cargos reales, pero reproduce los pasos clave previo a conectar la pasarela bancaria.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <span class="badge bg-primary-subtle text-primary">Pagos asegurados por hitos</span>
                    <span class="badge bg-success-subtle text-success">Verificación en tiempo real</span>
                    <span class="badge bg-warning-subtle text-warning">Demo sin cobros</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold mb-3">¿Qué sigue?</h5>
                    <p class="text-muted mb-0">Una vez integremos la pasarela bancaria, podrás generar enlaces de pago, cuotas y desembolsos segmentados para tus proyectos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="fw-semibold mb-3">Formulario de simulación</h5>
                    <form method="post" action="<?= esc(route_to('payment-demo')) ?>" novalidate>
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Nombre del cliente</label>
                            <input type="text" class="form-control <?= isset($errors['client_name']) ? 'is-invalid' : '' ?>" id="client_name" name="client_name" value="<?= esc(old('client_name')) ?>" placeholder="Ej. Ana Rodríguez">
                            <?php if (isset($errors['client_name'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['client_name']) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="service_type" class="form-label">Servicio</label>
                            <select class="form-select <?= isset($errors['service_type']) ? 'is-invalid' : '' ?>" id="service_type" name="service_type">
                                <option value="" disabled <?= old('service_type') === null ? 'selected' : '' ?>>Selecciona un servicio</option>
                                <option value="Remodelación" <?= old('service_type') === 'Remodelación' ? 'selected' : '' ?>>Remodelación</option>
                                <option value="Carpintería" <?= old('service_type') === 'Carpintería' ? 'selected' : '' ?>>Carpintería</option>
                                <option value="Plomería" <?= old('service_type') === 'Plomería' ? 'selected' : '' ?>>Plomería</option>
                                <option value="Electricidad" <?= old('service_type') === 'Electricidad' ? 'selected' : '' ?>>Electricidad</option>
                                <option value="Acabados" <?= old('service_type') === 'Acabados' ? 'selected' : '' ?>>Acabados</option>
                            </select>
                            <?php if (isset($errors['service_type'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['service_type']) ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="amount" class="form-label">Valor total (COP)</label>
                                <input type="text" class="form-control <?= isset($errors['amount']) ? 'is-invalid' : '' ?>" id="amount" name="amount" value="<?= esc(old('amount')) ?>" placeholder="1500000">
                                <?php if (isset($errors['amount'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['amount']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="payment_token" class="form-label">Token temporal</label>
                                <input type="text" class="form-control <?= isset($errors['payment_token']) ? 'is-invalid' : '' ?>" id="payment_token" name="payment_token" value="<?= esc(old('payment_token')) ?>" placeholder="BRX123">
                                <?php if (isset($errors['payment_token'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['payment_token']) ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row g-3 mt-1">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Correo de contacto</label>
                                <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= esc(old('email')) ?>" placeholder="cliente@correo.com">
                                <?php if (isset($errors['email'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="text" class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>" id="phone" name="phone" value="<?= esc(old('phone')) ?>" placeholder="3001234567">
                                <?php if (isset($errors['phone'])): ?>
                                    <div class="invalid-feedback"><?= esc($errors['phone']) ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Generar simulación</button>
                        </div>
                        <p class="text-muted small mt-3 mb-0">El token simula la confirmación bancaria. Conecta tu pasarela favorita cuando configuremos el entorno productivo.</p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold mb-3">Resultado</h5>
                    <?php $success = session()->getFlashdata('payment_success'); ?>
                    <?php if (! empty($paymentResult) && $success): ?>
                        <div class="alert alert-success" role="alert">
                            <h6 class="fw-semibold mb-1">Pago en custodia generado</h6>
                            <p class="mb-0 small">Referencia <strong><?= esc($paymentResult['reference']) ?></strong>. Envía esta información al cliente y adjunta el soporte en el panel del proyecto.</p>
                        </div>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="text-muted">Cliente</span>
                                <span><?= esc($paymentResult['clientName']) ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="text-muted">Servicio</span>
                                <span><?= esc($paymentResult['serviceType']) ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="text-muted">Valor reservado</span>
                                <span>$ <?= esc($paymentResult['amount']) ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="text-muted">Contacto</span>
                                <span><?= esc($paymentResult['email']) ?> / <?= esc($paymentResult['phone']) ?></span>
                            </li>
                        </ul>
                        <h6 class="fw-semibold">Próximos pasos</h6>
                        <ol class="text-muted mb-0">
                            <?php foreach ($paymentResult['nextSteps'] as $step): ?>
                                <li class="mb-2"><?= esc($step) ?></li>
                            <?php endforeach; ?>
                        </ol>
                    <?php else: ?>
                        <div class="text-center text-muted py-5">
                            <i class="bi bi-credit-card fs-1 mb-3 text-primary"></i>
                            <p class="mb-0">Completa el formulario para generar una referencia de pago demostrativa.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
