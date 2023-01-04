<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        ▷ Fabricantes y Distribuidores Mayoristas de Tornillos Industriales
    </title>

    <meta
        name="description"
        content="Especialistas en fabricación y venta mayorista de tornillos y herramientas. Contamos con más de 16 mil productos de las mejores marcas de Ferretería."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/layouts/header') ?>

    <!-- Banner -->
    <div
        style="background-image: url('<?= base_url('images/website/about/index/banner.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <div class="container">
            <div class="py-12 lg:py-24 text-center">
                <h1 class="font-title text-4xl lg:text-6xl leading-tight text-white uppercase whitespace-pre-line mb-3">Fabricantes y Distribuidores Mayoristas
                    de Tornillería Industrial
                </h1>

                <h2 class="lg:text-lg text-white font-semibold">
                    <?= esc(setting()->get('App.general', 'company')) ?>
                </h2>
            </div>
        </div>
    </div>
    <!-- Fin del banner -->

    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="py-13 lg:py-26 grid grid-cols-1 lg:grid-cols-12 gap-7.5 text-white font-light tracking-wide">
                <div class="lg:col-start-2 lg:col-span-5">
                    Somos una empresa 100% mexicana, con más de 10 años de trayectoria en el mercado de proveeduría y distribución de soluciones industriales para cadenas de suministro y líneas de producción.
                </div>

                <div class="lg:col-span-5">
                    Además, contamos con un modelo de negocio hecho a la medida de cada industria, tomando en cuenta sus necesidades y principales preocupaciones.
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de soluciones integrales -->
    <?= $this->setVar('solutions', $solutions)->include('website/layouts/solutions') ?>
    <!-- Fin de la sección de soluciones integrales -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/siema.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>
