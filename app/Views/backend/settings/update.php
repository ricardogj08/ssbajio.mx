<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Configuraciones | Modificar
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                Modifica el sitio web
            </h1>

            <h2 class="text-sm">
                Actualiza todas las configuraciones del sitio web.
            </h2>

            <p class="text-error">
                <small>
                    <?= esc(session()->getFlashdata('error')) ?>
                </small>
            </p>
        </div>

        <label for="modal-action" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <?= form_open_multipart(url_to('backend.settings.update')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo de Google Tag Manager -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Google Tag Manager:
                    </span>
                </label>
                <input
                    type="text"
                    name="googleTagManager"
                    placeholder="Escribe el ID de Google Tag Manager"
                    value="<?= esc($settings->get('App.googleTagManager')) ?>"
                    class="input input-bordered"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('googleTagManager')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de Google Tag Manager -->

            <!-- Campo del tema de colores -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Tema de colores:
                    </span>
                </label>
                <select name="theme" class="select select-bordered">
                    <option value="" selected>
                        Selecciona un tema de colores...
                    </option>
                    <?php foreach ($themes as $theme): ?>
                        <option value="<?= esc($theme) ?>"<?= $theme === $settings->get('App.theme') ? ' selected' : '' ?>>
                            <?= esc($theme) ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('theme')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del tema de colores -->

            <!-- Campo del favicon -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Favicon:
                    </span>
                </label>
                <input
                    type="file"
                    name="favicon"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('favicon')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del favicon -->

            <!-- Campo del fondo del login -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Fondo de inicio de sesión:
                    </span>
                </label>
                <input
                    type="file"
                    name="loginBackground"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('loginBackground')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del fondo del login -->

            <!-- Campo del logo del backend -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Logo:
                    </span>
                </label>
                <input
                    type="file"
                    name="logo"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('logo')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del logo del backend -->

            <!-- Botón de submit -->
            <div class="flex flex-col lg:flex-row justify-end">
                <label for="modal-action-submit" class="btn btn-primary">
                    Guardar
                </label>
            </div>
        </div>

        <!-- Botón de submit con modal -->
        <?= $this->setData([
            'id'      => 'modal-action-submit',
            'message' => '¿Deseas guardar los cambios?',
        ])->include('backend/layouts/modal-action-submit') ?>
    <?= form_close() ?>

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.settings.index',
        'message' => '¿Deseas cancelar las modificaciones del sitio web?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
