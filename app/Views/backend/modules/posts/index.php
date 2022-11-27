<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Módulos | Blog
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Notificación exitosa -->
    <?php if(session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
    <!-- Fin de la notificación exitosa -->

    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                Artículos
            </h1>

            <h2 class="text-sm">
                Busca y consulta todos los artículos publicados o programados.
            </h2>

            <p class="text-error">
                <small>
                    <?= session()->getFlashdata('error') ?>
                </small>
            </p>
        </div>
        <a href="<?= url_to('backend.modules.posts.new') ?>" class="btn btn-secondary gap-2">
            <i class="bi bi-plus-circle-fill text-xl"></i>
            Escribe un nuevo artículo
        </a>
    </div>

    <div class="divider"></div>

    <!-- Filtros de consulta -->
    <div class="pb-4">
        <?= $this->setVar('method', 'backend.modules.posts.index')->include('backend/layouts/search') ?>
    </div>
    <!-- Fin de los filtros de consulta -->
<?= $this->endSection() ?>
