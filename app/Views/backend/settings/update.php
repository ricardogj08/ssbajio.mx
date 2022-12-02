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

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.settings.index',
        'message' => '¿Deseas cancelar las modificaciones del sitio web?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
