<!-- Menú de navegación del sidebar -->
<ul class="menu p-4 w-80 bg-base-300">
    <li>
        <!-- Datos del usuario de sesión -->
        <a aria-label="Cuenta de usuario" href="<?= url_to('backend.account.show') ?>">
            <i class="bi bi-person-circle text-4xl"></i>
            <div>
                <div class="text-xs">
                    <div class="font-semibold">
                        <?= esc(session('user.name')) ?>
                    </div>
                    <div>
                        <?= esc(session('user.email')) ?>
                    </div>
                </div>
            </div>
        </a>
        <!-- Fin de los datos del usuario de sesión -->
    </li>

    <li>
        <div>
            <label for="modal-action-logout" class="btn btn-outline btn-sm btn-block normal-case gap-2">
                <i class="bi bi-box-arrow-right text-xl"></i>
                Cerrar sesión
            </label>
        </div>
    </li>

    <li></li>

    <li class="menu-title">
        <span>
            General
        </span>
    </li>
    <li>
        <a href="<?= url_to('backend.prospects.index') ?>">
            <i class="bi bi-person-lines-fill text-2xl"></i>
            Prospectos
        </a>
    </li>
    <li>
        <a href="<?= url_to('backend.settings.index') ?>">
            <i class="bi bi-gear-fill text-2xl"></i>
            Configuraciones
        </a>
    </li>
    <li>
        <a href="<?= url_to('backend.users.index') ?>">
            <i class="bi bi-people-fill text-2xl"></i>
            Usuarios
        </a>
    </li>

    <li></li>

    <li class="menu-title">
        <span>
            Módulos
        </span>
    </li>
    <li>
        <a href="<?= url_to('backend.modules.posts.index') ?>">
            <i class="bi bi-pencil-square text-2xl"></i>
            Blog
        </a>
    </li>
</ul>
<!-- Fin del menú de navegación del sidebar -->

<?= $this->setData([
    'id'      => 'modal-action-logout',
    'method'  => 'backend.logout',
    'message' => '¿Deseas cerrar sesión?',
])->include('backend/layouts/modal-action') ?>
