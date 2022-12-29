<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        <?= esc($prospect->name) ?> | Modificar
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                <?= esc($prospect->name) ?>
            </h1>

            <h2 class="text-sm">
                Modifica o actualiza los datos del prospecto.
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

    <!-- Formulario de modificación del prospecto -->
    <?= form_open(url_to('backend.prospects.update', $prospect->id)) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del nombre -->
            <div class="form-control">
                <label for="name" class="label">
                    <span class="label-text">
                        Nombre completo:
                    </span>
                </label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    required
                    maxlength="64"
                    placeholder="Escribe su nombre completo"
                    value="<?= esc($prospect->name) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('name')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre -->

            <!-- Campo del teléfono -->
            <div class="form-control">
                <label for="phone" class="label">
                    <span class="label-text">
                        Teléfono:
                    </span>
                </label>
                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    required
                    maxlength="15"
                    placeholder="Escribe su teléfono"
                    value="<?= esc($prospect->phone) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('phone')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del teléfono -->

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
                    value="<?= esc($prospect->email) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('email')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del email -->

            <!-- Campo de la empresa -->
            <div class="form-control">
                <label for="company" class="label">
                    <span class="label-text">
                        Empresa:
                    </span>
                </label>
                <input
                    type="text"
                    name="company"
                    id="company"
                    required
                    maxlength="64"
                    placeholder="Escribe su empresa"
                    value="<?= esc($prospect->company) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('company')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la empresa -->

            <!-- Campo del interés -->
            <div class="form-control">
                <label for="solution" class="label">
                    <span class="label-text">
                        Interés en:
                    </span>
                </label>
                <select name="solution" id="solution" required class="select select-bordered select-primary">
                    <option value="" disabled selected>
                        Selecciona una solución de interés...
                    </option>
                    <?php foreach ($solutions as $solution): ?>
                        <option value="<?= esc($solution->id) ?>"<?= $prospect->solution_id === $solution->id ? ' selected' : '' ?>>
                            <?= esc($solution->name) ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('solution')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del interés -->

            <!-- Campo del origen -->
            <div class="form-control">
                <label for="origin" class="label">
                    <span class="label-text">
                        Origen:
                    </span>
                </label>
                <select name="origin" id="origin" required class="select select-bordered select-primary">
                    <option value="" disabled selected>
                        Selecciona el origen del prospecto...
                    </option>
                    <?php foreach ($origins as $origin): ?>
                        <option value="<?= esc($origin->id) ?>"<?= $prospect->origin_id === $origin->id ? ' selected' : '' ?>>
                            <?= esc($origin->description) ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('origin')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del origen -->

            <!-- Campo del mensaje -->
            <div class="form-control">
                <label for="message" class="label">
                    <span class="label-text">
                        Mensaje (opcional):
                    </span>
                </label>
                <textarea
                    name="message"
                    id="message"
                    maxlength="4096"
                    rows="4"
                    cols="50"
                    placeholder="Escribe el mensaje del prospecto..."
                    class="textarea textarea-bordered textarea-secondary resize-none h-32"
                ><?= esc($prospect->message) ?></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('message')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del mensaje -->

            <!-- Campo del rating -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Rating (opcional):
                    </span>
                </label>
                <div class="flex items-center gap-x-2">
                    <div class="font-semibold text-2xl">
                        <?= esc(number_format($prospect->rating, 1)) ?>
                    </div>
                    <div class="rating rating-lg rating-half">
                        <?php foreach (range(0, 10) as $rating): ?>
                            <input
                                type="radio"
                                name="rating"
                                class="<?= $rating ? ($rating % 2 ? 'mask mask-star-2 bg-orange-400 mask-half-1' : 'mask mask-star-2 bg-orange-400 mask-half-2 mr-2') : 'rating-hidden' ?>"
                                aria-label="Rating de <?= esc($rating) ?>"
                                value="<?= esc($rating) ?>"
                                <?= (int) $prospect->rating === $rating ? 'checked' : '' ?>
                            >
                        <?php endforeach ?>
                    </div>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('rating')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del rating -->

            <!-- Campo de observaciones -->
            <div class="form-control">
                <label for="observations" class="label">
                    <span class="label-text">
                        Observaciones (opcional):
                    </span>
                </label>
                <textarea
                    name="observations"
                    id="observations"
                    maxlength="4096"
                    rows="4"
                    cols="50"
                    placeholder="Escribe una nota para el prospecto..."
                    class="textarea textarea-bordered textarea-secondary resize-none h-32"
                ><?= esc($prospect->observations) ?></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('observations')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de observaciones -->

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
    <!-- Fin del formulario de modificación del prospecto -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.prospects.index',
        'message' => '¿Deseas cancelar las modificaciones del prospecto?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
