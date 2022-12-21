<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Cuenta | <?= esc($user->name) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Cuenta de usuario
            </h1>

            <h2 class="text-sm">
                Consulta la información de tu cuenta de usuario.
            </h2>
        </div>

        <a href="<?= url_to('backend.prospects.index') ?>" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de datos del usuario de sesión -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal table-zebra w-full">
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
    <!-- Fin de la tabla de datos del usuario de sesión -->

    <div class="flex flex-col lg:flex-row justify-end pt-4">
        <!-- Botón para editar el usuario -->
        <a
            href="<?= url_to('backend.account.update') ?>"
            class="btn btn-outline btn-info"
        >
            Modificar
        </a>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <!-- Notificación exitosa -->
    <?php if (session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
    <!-- Fin de la notificación exitosa -->
<?= $this->endSection() ?>
