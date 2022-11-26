<!doctype html>
<html lang="<?= service('request')->getLocale() ?>" data-theme="dracula">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= site_url('css/backend.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body>
    <!-- Contenido de la página web -->
    <div class="p-8">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>
