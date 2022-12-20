<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        <?= esc($user->name) ?> | Modificar
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                <?= esc($user->name) ?>
            </h1>

            <h2 class="text-sm">
                Modifica o actualiza los datos del usuario.
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

    <!-- Formulario de modificación del usuario -->
    <?= form_open(url_to('backend.users.update', $user->id)) ?>
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
                    value="<?= esc($user->name) ?>"
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('name')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre -->

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

            <!-- Campo del rol -->
            <div class="form-control">
                <label for="role" class="label">
                    <span class="label-text">
                        Rol:
                    </span>
                </label>
                <select name="role" id="role" required class="select select-bordered select-primary">
                    <option value="" disabled selected>
                        Selecciona un rol para el usuario...
                    </option>
                    <?php foreach($roles as $role): ?>
                        <option value="<?= esc($role->id) ?>"<?= $user->role_id === $role->id ? ' selected' : '' ?>>
                            <?= esc($role->description) ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('role')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del rol -->

            <!-- Campo de la contraseña -->
            <div class="form-control">
                <label for="password" class="label">
                    <span class="label-text">
                        Nueva contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    minlength="8"
                    maxlength="32"
                    placeholder="Escribe la nueva contraseña"
                    value=""
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('password')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la contraseña -->

            <!-- Campo de confirmación de contraseña -->
            <div class="form-control">
                <label for="pass_confirm" class="label">
                    <span class="label-text">
                        Repetir contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="pass_confirm"
                    id="pass_confirm"
                    minlength="8"
                    maxlength="32"
                    placeholder="Repita su contraseña"
                    value=""
                    class="input input-bordered input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('pass_confirm')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de confirmación de contraseña -->

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
    <!-- Fin del formulario de modificación del usuario -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.users.index',
        'message' => '¿Deseas cancelar las modificaciones del usuario?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
