<?php helper('form') ?>

<?= $this->extend('templates/backend/login') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Recuperación
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-2">
        Recupera tu contraseña
    </h1>

    <p class="text-sm">
        Ingresa tu email de acceso.
    </p>

    <p class="text-error mb-2">
        <small>
            <?= session()->getFlashdata('error') ?>
        </small>
    </p>

    <!-- Formulario de recuperación -->
    <?= form_open(url_to('backend.recoverPassword')) ?>
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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-2">
                <!-- Botón de submit -->
                <?= form_submit([
                    'value' => 'Recuperar',
                    'class' => 'btn btn-primary btn-block',
                ]) ?>
                <!-- Fin del botón de submit -->

                <?= anchor(url_to('backend.login'), 'Volver', [
                    'class' => 'btn btn-secondary btn-block',
                ]) ?>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de recuperación -->
<?= $this->endSection() ?>
