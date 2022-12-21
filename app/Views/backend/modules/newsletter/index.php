<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Módulos | Newsletter
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                Newsletter
            </h1>

            <h2 class="text-sm">
                Búsqueda y consulta de todos los usuarios registrados al newsletter.
            </h2>

            <p class="text-error">
                <small>
                    <?= esc(session()->getFlashdata('error')) ?>
                </small>
            </p>

            <?= $validation->listErrors('backend_errors') ?>
        </div>

        <a href="<?= url_to('backend.modules.newsletter.create') ?>" class="btn btn-secondary gap-2">
            <i class="bi bi-plus-circle-fill text-xl"></i>
            Registra un nuevo usuario
        </a>
    </div>

    <div class="divider"></div>

    <!-- Filtros de consulta -->
    <div class="pb-4">
        <?= $this->setData([
            'method' => 'backend.modules.newsletter.index',
            'query'  => $query,
        ])->include('backend/layouts/search') ?>
    </div>
    <!-- Fin de los filtros de consulta -->

    <!-- Tabla de emails -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lista de emails -->
                <?php foreach ($users as $user): ?>
                    <tr class="hover">
                        <th><?= esc($user->id) ?></th>
                        <td><?= esc($user->email) ?></td>
                        <td>
                            <?= esc(CodeIgniter\I18n\Time::parse($user->created_at)
                                ->toLocalizedString('dd MMMM, YYYY - hh:mm a')) ?>
                        </td>
                        <td class="flex gap-x-2">
                            <!-- Botón para editar un email -->
                            <a
                                href="<?= url_to('backend.modules.newsletter.update', $user->id) ?>"
                                aria-label="Modificar los datos del email"
                                class="btn btn-square btn-sm btn-outline btn-info"
                            >
                                <i class="bi bi-pencil text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar un email -->

                            <!-- Botón para eliminar un email -->
                            <?= form_open(url_to('backend.modules.newsletter.delete', $user->id)) ?>
                                <label
                                    for="modal-action-submit-<?= esc($user->id) ?>"
                                    class="btn btn-square btn-sm btn-outline btn-error"
                                >
                                    <i class="bi bi-trash text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => "modal-action-submit-{$user->id}",
                                    'message' => '¿Deseas eliminar este usuario?',
                                ])->include('backend/layouts/modal-action-submit') ?>
                            <?= form_close() ?>
                            <!-- Botón para eliminar un email -->
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- Fin de la lista de emails -->
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de emails -->

    <!-- Paginación -->
    <div class="flex justify-end pt-4">
        <?= $pager->links('emails', 'backend_pagination') ?>
    </div>
    <!-- Fin de la paginación -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <!-- Notificación exitosa -->
    <?php if (session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
    <!-- Fin de la notificación exitosa -->
<?= $this->endSection() ?>
