<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        <?= esc($solution->metatitle) ?>
    </title>

    <meta
        name="description"
        content="<?= esc($solution->metadescription) ?>"
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/layouts/header') ?>

    <div class="bg-ssbajio-gray-light-5">
        <div class="container">
            <div class="pt-12 lg:pt-25 pb-6 lg:pb-13">
                <!-- Título de la solución -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                    <h1 class="<?= $title_size < 32 ? 'lg:col-start-4 lg:col-span-6' : ($title_size < 48 ? 'lg:col-start-3 lg:col-span-8' : 'lg:col-start-2 lg:col-span-10') ?> text-ssbajio-dark-1 font-title text-4xl lg:text-60 uppercase text-center">
                        <?= esc($solution->title) ?>
                    </h1>
                </div>
                <!-- Fin del título de la solución -->
            </div>

            <!-- Portada de la solución -->
            <div class="flex flex-col items-center gap-y-4 lg:gap-y-9 justify-center lg:-mb-52 pb-6 lg:pb-0">
                <div
                    style="background-image: url('<?= base_url('images/website/solutions/show/background.webp') ?>');"
                    class="bg-cover bg-center bg-no-repeat h-62 lg:h-85 w-66 lg:w-91"
                >
                    <div
                        class="ssbajio-mask w-full h-full flex justify-center items-center"
                    >
                        <img
                            src="<?= base_url(['uploads/website/solutions/covers/', $solution->cover]) ?>"
                            class="h-43 lg:h-56 object-scale-down"
                            alt="<?= esc($solution->name) ?>"
                        >
                    </div>
                </div>
                <h2 class="text-ssbajio-red-1 lg:text-lg font-semibold text-center">
                    <?= esc($solution->caption) ?>
                </h2>
            </div>
            <!-- Fin de la portada de la solución -->
        </div>
    </div>

    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-20 lg:pt-82">
                <!-- Subtitulo de la solución -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5 pb-3 lg:pb-6">
                    <h2 class="lg:col-start-3 lg:col-span-5 text-ssbajio-dark-1 text-lg font-semibold">
                        <?= esc($solution->subtitle) ?>
                    </h2>
                </div>
                <!-- Fin del subtitulo de la solución -->

                <!-- Descripción de la solución -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                    <p class="lg:col-start-7 lg:col-span-4 text-ssbajio-gray-dark-1 text-17 font-light leading-relaxed">
                        <?= esc($solution->description) ?>
                    </p>
                </div>
                <!-- Fin de la descripción de la solución -->
            </div>
        </div>
    </div>

    <!-- Sección de ventajas -->
    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="py-13 lg:py-26">
                <h2 class="text-white text-lg lg:text-xl font-semibold text-center mb-9 lg:mb-18">
                    Ventajas de contratar una solución de sujeción con SSB
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-7.5">
                    <div class="flex flex-col items-center text-center gap-y-3.5 lg:gap-y-7">
                        <div class="text-ssbajio-gray-dark-7 font-title text-45 h-18">
                            10
                        </div>
                        <h3 class="text-white font-light tracking-wide">
                            Contamos con más de 10 años de experiencia en el mercado.
                        </h3>
                    </div>

                    <div class="flex flex-col items-center text-center gap-y-3.5 lg:gap-y-7">
                        <div class="h-18">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-ssbajio-gray-dark-7 h-16 w-16">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z"/>
                            </svg>
                        </div>
                        <h3 class="text-white font-light tracking-wide">
                            Ofrecemos Servicio de gestión y  administración de almacén para tu producto.
                        </h3>
                    </div>

                    <div class="flex flex-col items-center text-center gap-y-3.5 lg:gap-y-7">
                        <div class="h-18">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-ssbajio-gray-dark-7 h-14 w-14">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z"/>
                            </svg>
                        </div>
                        <h3 class="text-white font-light tracking-wide">
                            Trabajamos con los principales proveedores y fabricantes de herramientas de Estados Unidos y México.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la sección de ventajas -->

    <!-- Sección de otras soluciones -->
    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-20 lg:pt-42 pb-24 lg:pb-48 text-ssbajio-dark-1 relative">
                <h2 class="text-center font-title text-3xl lg:text-35 uppercase mb-7 lg:mb-14">
                    ¿Necesitas otra solución de sujeción?
                </h2>

                <!-- Carrusel de soluciones -->
                <div class="solutions-carousel">
                    <!-- Lista de soluciones -->
                    <?php foreach ($solutions as $itr => $solution): ?>
                        <!-- Solución -->
                        <a href="<?= url_to('website.solutions.show', $solution->slug) ?>" class="group">
                            <div class="flex flex-col items-center gap-y-3 lg:gap-y-6 lg:px-4">
                                <!-- Portada de la solución -->
                                <div
                                    style="background-image: url('<?= base_url('images/website/solutions/show/background-solution.webp') ?>');"
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

                                <!-- Nombre de la solución -->
                                <h3 class="text-lg font-bold text-center">
                                    <?= esc($solution->name) ?>
                                </h3>
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
                    class="solutions-carousel-prev absolute top-0 -left-4 lg:-left-10 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                >
                    <span class="inline-flex items-center justify-center group-focus:outline-none">
                        <i class="bi bi-chevron-left text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
                    </span>
                </button>
                <!-- Fin del botón de retroceso -->

                <!-- Botón de siguiente -->
                <button
                    type="button"
                    aria-label="Botón de siguiente del carrusel de soluciones"
                    class="solutions-carousel-next absolute top-0 -right-4 lg:-right-10 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                >
                    <span class="inline-flex items-center justify-center group-focus:outline-none">
                        <i class="bi bi-chevron-right text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
                    </span>
                </button>
                <!-- Fin del botón de siguiente -->
            </div>
            <!-- Fin de la sección de soluciones -->
        </div>
    </div>
    <!-- Fin de la sección de otras soluciones -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/siema.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>
