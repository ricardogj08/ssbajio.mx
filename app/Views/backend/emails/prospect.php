<?= $this->extend('templates/backend/email') ?>

<?= $this->section('head') ?>
    <title>
        Prospecto registrado
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-4">
        Prospecto
    </h1>

    <!-- Tabla de datos del prospecto -->
    <div class="overflow-x-auto">
        <table class="table table-compact lg:table-normal table-zebra w-full">
            <tr>
                <th>Nombre y apellido:</th>
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
                <th>¿Cómo supiste de nosotros?:</th>
                <td><?= esc($prospect->origin) ?></td>
            </tr>
            <tr>
                <th>Mensaje:</th>
                <td><?= esc($prospect->message) ?></td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($prospect->created_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Fin de la tabla de -->

    <p class="text-center pt-4">
        <?= mailto($prospect->email, 'Responder solicitud', [
            'class' => 'btn btn-primary btn-block sm:btn-wide',
        ]) ?>
    </p>
<?= $this->endSection() ?>
