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
                    <div class="underline decoration-wavy underline-offset-4<?= url_is(single_service('uri', url_to('backend.account.show'))->getPath() . '*') ? ' decoration-primary' : '' ?>">
                        <?= esc(session('user.email')) ?>
                    </div>
                </div>
            </div>
        </a>
        <!-- Fin de los datos del usuario de sesión -->
    </li>

    <li>
        <div>
            <label for="modal-action-logout" class="btn btn-sm btn-block normal-case gap-2">
                <i class="bi bi-power text-xl"></i>
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
        <a
            href="<?= url_to('backend.prospects.index') ?>"
            class="<?= url_is(single_service('uri', url_to('backend.prospects.index'))->getPath() . '*') ? 'active' : '' ?>"
        >
            <i class="bi bi-person-lines-fill text-2xl"></i>
            Prospectos
        </a>
    </li>
    <li>
        <a
            href="<?= url_to('backend.settings.index') ?>"
            class="<?= url_is(single_service('uri', url_to('backend.settings.index'))->getPath() . '*') ? 'active' : '' ?>"
        >
            <i class="bi bi-gear-fill text-2xl"></i>
            Configuraciones
        </a>
    </li>
    <li>
        <a
            href="<?= url_to('backend.users.index') ?>"
            class="<?= url_is(single_service('uri', url_to('backend.users.index'))->getPath() . '*') ? 'active' : '' ?>"
        >
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
        <a
            href="<?= url_to('backend.modules.posts.index') ?>"
            class="<?= url_is(single_service('uri', url_to('backend.modules.posts.index'))->getPath() . '*') ? 'active' : '' ?>"
        >
            <i class="bi bi-pencil-square text-2xl"></i>
            Blog
        </a>
    </li>
    <li>
        <a
            href="<?= url_to('backend.modules.newsletter.index') ?>"
            class="<?= url_is(single_service('uri', url_to('backend.modules.newsletter.index'))->getPath() . '*') ? 'active' : '' ?>"
        >
            <i class="bi bi-newspaper text-2xl"></i>
            Newsletter
        </a>
    </li>
</ul>
<!-- Fin del menú de navegación del sidebar -->

<?= $this->setData([
    'id'      => 'modal-action-logout',
    'method'  => 'backend.logout',
    'message' => '¿Deseas cerrar sesión?',
])->include('backend/layouts/modal-action') ?>
