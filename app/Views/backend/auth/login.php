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

    <p class="text-error mb-2">
        <small>
            <?= session()->getFlashdata('error') ?>
        </small>
    </p>

    <!-- Formulario de inicio de sesión -->
    <?= form_open(url_to('backend.login')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo de email -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Email:
                    </span>
                </label>
                <label class="input-group">
                    <?= form_input([
                        'name'        => 'email',
                        'type'        => 'email',
                        'autofocus'   => true,
                        'required'    => true,
                        'maxlength'   => 256,
                        'placeholder' => 'Escribe tu email',
                        'value'       => set_value('email'),
                        'class'       => 'input input-bordered w-full',
                    ]) ?>
                    <span class="bi bi-envelope text-2xl"></span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('email')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de email -->

            <!-- Campo de contraseña -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Contraseña:
                    </span>
                </label>
                <label class="input-group">
                    <?= form_password([
                        'name'        => 'password',
                        'required'    => true,
                        'minlength'   => 8,
                        'maxlength'   => 32,
                        'placeholder' => 'Escribe tu contraseña',
                        'value'       => set_value('password'),
                        'class'       => 'input input-bordered w-full',
                    ]) ?>
                    <span class="bi bi-key text-2xl"></span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('password')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de contraseña -->

            <!-- Botón de submit -->
            <?= form_submit([
                'value' => 'Iniciar sesión',
                'class' => 'btn btn-primary mt-2',
            ]) ?>
            <!-- Fin del botón de submit -->

            <?= anchor(url_to('backend.recoverPassword'), '¿Olvidaste tu contraseña?', [
                'class' => 'link link-hover text-sm text-right',
            ]) ?>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de inicio de sesión -->

<?= $this->endSection() ?>
