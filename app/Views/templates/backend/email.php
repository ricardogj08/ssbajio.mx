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
    <style>
        <?= file_get_contents(FCPATH . 'css/backend.css') ?>
    </style>
    <?= $this->renderSection('head') ?>
</head>
<body class="bg-base-300 min-h-screen">
    <div class="container max-w-2xl py-8">
        <!-- Contenido del mensaje -->
        <main class="bg-base-100 p-8 rounded shadow">
            <!-- Logo de la compañía -->
            <div class="pb-8">
                <img
                    src="<?= base_url(['uploads/backend/settings/', setting()->get('App.general', 'logo')]) ?>"
                    alt="Logo <?= esc(setting()->get('App.general', 'company')) ?>"
                    class="h-12">
            </div>
            <!-- Fin del logo de la compañía -->

            <?= $this->renderSection('content') ?>
        </main>
        <!-- Fin del contenido del mensaje -->

        <footer class="footer footer-center pt-8 text-base-content">
            <div>
                <p class="whitespace-pre-line">Copyright &copy; <?= CodeIgniter\I18n\Time::now()->getYear() ?> - Todos los derechos reservador por
                    <?= esc(setting()->get('App.general', 'company')) ?>
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
