<?php helper('form') ?>

<?= $this->extend('templates/backend/login') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Inicio de sesión
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-2">
        Inicio de sesión
    </h1>

    <p class="text-sm">
        Ingresa tus credenciales de acceso.
    </p>

    <p class="text-success">
        <small>
            <?= esc(session()->getFlashdata('success')) ?>
        </small>
    </p>

    <p class="text-error mb-4">
        <small>
            <?= esc(session()->getFlashdata('error')) ?>
        </small>
    </p>

    <!-- Formulario de inicio de sesión -->
    <?= form_open(url_to('backend.login')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del email -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Email:
                    </span>
                </label>
                <label class="input-group">
                    <input
                        type="email"
                        name="email"
                        required
                        maxlength="256"
                        placeholder="Escribe tu email"
                        value="<?= set_value('email') ?>"
                        class="input input-bordered w-full"
                        autofocus
                    >
                    <span class="bi bi-envelope text-2xl"></span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('email')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del email -->

            <!-- Campo de la contraseña -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Contraseña:
                    </span>
                </label>
                <label class="input-group">
                    <input
                        type="password"
                        name="password"
                        required
                        minlength="8"
                        maxlength="32"
                        placeholder="Escribe tu contraseña"
                        value="<?= set_value('password') ?>"
                        class="input input-bordered w-full"
                    >
                    <span class="bi bi-key text-2xl"></span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('password')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la contraseña -->

            <!-- Botón de submit -->
            <input type="submit" value="Iniciar sesión" class="btn btn-primary">

            <a href="<?= url_to('backend.recoverPassword') ?>" class="link link-hover text-sm text-right mt-2">
                ¿Olvidaste tu contraseña?
            </a>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de inicio de sesión -->
<?= $this->endSection() ?>
