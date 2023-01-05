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

    <!-- Enfoque de SSB -->
    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="pt-12 lg:pt-24 pb-14 lg:pb-27 grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                <p class="lg:col-start-2 lg:col-span-10 text-center text-white text-17 font-light tracking-widesm">
                    En SSB nos enfocamos en poder brindarte soluciones de administración de almacenes, gestión de inventarios, análisis de consumos y todo lo necesario para que nunca detengas tu producción. Tomamos control de tus inventarios de tornillería y herramienta, para organizarlos y administrarlos, reduciendo así la carga de trabajo de tus áreas de compras y almacén.
                </p>
            </div>
        </div>
    </div>
    <!-- Fin del enfoque de SSB -->

    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-16 lg:pt-32 pb-20 lg:pb-42">
                <!-- Sección de servicio de gestión y administración de almacén -->
                <div class="pb-16 lg:pb-32 text-center">
                    <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title uppercase mb-2.5 lg:mb-5">
                        Servicio de gestión y administración de almacén
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                        <p class="lg:col-start-2 lg:col-span-10 text-ssbajio-gray-dark-1 text-17 font-light tracking-wide">
                            Al ser tu proveedor de consumibles te brindamos la posibilidad de unirte a nuestro programa de clientes premium, para así aprovecha nuestros servicios extra incluidos, como: asesorías, levantamiento de muestras y stocks, acomodo de materiales, administración de inventarios, almacén in house, consignación y fabricaciones especiales.
                        </p>
                    </div>
                </div>
                <!-- Fin de la sección de servicio de gestión y administración de almacén -->

                <!-- Sección de beneficios de administración de almacenes -->
                <div class="pb-20 lg:pb-39">
                    <h2 class="text-3xl lg:text-35 font-title text-center uppercase mb-13 lg:mb-26">
                        <span class="text-ssbajio-red-1">Beneficios</span> de un servicio de administración de almacenes
                    </h2>

                    <div class="text-ssbajio-gray-dark-1">
                        <div class="pb-13 lg:pb-26 grid grid-cols-1 lg:grid-cols-12 items-center gap-7.5">
                            <div class="lg:col-start-2 lg:col-span-4 mx-auto">
                                <img
                                    src="<?= base_url('images/website/services/index/suministro-inventario.webp') ?>"
                                    alt="Garantiza tu suministro inmediato"
                                    class="h-36 lg:h-auto object-cover"
                                >
                            </div>

                            <div class="lg:col-start-7 lg:col-span-4 text-center lg:text-left">
                                <h3 class="text-xl font-semibold mb-3.5">
                                    Garantiza tu suministro inmediato
                                </h3>

                                <p class="text-17 font-light">
                                    Olvídate de los largos tiempos de espera que retrasan tu producción.
                                </p>
                            </div>
                        </div>

                        <div class="pb-16 lg:pb-33 grid grid-cols-1 lg:grid-cols-12 items-center gap-7.5">
                            <div class="block lg:hidden mx-auto">
                                <img
                                    src="<?= base_url('images/website/services/index/costo-inventario.webp') ?>"
                                    alt="Costo cero en inventarios"
                                    class="h-36 object-cover"
                                >
                            </div>

                            <div class="lg:col-start-4 lg:col-span-3 text-center lg:text-right">
                                <h3 class="text-xl font-semibold mb-3.5">
                                     Costo cero en inventarios
                                </h3>

                                <p class="text-17 font-light">
                                    Paga únicamente por lo que vas consumiendo.
                                </p>
                            </div>

                            <div class="hidden lg:block lg:col-start-8 lg:col-span-4">
                                <img
                                    src="<?= base_url('images/website/services/index/costo-inventario.webp') ?>"
                                    alt="Costo cero en inventarios"
                                    class="object-cover"
                                >
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-12 items-center gap-7.5">
                            <div class="lg:col-start-2 lg:col-span-4 mx-auto">
                                <img
                                    src="<?= base_url('images/website/services/index/total-inventario.webp') ?>"
                                    alt="Control total de inventarios"
                                    class="h-36 lg:h-auto object-cover"
                                >
                            </div>

                            <div class="lg:col-start-7 lg:col-span-4 text-center lg:text-left">
                                <h3 class="text-xl font-semibold mb-3.5">
                                    Control total de inventarios
                                </h3>

                                <p class="text-17 font-light tracking-wide">
                                    Controla en todo momento los productos que utilices en tu producción.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de la sección de beneficios de administración de almacenes -->

                <!-- Sección del modelo de administración de almacenes -->
                <div class="text-center">
                    <div class="pb-10 lg:pb-19">
                        <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title uppercase mb-2.5 lg:mb-5">
                            Modelos de Administración de Almacenes
                        </h2>

                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                            <p class="lg:col-start-2 lg:col-span-10 text-ssbajio-gray-dark-1 text-17 font-light">
                                En SSB contamos con los siguientes modelos para la gestión y administración de almacenes, acorde a las principales necesidades de cada cliente:
                            </p>
                        </div>
                    </div>

                    <!-- Cards -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-7.5">
                        <div class="bg-ssbajio-dark-1 text-white rounded-6xl pt-9 lg:pt-18 pb-13 lg:pb-26 px-6 lg:px-13">
                            <h3 class="text-xl font-semibold mb-3 lg:mb-6">
                                Administración en almacenes SSB
                            </h3>

                            <p class="font-light">
                                Definimos un stock exclusivo para tu empresa administrado en nuestros almacenes para asegurar así, disponibilidad inmediata.
                            </p>
                        </div>

                        <div class="bg-ssbajio-gray-light-5 text-ssbajio-gray-dark-1 rounded-6xl pt-9 lg:pt-18 pb-13 lg:pb-26 px-6 lg:px-12 shadow-2xl">
                            <h3 class="text-xl font-semibold mb-3 lg:mb-6 px-6 lg:px-12">
                                Administración en tu almacén
                            </h3>

                            <p class="font-light">
                                Gracias a nuestra metodología, procesos y mobiliario especializado, logramos una organización de tu tornillería y herramientas para una gestión eficaz y rápida ubicación del producto.
                            </p>
                        </div>

                        <div class="bg-ssbajio-red-3 text-white rounded-6xl pt-9 lg:pt-18 pb-13 lg:pb-26 px-6 lg:px-8">
                            <h3 class="text-xl font-semibold mb-3 lg:mb-6">
                                Administración en tu almacén modalidad «in plant»
                            </h3>

                            <p class="font-light mx-3 lg:mx-6">
                                Diseñamos y establecemos almacenes «in plant» con personal operativo de SSB en garantía para administrar sus consumos.
                            </p>
                        </div>
                    </div>
                    <!-- Fin de las cards -->
                </div>
                <!-- Fin de la sección del modelo de administración de almacenes -->
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

