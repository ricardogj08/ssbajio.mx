<?php helper('html') ?>
<?= doctype() ?>
<html lang="<?= service('request')->getLocale() ?>" data-theme="business">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag('css/backend.css') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body
    style="background-image: url('https://picsum.photos/1920/1080');"
    class="h-screen bg-cover bg-center bg-no-repeat flex flex-col justify-center"
>
    <div class="container max-w-2xl">
        <div class="bg-base-300/80 p-8 rounded">
            <!-- Logo de la compañía -->
            <div class="pb-8">
                <img src="https://ssbajio.mx/wp-content/uploads/2021/02/ssb.logo_.svg" class="h-12">
            </div>

            <!-- Contenido del sitio web -->
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
</html>
