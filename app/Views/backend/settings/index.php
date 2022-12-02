<?php helper('form') ?>

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
<?= $this->endSection() ?>
