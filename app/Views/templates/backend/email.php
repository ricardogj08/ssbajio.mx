<?php $settings = service('settings') ?>
<!doctype html>
<html
    lang="<?= service('request')->getLocale() ?>"
    data-theme="<?= esc($settings->get('App.theme')) ?>"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= site_url('css/backend.css') ?>">
    <?= $this->renderSection('head') ?>
</head>
<body class="bg-base-300 min-h-screen">
    <div class="container max-w-2xl py-8">
        <!-- Contenido del mensaje -->
        <main class="bg-base-100 p-8 rounded shadow">
            <!-- Logo de la compañía -->
            <div class="pb-8">
                <img
                    src="https://picsum.photos/1920/1080"
                    alt="Logo <?= esc($settings->get('App.siteName')) ?>"
                    class="h-12">
            </div>
            <!-- Fin del logo de la compañía -->

            <?= $this->renderSection('content') ?>
        </main>
        <!-- Fin del contenido del mensaje -->

        <footer class="footer footer-center pt-8 text-base-content">
            <div>
                <p class="whitespace-pre-line">Copyright &copy; <?= CodeIgniter\I18n\Time::now()->getYear() ?> - Todos los derechos reservador por
                    <?= esc($settings->get('App.siteName')) ?>
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
