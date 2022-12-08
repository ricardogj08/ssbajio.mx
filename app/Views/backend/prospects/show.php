<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Prospectos | <?= esc($prospect->name) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                <?= esc($prospect->name) ?>
            </h1>

            <h2 class="text-sm">
                Información y datos del prospecto.
            </h2>
        </div>

        <a href="<?= url_to('backend.prospects.index') ?>" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de datos del prospecto -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal table-zebra w-full">
            <tr>
                <th>ID:</th>
                <td><?= esc($prospect->id) ?></td>
            </tr>
            <tr>
                <th>Nombre completo:</th>
                <td><?= esc($prospect->name) ?></td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td><?= esc($prospect->phone) ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= esc($prospect->email) ?></td>
            </tr>
            <tr>
                <th>Empresa:</th>
                <td><?= esc($prospect->company) ?></td>
            </tr>
            <tr>
                <th>Interés en:</th>
                <td><?= esc($prospect->solution) ?></td>
            </tr>
            <tr>
                <th>Origen:</th>
                <td><?= esc($prospect->origin) ?></td>
            </tr>
            <tr>
                <th>Mensaje:</th>
                <td><?= esc($prospect->message) ?></td>
            </tr>
            <tr>
                <th>Fecha de registro:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($prospect->created_at)
                        ->toLocalizedString("dd MMMM, yyyy '-' hh:mm a")) ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de modificación:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($prospect->updated_at)
                        ->toLocalizedString("dd MMMM, yyyy '-' hh:mm a")) ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Fin de la tabla de datos del prospecto -->

    <div class="flex flex-col lg:flex-row justify-end pt-4">
        <!-- Botón para editar el prospecto -->
        <a href="<?= url_to('') ?>" class="btn btn-outline btn-info">
            Modificar
        </a>
    </div>
<?= $this->endSection() ?>
