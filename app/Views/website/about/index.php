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

    <!-- Trayectoria y modelo de SSB -->
    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="py-13 lg:py-26 grid grid-cols-1 lg:grid-cols-12 gap-7.5 text-white font-light tracking-wide">
                <p class="lg:col-start-2 lg:col-span-5">
                    Somos una empresa 100% mexicana, con más de 10 años de trayectoria en el mercado de proveeduría y distribución de soluciones industriales para cadenas de suministro y líneas de producción.
                </p>

                <p class="lg:col-span-5">
                    Además, contamos con un modelo de negocio hecho a la medida de cada industria, tomando en cuenta sus necesidades y principales preocupaciones.
                </p>
            </div>
        </div>
    </div>
    <!-- Fin de la trayectoria y modelo de SSB -->

    <!-- Somos tu mejor opción -->
    <div class="bg-ssbajio-gray-light-5">
        <div class="container relative">
            <div class="py-16 lg:py-32 text-center">
                <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title uppercase mb-3 lg:mb-6">
                    ¿Porqué somos tu mejor opción?
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                    <p class="lg:col-start-2 lg:col-span-10 text-ssbajio-gray-dark-1 font-light tracking-wide">
                        Contamos más de 16 mil productos en existencia de tornillería, herramientas, refacciones y accesorios, para satisfacer las necesidades de nuestros clientes en el mercado industrial, alimenticio, refaccionario, de construcción, ferretero, automotriz y de proyectos.
                    </p>
                </div>
            </div>

            <div class="flex justify-center absolute -bottom-8 lg:-bottom-12 left-0 w-full">
                <img
                    src="<?= base_url('images/website/about/index/cuadrado-circulos-gray.webp') ?>"
                    alt="Cuadrado de circulos grises"
                    class="h-14 lg:h-19 w-auto"
                >
            </div>
        </div>
    </div>
    <!-- Fin de somos tu mejor opción -->

    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-24 lg:pt-49 pb-26 lg:pb-52">
                <!-- Servicios de administración de almacenes -->
                <div class="grid grid-cols-1 lg:grid-cols-12 items-end gap-7.5 pb-28 lg:pb-56">
                    <div class="lg:col-span-6 mx-auto">
                        <img
                            src="<?= base_url('images/website/about/index/administracion-almacen.webp') ?>"
                            alt="Administración de almacén"
                            class="h-36 lg:h-auto object-cover"
                        >
                    </div>

                    <div class="lg:col-start-8 lg:col-span-5">
                        <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title text-center lg:text-left uppercase mb-6 lg:mb-11">
                            Ofrecemos servicio de <span class="text-ssbajio-red-1">administración de almacén</span> para tu stock
                        </h2>

                        <div class="flex flex-col gap-y-4">
                            <div class="flex items-center gap-x-3">
                                <i class="bi bi-star-fill text-xl text-ssbajio-yellow-1"></i>
                                <h3 class="text-ssbajio-gray-dark-1 text-lg font-semibold">
                                    Administración en nuestros almacenes
                                </h3>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <i class="bi bi-star-fill text-xl text-ssbajio-yellow-1"></i>
                                <h3 class="text-ssbajio-gray-dark-1 text-lg font-semibold">
                                    Administración en tu almacén
                                </h3>
                            </div>

                            <div>
                                <a
                                    href="<?= url_to('website.services.index') ?>"
                                    class="ssbajio-btn bg-ssbajio-red-1 text-center block lg:inline-block hover:bg-ssbajio-red-2"
                                >
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de los servicios de administración de almacenes -->

                <div>
                    <div class="text-center pb-12 lg:pb-24">
                        <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title uppercase mb-3 lg:mb-6">
                            Presencia en toda la República Mexicana
                        </h2>

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                            <p class="lg:col-start-2 lg:col-span-10 text-ssbajio-gray-dark-1 text-17 font-light">
                                Nuestro equipo de profesionales está altamente capacitado para brindarte la mejor atención y solución acorde a tus necesidades en cualquier parte de la República Mexicana.
                            </p>
                        </div>
                    </div>

                    <!-- Ubicación en google maps -->
                    <div class="flex justify-center items-center relative">
                        <img
                            src="<?= base_url('images/website/about/index/mapa.webp') ?>"
                            class="w-96 lg:w-188 h-auto object-cover"
                        >
                        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full">
                            <div class="group p-4">
                                <i class="bi bi-circle-fill text-ssbajio-red-1 text-4xl lg:text-84 animate-pulse group-hover:animate-none group-hover:text-ssbajio-red-2 group-hover:transition group-hover:hidden"></i>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1867.6535492737862!2d-100.41620664194335!3d20.575512696561436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d345382f79e22b%3A0xd91242cc9594cdcb!2sProl.%20Av.%20Zaragoza%2099-Int.%2043%2C%20Jardines%20de%20la%20Hacienda%2C%2076180%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses!2smx!4v1672934871368!5m2!1ses!2smx"
                                    width="600"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="hidden group-hover:block absolute top-0 left-0 w-full h-full bg-ssbajio-gray-dark-1 p-3 rounded-2xl shadow-2xl"
                                >
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de la ubicación en google maps -->
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
