<?php helper('form') ?>

<?= $this->extend('templates/backend/clean') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Restablecer contraseña
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-2">
        Restablece tu contraseña
    </h1>

    <h2 class="text-sm">
        Ingresa tu nueva contraseña de acceso.
    </h2>

    <p class="text-error">
        <small>
            <?= esc(session()->getFlashdata('error')) ?>
        </small>
    </p>

    <div class="divider"></div>

    <!-- Formulario para restablecer la contraseña -->
    <?= form_open(url_to('backend.resetPassword', $id, $key)) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo de la nueva contraseña -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Nueva contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="password"
                    required
                    minlength="8"
                    maxlength="32"
                    placeholder="Escribe tu nueva contraseña"
                    value="<?= set_value('password') ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('password')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la nueva contraseña -->

            <!-- Campo de confirmación de contraseña -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Repetir contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="pass_confirm"
                    required
                    minlength="8"
                    maxlength="32"
                    placeholder="Repita su contraseña"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('pass_confirm')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de confirmación de contraseña -->

            <!-- Botón de submit -->
            <input
                type="submit"
                class="btn btn-primary"
            >
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario para restablecer la contraseña -->
<?= $this->endSection() ?>
