<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Módulos | Blog
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
                    <?= esc(session()->getFlashdata('error')) ?>
                </small>
            </p>

            <?= $validation->listErrors('backend_errors') ?>
        </div>

        <a href="<?= url_to('backend.modules.posts.create') ?>" class="btn btn-secondary gap-2">
            <i class="bi bi-plus-circle-fill text-xl"></i>
            Escribe un nuevo artículo
        </a>
    </div>

    <div class="divider"></div>

    <!-- Filtros de consulta -->
    <div class="pb-4">
        <?= $this->setData([
            'method' => 'backend.modules.posts.index',
            'query'  => $query,
        ])->include('backend/layouts/search') ?>
    </div>
    <!-- Fin de los filtros de consulta -->

    <!-- Tabla de artículos -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal w-full">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Título</th>
                    <th>Publicado</th>
                    <th>Programación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lista de artículos -->
                <?php foreach ($posts as $post): ?>
                    <tr class="hover">
                        <td>
                            <?= esc(CodeIgniter\I18n\Time::parse($post->created_at)
                                ->toDateString()) ?>
                        </td>
                        <td>
                            <a
                                href="<?= url_to('website.posts.show', $post->slug) ?>"
                                target="_blank"
                                class="link link-hover"
                            >
                                <?= esc(excerpt($post->title, false, 40)) ?>
                            </a>
                        </td>
                        <td><?= $post->active ? 'Sí' : 'No' ?></td>
                        <td>
                            <?= esc(CodeIgniter\I18n\Time::parse($post->started_at ?? '')
                                ->toLocalizedString('yyyy-MM-dd - hh:mm a')) ?>
                        </td>
                        <td class="flex gap-x-2">
                            <!-- Botón para mostrar un artículo -->
                            <a
                                href="<?= url_to('backend.modules.posts.show', $post->id) ?>"
                                aria-label="Mostrar los datos del artículo"
                                class="btn btn-square btn-sm btn-outline btn-warning"
                            >
                                <i class="bi bi-eye text-xl"></i>
                            </a>
                            <!-- Fin del botón para mostrar un artículo -->

                            <!-- Botón para editar un artículo -->
                            <a
                                href="#"
                                aria-label="Modificar los datos del artículo"
                                class="btn btn-square btn-sm btn-outline btn-info"
                            >
                                <i class="bi bi-pencil text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar un artículo -->

                            <!-- Botón para eliminar un artículo -->
                            <?= form_open(url_to('backend.modules.posts.delete', $post->id)) ?>
                                <label
                                    for="modal-action-submit-<?= esc($post->id) ?>"
                                    class="btn btn-square btn-sm btn-outline btn-error"
                                >
                                    <i class="bi bi-trash text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => "modal-action-submit-{$post->id}",
                                    'message' => '¿Deseas eliminar este artículo?',
                                ])->include('backend/layouts/modal-action-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del botón eliminar un artículo -->
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Fin de la lista de artículos -->
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de artículos -->

    <!-- Paginación -->
    <div class="flex justify-end pt-4">
        <?= $pager->links('posts', 'website_posts_pagination') ?>
    </div>
    <!-- Fin de la paginación -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <!-- Notificación exitosa -->
    <?php if(session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
    <!-- Fin de la notificación exitosa -->
<?= $this->endSection() ?>
