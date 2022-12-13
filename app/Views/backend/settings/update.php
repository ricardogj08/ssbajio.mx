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
                Modifica o actualiza todas las configuraciones del sitio web.
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

    <!-- Formulario de modificación de configuraciones -->
    <?= form_open_multipart(url_to('backend.settings.update')) ?>
        <!-- Grupo de campos de configuraciones general -->
        <section>
            <h3 class="text-xl font-bold">
                General
            </h3>

            <!-- Campo del nombre de la empresa -->
            <div class="form-control">
                <label for="company" class="label">
                    <span class="label-text">
                        Nombre de la empresa:
                    </span>
                </label>
                <input
                    type="text"
                    name="company"
                    id="company"
                    required
                    maxlength="256"
                    placeholder="Escribe el nombre de la empresa"
                    value="<?= esc($settings->get('App.company')) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('company')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre de la empresa -->

            <!-- Campo del teléfono de la empresa -->
            <div class="form-control">
                <label for="phone" class="label">
                    <span class="label-text">
                        Teléfono de contacto:
                    </span>
                </label>
                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    required
                    maxlength="15"
                    placeholder="Escribe el teléfono de contacto"
                    value="<?= esc($settings->get('App.phone')) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('phone')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del teléfono de la empresa -->

            <!-- Campo del tema de colores -->
            <div class="form-control">
                <label for="theme" class="label">
                    <span class="label-text">
                        Tema de colores:
                    </span>
                </label>
                <select name="theme" id="theme" class="select select-bordered select-secondary">
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
                <label for="background" class="label">
                    <span class="label-text">
                        Fondo de inicio de sesión:
                    </span>
                </label>
                <input
                    type="file"
                    name="background"
                    id="background"
                    size="2048"
                    accept="image/*"
                    class="file-input file-input-bordered file-input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('background')) ?>
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
                <label for="emails[to]" class="label">
                    <span class="label-text">
                        Destinatarios:
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[to]"
                    id="emails[to]"
                    required
                    placeholder="Escribe los emails de destino"
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
                <label for="emails[cc]" class="label">
                    <span class="label-text">
                        Destinatarios con copia (CC):
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[cc]"
                    id="emails[cc]"
                    placeholder="Escribe los emails con copia"
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
                <label for="emails[cco]" class="label">
                    <span class="label-text">
                        Destinatarios con copia oculta (CCO):
                    </span>
                </label>
                <input
                    type="text"
                    name="emails[cco]"
                    id="emails[cco]"
                    placeholder="Escribe los emails con copia oculta"
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

            <!-- Campo de WhatsApp -->
            <div class="form-control">
                <label for="whatsapp" class="label">
                    <span class="label-text">
                        Número de WhatsApp:
                    </span>
                </label>
                <input
                    type="tel"
                    name="whatsapp"
                    id="whatsapp"
                    maxlength="15"
                    placeholder="Escribe el número de WhatsApp"
                    value="<?= esc($settings->get('App.whatsapp')) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('whatsapp')) ?>
                    </span>
                    <span class="label-text-alt">
                        *en formato internacional
                    </span>
                </label>
            </div>
            <!-- Fin del campo de WhatsApp -->

            <!-- Campo de Google Tag Manager -->
            <div class="form-control">
                <label for="googleTagManager" class="label">
                    <span class="label-text">
                        ID de Google Tag Manager:
                    </span>
                </label>
                <input
                    type="text"
                    name="googleTagManager"
                    id="googleTagManager"
                    maxlength="256"
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

            <!-- Campo de search console -->
            <div class="form-control">
                <label for="googleSearchConsole" class="label">
                    <span class="label-text">
                        Verificación de Google Search Console:
                    </span>
                </label>
                <input
                    type="file"
                    name="googleSearchConsole"
                    id="googleSearchConsole"
                    size="1"
                    accept=".html"
                    class="file-input file-input-bordered file-input-secondary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('googleSearchConsole')) ?>
                        <?= esc($validation->getError('deleteGoogleSearchConsole')) ?>
                    </span>
                    <?php if ($settings->get('App.googleSearchConsole')): ?>
                        <span class="label-text-alt cursor-pointer flex items-center gap-x-2">
                            <i class="bi bi-trash text-2xl text-error"></i>
                            <input
                                type="checkbox"
                                name="deleteGoogleSearchConsole"
                                value="1"
                                class="checkbox checkbox-error"
                            >
                        </span>
                    <?php endif ?>
                </label>
            </div>
            <!-- Fin del campo de search console -->

            <!-- Campo del reCAPTCHA -->
            <div class="form-control">
                <label for="googleRecaptcha" class="label">
                    <span class="label-text">
                        Clave de sitio de Google reCAPTCHA:
                    </span>
                </label>
                <input
                    type="text"
                    name="googleRecaptcha"
                    id="googleRecaptcha"
                    maxlength="256"
                    placeholder="Escribe la clave de sitio de Google reCAPTCHA"
                    value="<?= esc($settings->get('App.googleRecaptcha')) ?>"
                    class="input input-bordered input-secondary"
                >
                <label class="label">
                    <span class="label-text-alt">
                        <?= esc($validation->getError('googleRecaptcha')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del reCAPTCHA -->
        </section>
        <!-- Fin del grupo de campos de aplicaciones -->

        <div class="flex flex-col lg:flex-row lg:justify-end gap-4 mt-2">
            <label for="modal-action-submit" class="btn btn-primary">
                Guardar
            </label>

            <!-- Botón que abre el modal de acción -->
            <label for="modal-action" class="btn btn-secondary">
                Cancelar
            </label>
        </div>

        <!-- Modal de submit -->
        <?= $this->setData([
            'id'      => 'modal-action-submit',
            'message' => '¿Deseas guardar los cambios?',
        ])->include('backend/layouts/modal-action-submit') ?>
    <?= form_close() ?>
    <!-- Fin del formulario de modificación de configuraciones -->

    <!-- Modal de cancelación -->
    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.settings.index',
        'message' => '¿Deseas cancelar las modificaciones del sitio web?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
