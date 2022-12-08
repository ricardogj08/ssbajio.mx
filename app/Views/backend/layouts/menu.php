<!-- Menú de navegación del sidebar -->
<ul class="menu p-4 w-80 bg-base-300">
    <li>
        <!-- Datos del usuario de sesión -->
        <div>
            <i class="bi bi-person-vcard-fill text-4xl"></i>
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
        </div>
        <!-- Fin de los datos del usuario de sesión -->
    </li>

    <li>
        <div>
            <a href="<?= url_to('backend.logout') ?>" class="btn btn-outline btn-sm btn-block gap-2">
                <i class="bi bi-box-arrow-right text-xl"></i>
                Cerrar sesión
            </a>
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
