<!-- Menú de navegación del sidebar -->
<ul class="menu p-4 w-80 bg-base-300">
    <li class="menu-title">
        <span>
            General
        </span>
    </li>
    <li>
        <a href="#">
            <i class="bi bi-person-lines-fill text-2xl"></i>
            Prospectos
        </a>
    </li>
    <li>
        <a href="#">
            <i class="bi bi-gear-fill text-2xl"></i>
            Configuración
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
