<!doctype html>
<html
    lang="<?= service('request')->getLocale() ?>"
    data-theme="<?= esc(setting()->get('App.theme')) ?>"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="icon"
        type="<?= (new CodeIgniter\Files\File(FCPATH . 'uploads/backend/settings/' . setting()->get('App.favicon')))->getMimeType() ?>"
        href="<?= base_url(['uploads/backend/settings/', setting()->get('App.favicon')]) ?>"
    >
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/backend.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body
    style="background-image: url('<?= base_url(['uploads/backend/settings/', setting()->get('App.background')]) ?>');"
    class="h-screen bg-cover bg-center bg-no-repeat flex flex-col justify-center"
>
    <div class="container max-w-2xl">
        <main class="bg-base-300/80 p-8 rounded-2xl">
            <!-- Logo de la compañía -->
            <div class="pb-8">
                <img
                    src="<?= base_url(['uploads/backend/settings/', setting()->get('App.logo')]) ?>"
                    alt="Logo <?= esc(setting()->get('App.company')) ?>"
                    class="h-12"
                >
            </div>
            <!-- Fin del logo de la compañía -->

            <!-- Contenido de la página web -->
            <?= $this->renderSection('content') ?>
            <!-- Fin del contenido de la página web -->
        </main>
    </div>
</body>
</html>
