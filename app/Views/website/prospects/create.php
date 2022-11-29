<?= $this->extend('templates/website/default') ?>

<?= $this->section('content') ?>
    <title>
        Gracias
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="bg-ssbajio-dark-2 flex flex-col justify-center h-screen">
        <div class="container">
            <!-- Tornillos superiores -->
            <div class="flex justify-between items-end">
                <div>
                    <img
                        src="<?= site_url('images/website/prospects/create/tornillo-top-left.webp') ?>"
                        alt="Tornillo superior izquierdo"
                        class="w-44 lg:w-52 h-auto"
                    >
                </div>
                <div>
                    <img
                        src="<?= site_url('images/website/prospects/create/tornillo-top-right.webp') ?>"
                        alt="Tornillo superior derecho"
                        class="w-32 lg:w-40 h-auto"
                    >
                </div>
            </div>
            <!-- Fin de los tornillos superiores -->

            <!-- Sección de agradecimiento -->
            <div class="lg:px-32">
                <div
                    style="background-image: url('<?= site_url('images/website/prospects/create/background.webp') ?>');"
                    class="flex flex-col lg:items-center text-center bg-no-repeat bg-right bg-[length:13.04rem_9.625rem] lg:bg-[length:19.563rem_14.438rem]"
                >
                    <h1 class="text-white font-title text-8xl lg:text-192 uppercase leading-none">
                        Gracias
                    </h1>
                    <p class="text-white font-semibold mt-3 lg:mt-6 mb-5 lg:mb-10 w-full lg:w-1/3">Tu mensaje fue enviado, en breve
                        nos pondremos en contacto contigo.
                    </p>
                    <a
                        href="<?= url_to('website.home.index') ?>"
                        class="bg-ssbajio-red-1 ssbajio-btn hover:bg-ssbajio-red-2"
                    >
                        Ir al inicio
                    </a>
                </div>
            </div>
            <!-- Fin de la sección de agradecimiento -->

            <!-- Tornillo inferior -->
            <div>
                <img
                    src="<?= site_url('images/website/prospects/create/tornillo-bottom-left.webp') ?>"
                    alt="Tornillo inferior izquierdo"
                    class="w-32 lg:w-40 h-auto"
                >
            </div>
            <!-- Fin del tornillo inferior -->
        </div>
    </div>
<?= $this->endSection() ?>
