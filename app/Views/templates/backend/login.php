<!doctype html>
<html lang="<?= service('request')->getLocale() ?>" data-theme="dracula">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= site_url('css/backend.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body
    style="background-image: url('https://picsum.photos/1920/1080');"
    class="h-screen bg-cover bg-center bg-no-repeat flex flex-col justify-center"
>
    <div class="container max-w-2xl">
        <div class="bg-base-300/80 p-8 rounded-2xl">
            <!-- Logo de la compañía -->
            <div class="pb-8">
                <img src="https://ssbajio.mx/wp-content/uploads/2021/02/ssb.logo_.svg" alt="Logo" class="h-12">
            </div>
            <!-- Fin del logo de la compañía -->

            <!-- Contenido de la página web -->
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
</html>
