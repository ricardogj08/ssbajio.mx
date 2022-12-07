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
        <!-- Grupo de campos de configuraciones general -->
        <section>
            <h3 class="text-xl font-bold">
                General
            </h3>

            <!-- Campo del tema de colores -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Tema de colores:
                    </span>
                </label>
                <select name="theme" class="select select-bordered select-secondary">
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
                <label for="favicon" class="label">
                    <span class="label-text">
                        Favicon:
                    </span>
                </label>
                <input
                    type="file"
                    name="favicon"
                    id="favicon"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered file-input-primary"
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
                <label for="loginBackground" class="label">
                    <span class="label-text">
                        Fondo de inicio de sesión:
                    </span>
                </label>
                <input
                    type="file"
                    name="loginBackground"
                    id="loginBackground"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered file-input-primary"
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
                <label for="logo" class="label">
                    <span class="label-text">
                        Logo:
                    </span>
                </label>
                <input
                    type="file"
                    name="logo"
                    id="logo"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered file-input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('logo')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del logo del backend -->
        </section>
        <!-- Fin del grupo de campos de configuraciones generales -->

        <div class="divider"></div>

        <!-- Grupo de campos de los emails -->
        <section>
            <h3 class="text-xl font-bold">
                Correos de contacto
            </h3>

            <!-- Campo de emails de destino -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Emails de destino:
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[to]"
                    required
                    placeholder="Escribe las direcciones de email"
                    value="<?= esc($settings->get('App.emailsTo')) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('emails.to')) ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de emails de destino -->

            <!-- Campo de emails de destino con copia (CC) -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Emails de destino con copia (CC):
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[cc]"
                    placeholder="Escribe las direcciones de email"
                    value="<?= esc($settings->get('App.emailsCC')) ?>"
                    class="input input-bordered input-secondary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('emails.cc')) ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de emails de destino con copia (CC) -->

            <!-- Campo de emails de destino con copia oculta (CCO) -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Emails de destino con copia oculta (CCO):
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[cco]"
                    placeholder="Escribe las direcciones de email"
                    value="<?= esc($settings->get('App.emailsCCO')) ?>"
                    class="input input-bordered input-secondary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('emails.cco')) ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de emails de destino con copia oculta (CCO) -->
        </section>
        <!-- Fin del grupo de campos de los emails -->

        <div class="divider"></div>

        <!-- Grupo de campos de aplicaciones -->
        <section>
            <h3 class="text-xl font-bold">
                Aplicaciones
            </h3>

            <!-- Campo de Google Tag Manager -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        ID de Google Tag Manager:
                    </span>
                </label>
                <input
                    type="text"
                    name="googleTagManager"
                    placeholder="Escribe el ID de Google Tag Manager"
                    value="<?= esc($settings->get('App.googleTagManager')) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('googleTagManager')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de Google Tag Manager -->
        </section>
        <!-- Fin del grupo de campos de aplicaciones -->

        <!-- Botón de submit -->
        <div class="flex flex-col lg:flex-row justify-end mt-2">
            <label for="modal-action-submit" class="btn btn-primary">
                Guardar
            </label>
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
