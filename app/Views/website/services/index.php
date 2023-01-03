<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        ▷ Servicio de Gestión y Administración de Almacenes
    </title>

    <meta
        name="description"
        content="Ofrecemos soluciones en la gestión y administración almacenes, tanto en propios de SSB, como los de tu empresa, con personal altamente capacitado."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/layouts/header') ?>

    <!-- Banner -->
    <div
        style="background-image: url('<?= base_url('images/website/services/index/banner.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <div class="container">
            <div class="py-12 lg:py-24 text-center">
                <h1 class="font-title text-4xl lg:text-6xl leading-tight text-white uppercase whitespace-pre-line mb-3">Proveedor de servicios
                    de Administración de Almacenes
                </h1>

                <h2 class="lg:text-lg text-white font-semibold">
                    Soluciones integrales en la gestión y administración de almacenes de tornillería especializada
                </h2>
            </div>
        </div>
    </div>
    <!-- Fin del banner -->

    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="pt-12 lg:pt-24 pb-14 lg:pb-27 grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                <p class="lg:col-start-2 lg:col-span-10 text-center text-white text-17 font-light tracking-widesm">
                    En SSb nos enfocamos en poder brindarte soluciones de administración de almacenes, gestión de inventarios, análisis de consumos y todo lo necesario para que nunca detengas tu producción. Tomamos control de tus inventarios de tornillería y herramienta, para organizarlos y administrarlos, reduciendo así la carga de trabajo de tus áreas de compras y almacén.
                </p>
            </div>
        </div>
    </div>

    <!-- Sección de soluciones integrales -->
    <?= $this->setVar('solutions', $solutions)->include('website/layouts/solutions') ?>
    <!-- Fin de la sección de soluciones integrales -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script type="text/javascript" src="<?= base_url('js/siema.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>

