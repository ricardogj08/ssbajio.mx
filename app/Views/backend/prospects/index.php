<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Prospectos
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-2">
        Prospectos
    </h1>

    <h2 class="text-sm">
        Búsqueda y consulta de todos los prospectos registrados.
    </h2>

    <p class="text-error">
        <small>
            <?= esc(session()->getFlashdata('error')) ?>
        </small>
    </p>

    <?= $validation->listErrors('backend_errors') ?>

    <div class="divider"></div>

    <!-- Filtros de consulta -->
    <div class="pb-4">
        <?= $this->setData([
            'method' => 'backend.prospects.index',
            'query'  => $query,
        ])->include('backend/layouts/search') ?>
    </div>
    <!-- Fin de los filtros de consulta -->

    <!-- Tabla de prospectos -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal w-full">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Interés en</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Listado de prospectos -->
                <?php foreach ($prospects as $prospect): ?>
                    <tr class="hover">
                        <td>
                            <?= esc(CodeIgniter\I18n\Time::parse($prospect->created_at)
                                ->toDateString()) ?>
                        </td>
                        <td><?= esc($prospect->name) ?></td>
                        <td><?= esc($prospect->phone) ?></td>
                        <td><?= esc($prospect->email) ?></td>
                        <td><?= esc($prospect->solution) ?></td>
                        <td class="flex gap-x-2">
                            <!-- Botón para mostrar un prospecto -->
                            <a
                                href="<?= url_to('backend.prospects.show', $prospect->id) ?>"
                                aria-label="Mostrar los datos del prospecto"
                                class="btn btn-square btn-sm btn-outline btn-warning"
                            >
                                <i class="bi bi-eye text-xl"></i>
                            </a>
                            <!-- Fin del botón para mostrar un prospecto -->

                            <!-- Botón para editar un prospecto -->
                            <a
                                href="<?= url_to('backend.prospects.update', $prospect->id) ?>"
                                aria-label="Modificar los datos del prospecto"
                                class="btn btn-square btn-sm btn-outline btn-info"
                            >
                                <i class="bi bi-pencil text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar un prospecto -->

                            <!-- Botón para eliminar un prospecto -->
                            <?= form_open(url_to('backend.prospects.delete', $prospect->id)) ?>
                                <label
                                    for="modal-action-submit-<?= esc($prospect->id) ?>"
                                    class="btn btn-square btn-sm btn-outline btn-error"
                                >
                                    <i class="bi bi-trash text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => "modal-action-submit-{$prospect->id}",
                                    'message' => '¿Deseas eliminar este prospecto?',
                                ])->include('backend/layouts/modal-action-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del botón para eliminar un prospecto -->
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Fin del listado de prospectos -->
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de prospectos -->

    <!-- Paginación -->
    <div class="flex justify-end pt-4">
        <?= $pager->links('prospects', 'backend_pagination') ?>
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
