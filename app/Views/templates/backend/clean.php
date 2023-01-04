<!doctype html>
<html
    lang="<?= esc(service('request')->getLocale()) ?>"
    data-theme="<?= esc(setting()->get('App.general', 'theme')) ?>"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Declaración del idioma -->
    <link rel="alternate" href="<?= current_url() ?>" hreflang="<?= esc(service('request')->getLocale()) ?>">

    <!-- Favicon -->
    <link
        rel="icon"
        type="<?= (new CodeIgniter\Files\File(FCPATH . 'uploads/backend/settings/' . setting()->get('App.general', 'favicon')))->getMimeType() ?>"
        href="<?= base_url(['uploads/backend/settings/', setting()->get('App.general', 'favicon')]) ?>"
    >

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/backend.css') ?>">

    <?= $this->renderSection('head') ?>
</head>
<body class="flex flex-col min-h-screen">
    <!-- Contenido de la página web -->
    <main class="grow container max-w-2xl p-6">
        <?= $this->renderSection('content') ?>
    </main>
    <!-- Fin del contenido de la página web -->

    <?= $this->include('backend/layouts/footer') ?>
</body>
</html>
