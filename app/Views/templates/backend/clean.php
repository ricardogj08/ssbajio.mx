<?php $settings = service('settings') ?>
<!doctype html>
<html
    lang="<?= service('request')->getLocale() ?>"
    data-theme="<?= esc(service('settings')->get('App.theme')) ?>"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= site_url('css/backend.css') ?>">
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
