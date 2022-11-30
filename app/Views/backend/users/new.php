<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Registro de usuarios
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold mb-2">
                Registra un nuevo usuario
            </h1>

            <h2 class="text-sm">
                Ingresa los datos de acceso del nuevo usuario.
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

    <!-- Formulario de registro de usuarios -->
    <?= form_open(url_to('backend.users.new')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del nombre -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Nombre:
                    </span>
                </label>
                <input
                    type="text"
                    name="name"
                    required
                    maxlength="64"
                    placeholder="Escribe su nombre completo"
                    value="<?= set_value('name') ?>"
                    class="input input-bordered input-primary"
                    autofocus
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
                <label class="label">
                    <span class="label-text">
                        Email:
                    </span>
                </label>
                <input
                    type="email"
                    name="email"
                    required
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

            <!-- Campo del rol -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Rol:
                    </span>
                </label>
                <select name="role" required class="select select-bordered select-primary">
                    <option value="" disabled selected>
                        Selecciona un rol para el nuevo usuario...
                    </option>
                    <?php foreach($roles as $role): ?>
                        <option value="<?= esc($role->id) ?>" <?= set_select('role', $role->id) ?>>
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
                <label class="label">
                    <span class="label-text">
                        Contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="password"
                    required
                    minlength="8"
                    maxlength="32"
                    placeholder="Escribe su contraseña"
                    value="<?= set_value('password') ?>"
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
                <label class="label">
                    <span class="label-text">
                        Repetir contraseña:
                    </span>
                </label>
                <input
                    type="password"
                    name="pass_confirm"
                    required
                    minlength="8"
                    maxlength="32"
                    placeholder="Repita su contraseña"
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
                <!-- Botón de submit -->
                <input type="submit" value="Registrar" class="btn btn-primary">

                <!-- Botón que abre el modal de acción -->
                <label for="modal-action" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro de usuario -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.users.index',
        'message' => '¿Deseas cancelar el registro del nuevo usuario?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
