<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Listado de usuarios
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
                Usuarios de acceso
            </h1>

            <h2 class="text-sm">
                Busca y consulta todos los usuarios de acceso.
            </h2>

            <p class="text-error">
                <small>
                    <?= session()->getFlashdata('error') ?>
                </small>
            </p>
        </div>

        <a href="<?= url_to('backend.users.new') ?>" class="btn btn-secondary gap-2">
            <i class="bi bi-plus-circle-fill text-xl"></i>
            Registra un nuevo usuario
        </a>
    </div>

    <div class="divider"></div>

    <!-- Filtros de consulta -->
    <div class="pb-4">
        <?= $this->setVar('method', 'backend.users.index')->include('backend/layouts/search') ?>
    </div>
    <!-- Fin de los filtros de consulta -->

    <!-- Tabla de usuarios -->
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Listado de usuarios -->
                <?php foreach ($users as $user): ?>
                    <tr class="hover">
                        <th><?= esc($user->id) ?></th>
                        <td><?= esc($user->name) ?></td>
                        <td> <?= esc($user->email) ?></td>
                        <td class="flex gap-x-2">
                            <!-- Botón para mostrar un usuario -->
                            <a
                                href="#"
                                aria-label="Mostrar datos de usuario"
                                class="btn btn-square btn-sm btn-outline btn-warning"
                            >
                                <i class="bi bi-eye text-xl"></i>
                            </a>
                            <!-- Fin del botón para mostrar un usuario -->

                            <!-- Botón para editar un usuario -->
                            <a
                                href="#"
                                aria-label="Editar datos de usuario"
                                class="btn btn-square btn-sm btn-outline btn-info"
                            >
                                <i class="bi bi-pencil text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar un usuario -->

                            <!-- Botón para eliminar un usuario -->
                            <?= form_open(url_to('')) ?>
                                <label class="btn btn-square btn-sm btn-outline btn-error">
                                    <i class="bi bi-trash text-xl"></i>
                                </label>
                            <?= form_close() ?>
                            <!-- Fin del botón para eliminar un usuario -->
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Fin del listado de usuarios -->
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de usuarios -->

    <!-- Paginación -->
    <div class="flex justify-end pt-4">
        <?= $pager->links('users', 'backend_pagination') ?>
    </div>
    <!-- Fin de la paginación -->
<?= $this->endSection() ?>
