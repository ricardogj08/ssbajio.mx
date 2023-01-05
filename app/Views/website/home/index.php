<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        Proveedor de Tornillos y Herramientas Industriales en México
    </title>

    <meta
        name="description"
        content="Distribuidores Mayoristas de Tornillería Industrial, Refaccionaria, para Construcción, Ferretera y Automotriz. Con Servicio de administración de almacenes."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <header>
        <?= $this->include('website/layouts/header') ?>
    </header>

    <!-- Primera sección -->
    <section class="bg-gradient-to-r from-ssbajio-dark-4 to-ssbajio-gray-dark-5">
        <div class="container">
            <div class="pt-8 lg:pt-15 pb-28 lg:pb-53">
                <!-- Titulo y tornillo con sello -->
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-7.5 pb-14 lg:pb-28">
                    <!-- Titulo -->
                    <div class="sm:col-span-5 z-10 sm:z-auto">
                        <h1 class="uppercase font-title text-5xl lg:text-80 leading-tight">
                            <span class="text-ssbajio-gray-dark-6">
                                Proveeduría
                            </span>
                            <span class="text-white">
                                Industrial
                            </span>
                        </h1>
                        <h2 class="text-white lg:text-lg font-semibold whitespace-pre-line leading-relaxed lg:leading-loose mt-4 lg:mt-7">Soluciones e insumos para
                            cadena de suministro y
                            líneas de producción
                        </h2>
                    </div>
                    <!-- Fin del titulo -->

                    <!-- Tornillo con sello -->
                    <div class="sm:col-start-8 sm:col-end-13 flex justify-end -mt-56 sm:-mt-0">
                        <img
                            src="<?= base_url('images/website/home/index/tornillo-sello.webp') ?>"
                            class="w-3/4 sm:w-auto"
                            alt="Tornillo de cabeza hexagonal con sello"
                        >
                    </div>
                    <!-- Fin del tornillo con sello -->
                </div>
                <!-- Fin del titulo y tornillo con sello -->

                <!-- Video -->
                <div class="relative">
                    <div class="hidden lg:grid grid-cols-12 gap-7.5 absolute -bottom-14">
                        <div class="col-span-2">
                            <img
                                src="<?= base_url('images/website/home/index/cuadrado-circulos-white.webp') ?>"
                                alt="Cuadrado de circulos blancos"
                            >
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                        <div class="lg:col-start-2 lg:col-span-10 relative">
                            <video
                                class="w-full h-56 lg:h-auto max-w-full rounded-xl brightness-30 object-cover"
                                autoplay
                                muted
                                loop
                            >
                                <source
                                    src="<?= base_url('videos/website/home/index/banner.mp4') ?>"
                                    type="video/mp4"
                                >
                                Your browser does not support the video tag.
                            </video>

                            <h2 class="text-white text-center lg:whitespace-pre-line font-title text-xl lg:text-32 leading-normal uppercase absolute top-0 left-0 w-full h-full flex items-center justify-center">Soluciones integrales de tornillería especializada,
                                herramientas industriales refacciones de transporte,
                                ferretería y más...
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Fin del video -->

                <!-- Tornillos cromados y acerca de nosotros -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5 lg:items-center pt-9 lg:pt-18">
                    <!-- Tornillos cromados -->
                    <div class="flex justify-center lg:col-start-3 lg:col-span-3">
                        <img
                            src="<?= base_url('images/website/home/index/tornillos-hexagonal-cromados.webp') ?>"
                            alt="Tornillo de cabeza hexagonal"
                            class="w-1/2 lg:w-auto"
                        >
                    </div>
                    <!-- Fin de los tornillos cromados -->

                    <!-- Acerca de nosotros -->
                    <div class="lg:col-start-7 lg:col-span-5">
                        <p class="text-ssbajio-gray-light-4 text-17 font-light mb-6 lg:mb-8">
                            Contamos con un alto enfoque en servicio que nos ha permitido sobresalir en los principales sectores de "supply chain" siendo hoy en día un aliado estratégico para las empresas que requieren de una producción continua, garantizando stock siempre disponible minimizando así, las incidencias.
                        </p>
                        <a
                            href="<?= url_to('website.about.index') ?>"
                            class="ssbajio-btn bg-ssbajio-red-1 py-2.5 text-center block lg:inline-block hover:bg-ssbajio-red-2"
                        >
                            Acerca de Nosotros
                        </a>
                    </div>
                    <!-- Fin de acerca de nosotros -->
                </div>
                <!-- Fin de los tornillos cromados y acerca de nosotros -->

                <!-- Sección de soluciones -->
                <div class="py-20 lg:py-44 relative">
                    <div class="text-center pb-10 lg:pb-19">
                        <h2 class="text-white text-3xl lg:text-35 font-title uppercase mb-3 lg:mb-6">
                            Nuestras soluciones
                        </h2>
                        <h3 class="text-ssbajio-gray-light-4 lg:text-xl font-light">
                            Venta y Distribución de Tornillería, Productos Industriales y Herramientas.
                        </h3>
                    </div>

                    <!-- Carrusel de soluciones -->
                    <div class="solutions-carousel">
                        <!-- Lista de soluciones -->
                        <?php foreach ($solutions as $itr => $solution): ?>
                            <!-- Solución -->
                            <a href="<?= url_to('website.solutions.show', $solution->slug) ?>" class="group">
                                <div class="flex flex-col items-center gap-y-5 lg:gap-y-10 lg:px-4">
                                    <!-- Portada de la solución -->
                                    <div
                                        style="background-image: url('<?= base_url('images/website/home/index/' .
                                            ($itr % 2
                                                ? 'background-solution-dark.webp'
                                                : 'background-solution-red.webp')) ?>');"
                                        class="bg-cover bg-center bg-no-repeat h-62 w-66 group-hover:brightness-75 transition"
                                    >
                                        <div
                                            class="ssbajio-mask w-full h-full flex justify-center items-center"
                                        >
                                            <img
                                                src="<?= base_url(['uploads/website/solutions/covers/', $solution->cover]) ?>"
                                                class="h-43 object-scale-down"
                                                alt="<?= esc($solution->name) ?>"
                                            >
                                        </div>
                                    </div>
                                    <!-- Fin de la portada de la solución -->

                                    <div class="text-center">
                                        <!-- Nombre de la solución -->
                                        <h3 class="text-white text-lg font-semibold mb-2.5 lg:mb-5">
                                            <?= esc($solution->name) ?>
                                        </h3>

                                        <!-- Descripción de la solución -->
                                        <p class="text-ssbajio-gray-light-4 text-17 font-light">
                                            <?= esc($solution->excerpt) ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Fin de la solución -->
                        <?php endforeach ?>
                        <!-- Fin de la lista de soluciones -->
                    </div>
                    <!-- Fin del carrusel de soluciones -->

                    <!-- Botón de retroceso -->
                    <button
                        type="button"
                        aria-label="Botón de retroceso del carrusel de soluciones"
                        class="solutions-carousel-prev absolute top-0 -left-4 lg:-left-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    >
                        <span class="inline-flex items-center justify-center group-focus:outline-none">
                            <i class="bi bi-chevron-left text-white text-2xl lg:text-4xl"></i>
                        </span>
                    </button>
                    <!-- Fin del botón de retroceso -->

                    <!-- Botón de siguiente -->
                    <button
                        type="button"
                        aria-label="Botón de siguiente del carrusel de soluciones"
                        class="solutions-carousel-next absolute top-0 -right-4 lg:-right-10 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    >
                        <span class="inline-flex items-center justify-center group-focus:outline-none">
                            <i class="bi bi-chevron-right text-white text-2xl lg:text-4xl"></i>
                        </span>
                    </button>
                    <!-- Fin del botón de siguiente -->
                </div>
                <!-- Fin de la sección de soluciones -->

                <div class="lg:grid grid-cols-12 gap-7.5">
                    <p class="col-start-2 col-span-10 text-ssbajio-gray-light-4 text-17 font-light text-center tracking-wide">
                        Contamos con un alto enfoque en servicio que nos ha permitido sobresalir en los principales sectores de "supply chain" siendo hoy en día un aliado estratégico para las empresas que requieren de una producción continua, garantizando stock siempre disponible minimizando así, las incidencias.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la primera sección -->

    <!-- Segunda sección -->
    <section class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-18 lg:pt-37 pb-24 lg:pb-50">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5 lg:gap-y-17.5 pb-19 lg:pb-38">
                    <div>
                        <h2 class="text-lg font-semibold text-ssbajio-dark-1 mb-2 lg:mb-4">
                            Distribuidores mayoristas de tornillería para el sector, alimenticio, automotriz, para construcción e industrial
                        </h2>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-ssbajio-dark-1 mb-2 lg:mb-4">
                            Servicio de gestión y  administración de almacén para tornillería industrial
                        </h2>
                        <h3 class="text-ssbajio-gray-dark-1 font-light text-17">
                            Ofrecemos un servicio integral de administración de tornillería a nuestros clientes con un gran volumen de consumo.
                        </h3>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-ssbajio-dark-1 mb-2 lg:mb-4">
                            Administración en nuestros almacenes
                        </h2>
                        <h3 class="text-ssbajio-gray-dark-1 font-light text-17">
                            Te otorgamos un stock exclusivo administrado en nuestros almacenes para asegurar disponibilidad inmediata.
                        </h3>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-ssbajio-dark-1 mb-2 lg:mb-4">
                            Administración en tu almacén
                        </h2>
                        <h3 class="text-ssbajio-gray-dark-1 font-light text-17">
                            Establecemos almacenes «in plant» con personal de SSB en garantía para administrar sus consumos.
                        </h3>
                    </div>
                </div>

                <!-- Sección de sectores -->
                <div class="relative">
                    <h2 class="font-title text-3xl lg:text-35 uppercase text-center mb-7 lg:mb-13">
                        Sectores principales
                    </h2>

                    <!-- Carrusel de sectores -->
                    <div class="sectors-carousel">
                        <!-- Lista de sectores -->
                        <?php foreach ($sectors as $itr => $sector): ?>
                            <!-- Sector -->
                            <div class="group flex justify-center">
                                <div class="flex flex-col gap-y-8">
                                    <!-- Portada del sector -->
                                    <div class="group-hover:brightness-75 transition">
                                        <img
                                            src="<?= base_url(['uploads/website/sectors/thumbnails/', $sector->thumbnail]) ?>"
                                            class="h-88 w-66 object-cover rounded-2xl"
                                            alt="<?= esc($sector->name) ?>"
                                        >
                                    </div>
                                    <!-- Fin de la portada del sector -->

                                    <div class="flex items-center gap-x-4">
                                        <i class="bi <?= esc($sector->icon) ?> <?= ($itr + 1) % 4 ? 'text-ssbajio-dark-1' : 'text-ssbajio-red-1' ?> text-4xl"></i>

                                        <h3 class="<?= ($itr + 1) % 4 ? 'text-ssbajio-gray-dark-1' : 'text-ssbajio-red-1' ?> font-semibold">
                                            <?= esc($sector->name) ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin del sector -->
                        <?php endforeach ?>
                        <!-- Fin de la lista de sectores -->
                    </div>
                    <!-- Fin del carrusel de sectores -->

                    <!-- Botón de retroceso -->
                    <button
                        type="button"
                        aria-label="Botón de retroceso del carrusel de sectores"
                        class="2xl:hidden sectors-carousel-prev absolute top-0 -left-4 lg:-left-16 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    >
                        <span class="inline-flex items-center justify-center group-focus:outline-none">
                            <i class="bi bi-chevron-left text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
                        </span>
                    </button>
                    <!-- Fin del botón de retroceso -->

                    <!-- Botón de siguiente -->
                    <button
                        type="button"
                        aria-label="Botón de siguiente del carrusel de sectores"
                        class="2xl:hidden sectors-carousel-next absolute top-0 -right-4 lg:-right-16 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    >
                        <span class="inline-flex items-center justify-center group-focus:outline-none">
                            <i class="bi bi-chevron-right text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
                        </span>
                    </button>
                    <!-- Fin del botón de siguiente -->
                </div>
                <!-- Fin de la sección de sectores -->
            </div>

            <!-- Banner del trabajador -->
            <div class="relative lg:-mb-32 pb-24 lg:pb-0">
                <div class="relative z-10">
                    <div class="hidden lg:grid grid-cols-12 gap-7.5">
                        <div class="col-span-4 z-10">
                            <img
                                src="<?= base_url('images/website/home/index/trabajador.webp') ?>"
                                alt="Trabajador"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5 lg:absolute bottom-0 left-0 w-full">
                        <div class="lg:col-start-2 lg:col-span-11 bg-gradient-to-r from-ssbajio-red-1 to-ssbajio-orange-1 lg:grid lg:grid-cols-11 lg:gap-7.5 rounded-2xl">
                            <div class="lg:col-start-4 lg:col-span-7 text-center px-4 lg:px-0 py-10 xl:py-20">
                                <h2 class="text-white font-title text-3xl lg:text-35 uppercase mb-3.5">
                                    Administración de almacén y mantenimiento
                                </h2>
                                <a
                                    href="<?= url_to('website.prospects.new') ?>"
                                    class="ssbajio-btn bg-ssbajio-dark-1 py-2.5 block lg:inline-block hover:bg-ssbajio-dark-2"
                                >
                                    Contáctanos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:grid grid-cols-12 gap-7.5 absolute -top-3.5 xl:-top-6 2xl:top-16 left-0 w-full">
                    <div class="col-start-10 col-span-2">
                        <img
                            src="<?= base_url('images/website/home/index/cuadrado-circulos-dark.webp') ?>"
                            alt="Cuadrado de circulos oscuros"
                        >
                    </div>
                </div>
            </div>
            <!-- Fin del banner del trabajador -->
        </div>
    </section>
    <!-- Fin de la segunda sección -->

    <!-- Tercera sección -->
    <section class="bg-white">
        <div class="container">
            <div class="pb-24 lg:pb-52 pt-26 lg:pt-52">
                <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title text-center uppercase mb-14 lg:mb-28">
                    Ellos han confiado en nosotros
                </h2>

                <!-- Carrusel de recomendaciones -->
                <div class="recommendations-carousel">
                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/irizar.webp') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Irizar"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/grupo-bimbo.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Grupo Bimbo"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/ayco.webp') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="AYCO"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/multiservicios-nieto.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Multi Servicios Nieto"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/mahle.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="MAHLE"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/operbus.webp') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Operbus"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/grupo-herdez.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Grupo Herdez"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/mccormick.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="McCormick"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/canels.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Canel's"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/traxion.webp') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Grupo Traxion"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/egoba.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Transportadora Egoba"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/mym.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Transportes Muebleros MYM"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/fn.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Auto Express Frontera Norte"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="<?= base_url('images/website/home/index/recommendations/lipu.png') ?>"
                            class="w-52 h-16 lg:h-24 object-scale-down"
                            alt="Transportes LiPU"
                        >
                    </div>
                </div>
                <!-- Carrusel de recomendaciones -->
            </div>
        </div>
    </section>
    <!-- Fin de la tercera sección -->
	<?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/siema.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/sectors-carousel.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/recommendations-carousel.js') ?>"></script>
<?= $this->endSection() ?>
