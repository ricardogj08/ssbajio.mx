<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Newsletter | Registro
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Registra un nuevo usuario
            </h1>

            <h2 class="text-sm">
                Ingresa el email de un usuario al newsletter.
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

    <!-- Formulario de registro del email -->
    <?= form_open_multipart(url_to('backend.modules.newsletter.create')) ?>
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
                    autofocus
                    maxlength="256"
                    placeholder="Escribe su email"
                    value="<?= set_value('email') ?>"
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
                <!-- Botón de submit -->
                <input type="submit" value="Registrar" class="btn btn-primary">

                <!-- Botón que abre el modal de acción -->
                <label for="modal-action" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro del email -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.modules.newsletter.index',
        'message' => '¿Deseas cancelar el registro del nuevo usuario?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
