<!doctype html>
<html
    lang="<?= service('request')->getLocale() ?>"
    data-theme="<?= esc(setting()->get('App.general', 'theme')) ?>"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="icon"
        type="<?= (new CodeIgniter\Files\File(FCPATH . 'uploads/backend/settings/' . setting()->get('App.general', 'favicon')))->getMimeType() ?>"
        href="<?= base_url(['uploads/backend/settings/', setting()->get('App.general', 'favicon')]) ?>"
    >
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/backend.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body class="drawer drawer-mobile">
    <!-- Checkbox oculto que controla la visibilidad del sidebar -->
    <input id="drawer" type="checkbox" class="drawer-toggle" aria-label="Visibilidad del sidebar">

    <div class="drawer-content flex flex-col min-h-screen">
        <!-- Barra de navegación en móvil -->
        <div class="lg:hidden w-full navbar bg-base-200">
            <div class="flex-1">
                <a href="#" class="btn btn-ghost normal-case text-2xl">
                    Dashboard
                </a>
            </div>
            <div class="flex-none px-2">
                <label for="drawer" class="btn btn-square btn-ghost">
                    <i class="bi bi-list text-2xl"></i>
                </label>
            </div>
        </div>
        <!-- Fin de la barra de navegación en móvil -->

        <!-- Contenido de la página web -->
        <main class="grow p-6 lg:px-12">
            <?= $this->renderSection('content') ?>
        </main>
        <!-- Fin del contenido de la página web -->

        <?= $this->include('backend/layouts/footer') ?>
    </div>

    <!-- Sidebar -->
    <div class="drawer-side">
        <!-- Envoltura del sidebar -->
        <label for="drawer" class="drawer-overlay"></label>

        <?= $this->include('backend/layouts/menu') ?>
    </div>
    <!-- Fin del sidebar -->

    <?= $this->renderSection('scripts') ?>
</body>
</html>
