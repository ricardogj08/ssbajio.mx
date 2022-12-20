<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Usuarios | <?= esc($user->name) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                <?= esc($user->name) ?>
            </h1>

            <h2 class="text-sm">
                Información y permisos del usuario de acceso.
            </h2>
        </div>

        <a href="<?= url_to('backend.users.index') ?>" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de datos del usuario -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal table-zebra w-full">
            <tr>
                <th>ID:</th>
                <td><?= esc($user->id) ?></td>
            </tr>
            <tr>
                <th>Nombre completo:</th>
                <td><?= esc($user->name) ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= esc($user->email) ?></td>
            </tr>
            <tr>
                <th>Rol:</th>
                <td><?= esc($user->role) ?></td>
            </tr>
            <tr>
                <th>Estado de cuenta:</th>
                <td>
                    <?= $user->active ? 'Activo' : 'Inactivo' ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de registro:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($user->created_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de modificación:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($user->updated_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Fin de la tabla de datos del usuario -->

    <div class="flex flex-col lg:flex-row justify-end pt-4 gap-4">
        <!-- Botón para dar de alta o baja al usuario -->
        <?= form_open(url_to('backend.users.toggleActive', $user->id)) ?>
            <label
                for="modal-action-submit"
                class="btn btn-outline btn-<?= $user->active ? 'error' : 'success' ?> btn-block"
            >
                <?= $user->active ? 'Dar de baja' : 'Dar de alta' ?>
            </label>

            <!-- Botón de submit con modal -->
            <?= $this->setData([
                'id'      => 'modal-action-submit',
                'message' => $user->active
                    ? '¿Deseas dar de baja este usuario?'
                    : '¿Deseas dar de alta este usuario?',
            ])->include('backend/layouts/modal-action-submit') ?>
        <?= form_close() ?>
        <!-- Fin del botón para dar de alta o baja al usuario -->

        <!-- Botón para editar el usuario -->
        <a
            href="<?= url_to('backend.users.update', $user->id) ?>"
            class="btn btn-outline btn-info"
        >
            Modificar
        </a>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <!-- Notificación exitosa -->
    <?php if(session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
    <!-- Fin de la notificación exitosa -->
<?= $this->endSection() ?>
