<!doctype html>
<html lang="<?= service('request')->getLocale() ?>">
<head>
    <!-- Google Tag Manager -->
    <?php if (ENVIRONMENT === 'production'): ?>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "<?= esc(setting()->get('App.googleTagManager'), 'js') ?>");
        </script>
    <?php endif ?>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="icon"
        type="<?= (new CodeIgniter\Files\File(FCPATH . 'uploads/backend/settings/' . setting()->get('App.favicon')))->getMimeType() ?>"
        href="<?= base_url(['uploads/backend/settings/', setting()->get('App.favicon')]) ?>"
    >
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/website.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <?= $this->renderSection('head') ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <?php if (ENVIRONMENT === 'production'): ?>
        <noscript>
            <iframe
                src="https://www.googletagmanager.com/ns.html?id=<?= esc(setting()->get('App.googleTagManager'), 'js') ?>"
                height="0"
                width="0"
                style="display: none; visibility: hidden;">
            </iframe>
        </noscript>
    <?php endif ?>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Contenido de la página web -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <!-- Fin del contenido de la página web -->

    <script type="text/javascript" src="<?= base_url('js/flowbite.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
