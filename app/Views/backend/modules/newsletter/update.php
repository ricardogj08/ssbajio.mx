<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        <?= esc($user->email) ?> | Modificar
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                <?= esc($user->email) ?>
            </h1>

            <h2 class="text-sm">
                Modifica o actualiza el email del newsletter.
            </h2>

            <p class="text-error">
                <small>
                    <?= esc(session()->getFlashdata('error')) ?>
                </small>
            </p>
        </div>

        <label for="modal-action" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de modificación del email -->
    <?= form_open_multipart(url_to('backend.modules.newsletter.update', $user->id)) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del email -->
            <div class="form-control">
                <label for="email" class="label">
                    <span class="label-text">
                        Email:
                    </span>
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    maxlength="256"
                    placeholder="Escribe su email"
                    value="<?= esc($user->email) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('email')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del email -->

            <div class="flex flex-col lg:flex-row lg:justify-end gap-4">
                <label for="modal-action-submit" class="btn btn-primary">
                    Guardar
                </label>

                <!-- Botón que abre el modal de acción -->
                <label for="modal-action" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>

            <!-- Modal de submit -->
            <?= $this->setData([
                'id'      => 'modal-action-submit',
                'message' => '¿Deseas guardar los cambios?',
            ])->include('backend/layouts/modal-action-submit') ?>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de modificación del email -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.modules.newsletter.index',
        'message' => '¿Deseas cancelar las modificaciones del usuario?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
