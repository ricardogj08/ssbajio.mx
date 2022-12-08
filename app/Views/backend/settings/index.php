<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Configuraciones
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                Configuraciones
            </h1>

            <h2 class="text-sm">
                Consulta todas las configuraciones del sitio web.
            </h2>
        </div>

        <a href="<?= url_to('backend.settings.update') ?>" class="btn btn-primary gap-2">
            <i class="bi bi-pencil text-xl"></i>
            Modificar
        </a>
    </div>

    <div class="divider"></div>

    <section>
        <h3 class="text-xl font-bold mb-4">
            General
        </h3>

        <!-- Tabla de configuraciones generales -->
        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Empresa:</th>
                        <td><?= $settings->get('App.company') ?></td>
                    </tr>

                    <tr>
                        <th>Teléfono:</th>
                        <td><?= $settings->get('App.phone') ?></td>
                    </tr>

                    <tr>
                        <th>Tema:</th>
                        <td><?= $settings->get('App.theme') ?></td>
                    </tr>

                    <tr>
                        <th>Favicon:</th>
                        <td>
                            <img
                                src="<?= base_url(['uploads/backend/settings/', $settings->get('App.favicon')]) ?>"
                                alt="Favicon <?= esc($settings->get('App.company')) ?>"
                                class="h-8 lg:h-12"
                            >
                        </td>
                    </tr>

                    <tr>
                        <th>Fondo:</th>
                        <td>
                            <img
                                src="<?= base_url(['uploads/backend/settings/', $settings->get('App.background')]) ?>"
                                alt="Fondo <?= esc($settings->get('App.company')) ?>"
                                class="h-8 lg:h-12"
                            >
                        </td>
                    </tr>

                    <tr>
                        <th>Logo:</th>
                        <td>
                            <img
                                src="<?= base_url(['uploads/backend/settings/', $settings->get('App.logo')]) ?>"
                                alt="Logo <?= esc($settings->get('App.company')) ?>"
                                class="h-8 lg:h-12"
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Fin de la tabla de configuraciones generales -->
    </section>

    <div class="divider"></div>

    <section>
        <h3 class="text-xl font-bold mb-4">
            Correos de contacto
        </h3>

        <!-- Tabla de configuraciones de emails -->
        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Remitente:</th>
                        <td><?= esc(config('Email')->SMTPUser) ?></td>
                    </tr>

                    <tr>
                        <th>Destinatarios:</th>
                        <td><?= esc($settings->get('App.emailsTo')) ?></td>
                    </tr>

                    <tr>
                        <th>Destinatarios CC:</th>
                        <td><?= esc($settings->get('App.emailsCC')) ?></td>
                    </tr>

                    <tr>
                        <th>Destinatarios CCO:</th>
                        <td><?= esc($settings->get('App.emailsCCO')) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Fin de la tabla de configuraciones de emails -->
    </section>

    <div class="divider"></div>

    <section>
        <h3 class="text-xl font-bold mb-4">
            Aplicaciones
        </h3>

        <!-- Tabla de configuraciones de aplicaciones -->
        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Google Tag Manager:</th>
                        <td><?= esc($settings->get('App.googleTagManager')) ?></td>
                    </tr>

                    <tr>
                        <th>WhatsApp:</th>
                        <td><?= esc($settings->get('App.whatsapp')) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Fin de la tabla de configuraciones de aplicaciones -->
    </section>
<?= $this->endSection() ?>
