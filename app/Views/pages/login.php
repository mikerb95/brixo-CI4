<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Brixo | Inicia sesión<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Pagina de ingreso para usuarios demo -->
<section class="py-5 bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <div class="card border-0 shadow-sm p-4 p-lg-5">
                    <h1 class="h3 fw-bold mb-3 text-center">Bienvenido a Brixo</h1>
                    <p class="text-muted text-center mb-4">Accede al panel para gestionar proyectos, propuestas y pagos protegidos.</p>

                    <?php if (! empty($successMessage)): ?>
                        <!-- Mensaje informativo posterior a acciones como logout -->
                        <div class="alert alert-success" role="alert">
                            <?= esc($successMessage) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (! empty($credentialsError)): ?>
                        <!-- Mensaje de error cuando las credenciales no coinciden -->
                        <div class="alert alert-danger" role="alert">
                            <?= esc($credentialsError) ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= esc(route_to('login')) ?>" method="post" novalidate>
                        <!-- Campos principales del formulario de acceso -->
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= esc(old('email')) ?>" placeholder="usuario@brixo.co" required>
                            <?php if (isset($errors['email'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['email']) ?></div>
                            <?php else: ?>
                                <div class="form-text">Usuarios demo: cliente@brixo.co / pro@brixo.co</div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="••••••" required>
                            <?php if (isset($errors['password'])): ?>
                                <div class="invalid-feedback"><?= esc($errors['password']) ?></div>
                            <?php else: ?>
                                <div class="form-text">Contraseñas demo: Cliente123* / ProConstruye123*</div>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="remember" disabled>
                                <label class="form-check-label" for="remember">
                                    Recordarme (próximamente)
                                </label>
                            </div>
                            <a href="#" class="small text-decoration-none text-muted">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
                        </div>
                    </form>

                    <div class="border-top mt-4 pt-3 text-center small text-muted">
                        ¿Aún no eres parte de Brixo?
                        <a href="<?= esc(route_to('professionals')) ?>" class="text-decoration-none">Únete como profesional</a> o
                        <a href="<?= esc(route_to('hire')) ?>" class="text-decoration-none">publica un proyecto</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
