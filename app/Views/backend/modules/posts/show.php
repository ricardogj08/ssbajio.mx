<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Blog | <?= esc($post->title) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                <?= esc($post->title) ?>
            </h1>

            <h2 class="text-sm">
                Información y datos del artículo.
            </h2>
        </div>

        <a href="<?= url_to('backend.modules.posts.index') ?>" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de datos del artículo -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal table-zebra w-full">
            <tr>
                <th>ID:</th>
                <td><?= esc($post->id) ?></td>
            </tr>
            <tr>
                <th>Título:</th>
                <td><?= esc($post->title) ?></td>
            </tr>
            <tr>
                <th>Slug:</th>
                <td>
                    <a
                        href="<?= url_to('website.posts.show', $post->slug) ?>"
                        target="_blank"
                        class="link link-hover"
                    >
                        <?= esc($post->slug) ?>
                    </a>
                </td>
            </tr>
            <tr>
                <th>Portada:</th>
                <td>
                    <img
                        src="<?= base_url(['uploads/website/posts/', $post->cover]) ?>"
                        alt="Portada <?= esc($post->title) ?>"
                        class="h-8 lg:h-12"
                    >
                </td>
            </tr>
            <tr>
                <th>Sinopsis:</th>
                <td><?= esc($post->excerpt) ?></td>
            </tr>
            <tr>
                <th>Estado de publicación:</th>
                <td>
                    <?= $post->active ? 'Activo' : 'Inactivo' ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de publicación:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($post->started_at ?? '')
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de registro:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($post->created_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de modificación:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($post->updated_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Fin de la tabla de datos del artículo -->

    <div class="flex flex-col lg:flex-row justify-end pt-4 gap-4">
        <!-- Botón para eliminar el artículo -->
        <?= form_open(url_to('backend.modules.posts.delete', $post->id)) ?>
            <label
                for="modal-action-submit"
                class="btn btn-outline btn-error btn-block"
            >
                Eliminar
            </label>

            <?= $this->setData([
                'id'      => 'modal-action-submit',
                'message' => '¿Deseas eliminar este artículo?',
            ])->include('backend/layouts/modal-action-submit') ?>
        <?= form_close() ?>
        <!-- Fin del botón para eliminar el artículo -->

        <!-- Botón para editar el artículo -->
        <a
            href="#"
            class="btn btn-outline btn-info"
        >
            Modificar
        </a>
    </div>
<?= $this->endSection() ?>
