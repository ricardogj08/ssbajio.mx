<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= site_url('css/website.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body>
    <!-- Contenido de la página web -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <!-- Fin del contenido de la página web -->

    <script type="text/javascript" src="<?= site_url('js/flowbite.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
