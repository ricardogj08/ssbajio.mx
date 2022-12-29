<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Prospectos | <?= esc($prospect->name) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
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
                <th>Rating:</th>
                <td>
                    <div class="flex items-center gap-x-2">
                        <div class="font-semibold">
                            <?= esc(number_format($prospect->rating, 1)) ?>
                        </div>
                        <div class="rating rating-half">
                            <?php foreach (range(0, 10) as $rating): ?>
                                <input
                                    type="radio"
                                    name="rating"
                                    class="<?= $rating ? ($rating % 2 ? 'mask mask-star-2 bg-orange-400 mask-half-1' : 'mask mask-star-2 bg-orange-400 mask-half-2 mr-2') : 'rating-hidden' ?>"
                                    aria-label="Rating de <?= esc($rating) ?>"
                                    value="<?= esc($rating) ?>"
                                    disabled
                                    <?= (int) $prospect->rating === $rating ? 'checked' : '' ?>
                                >
                            <?php endforeach ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Observaciones:</th>
                <td><?= esc($prospect->observations) ?></td>
            </tr>
            <tr>
                <th>Fecha de registro:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($prospect->created_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
            <tr>
                <th>Fecha de modificación:</th>
                <td>
                    <?= esc(CodeIgniter\I18n\Time::parse($prospect->updated_at)
                        ->toLocalizedString('dd MMMM, yyyy - hh:mm a')) ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- Fin de la tabla de datos del prospecto -->

    <div class="flex flex-col lg:flex-row justify-end pt-4 gap-4">
        <!-- Botón para eliminar el prospecto -->
        <?= form_open(url_to('backend.prospects.delete', $prospect->id)) ?>
            <label
                for="modal-action-submit"
                class="btn btn-outline btn-error btn-block"
            >
                Eliminar
            </label>

            <?= $this->setData([
                'id'      => 'modal-action-submit',
                'message' => '¿Deseas eliminar este prospecto?',
            ])->include('backend/layouts/modal-action-submit') ?>
        <?= form_close() ?>
        <!-- Fin del botón para eliminar el prospecto -->

        <!-- Botón para editar el prospecto -->
        <a
            href="<?= url_to('backend.prospects.update', $prospect->id) ?>"
            class="btn btn-outline btn-info"
        >
            Modificar
        </a>
    </div>
<?= $this->endSection() ?>
