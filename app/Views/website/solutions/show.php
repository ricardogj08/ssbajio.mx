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

    <section class="bg-ssbajio-gray-light-5">
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
    </section>

    <section class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-20 lg:pt-82 pb-25 lg:pb-50">
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

                <!-- Categorías y productos -->
                <?php foreach ($categories as $category): ?>
                    <!-- Categoría de productos -->
                    <div class="text-center pt-20 lg:pt-40">
                        <h2 class="text-ssbajio-dark-1 text-3xl lg:text-35 font-title uppercase mb-2.5 lg:mb-5">
                            <?= esc($category->name) ?>
                        </h2>

                        <p class="text-ssbajio-gray-dark-1 text-17 font-light">
                            <?= esc($category->description) ?>
                        </p>

                        <!-- Lista de productos -->
                        <!-- Fin de la lista de productos -->
                    </div>
                    <!-- Fin de la categoría de productos -->
                <?php endforeach ?>
                <!-- Fin de las categorías y productos -->

                <?php if ($solution->alias === 'tornilleria'): ?>
                    <!-- Sectores de la solución de tornillería -->
                    <div class="pt-20 lg:pt-40">
                        <!-- Título del sector -->
                        <h2 class="text-3xl lg:text-35 font-title uppercase text-center mb-10 lg:mb-19">
                            Sectores donde ofrecemos soluciones de sujeción
                        </h2>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5 lg:gap-y-24 text-center lg:text-left">
                            <article>
                                <i class="bi bi-justify text-2xl text-white bg-gradient-to-r from-ssbajio-red-2 via-ssbajio-red-1 to-ssbajio-orange-1 px-4 py-3 rounded-2xl inline-block mb-5 lg:mb-10"></i>
                                <h3 class="text-ssbajio-dark-1 font-semibold mb-3">
                                    Tornillería Grado Alimenticio
                                </h3>
                                <p class="text-17 text-ssbajio-gray-dark-1 font-light whitespace-pre-line tracking-wide">Acero inoxidable 18-3 T304 y T316
                                    Tornillería hexagonal, allen, estufa, tuercas, arandelas, pijas, opresores.
                                </p>
                            </article>

                            <article>
                                <i class="bi bi-car-front-fill text-2xl text-white bg-gradient-to-r from-ssbajio-red-2 via-ssbajio-red-1 to-ssbajio-orange-1 px-4 py-3 rounded-2xl inline-block mb-5 lg:mb-10"></i>
                                <h3 class="text-ssbajio-dark-1 font-semibold mb-3">
                                    Tornillería Automotriz
                                </h3>
                                <p class="text-17 text-ssbajio-gray-dark-1 font-light whitespace-pre-line tracking-wide">Grado 5, 8, 10.9, 12.9
                                    Acabados: Pavonado, galvanizado, tropicalizado, cadminizado, geomet. Tornillería hexagonal, flange, tuercas, arandelas.
                                </p>
                            </article>

                            <article>
                                <i class="bi bi-hammer text-2xl text-white bg-gradient-to-r from-ssbajio-red-2 via-ssbajio-red-1 to-ssbajio-orange-1 px-4 py-3 rounded-2xl inline-block mb-5 lg:mb-10"></i>
                                <h3 class="text-ssbajio-dark-1 font-semibold mb-3">
                                    Tornillería Estructural
                                </h3>
                                <p class="text-17 text-ssbajio-gray-dark-1 font-light whitespace-pre-line tracking-wide">Acabados: Gic, pavonado, galvanizado, tropicalizado, geomet.
                                    Tornillería hexagonal, arandela plana F436, arandela de presión, tuerca hex. grado 2H.
                                </p>
                            </article>

                            <article>
                                <i class="bi bi-bar-chart-fill text-2xl text-white bg-gradient-to-r from-ssbajio-red-2 via-ssbajio-red-1 to-ssbajio-orange-1 px-4 py-3 rounded-2xl inline-block mb-5 lg:mb-10"></i>
                                <h3 class="text-ssbajio-dark-1 font-semibold mb-3">
                                    Tornillería Industrial
                                </h3>
                                <p class="text-17 text-ssbajio-gray-dark-1 font-light whitespace-pre-line tracking-wide">Acabado: Pavonado, galvanizado, tropicalizado.
                                    Tornillería hexagonal, allen, estufa, tuercas, arandelas, opresores.
                                </p>
                            </article>
                        </div>
                    </div>
                    <!-- Fin de los sectores de la solución de tornillería -->
                <?php endif ?>

                <?php if ($solution->alias === 'ferreteria'): ?>
                    <!-- Cards informativas de ferretería -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5 pt-16 lg:pt-33 text-center">
                        <article class="bg-ssbajio-gray-light-5 rounded-2xl py-8 lg:py-16 px-8 lg:px-18 shadow-lg">
                            <h2 class="text-lg text-ssbajio-dark-1 font-semibold mb-3">
                                Ofrecemos soluciones a todas tus herramientas y equipo
                            </h2>
                            <p class="text-17 text-ssbajio-gray-dark-1">
                                Trabajamos con las mejores marcas de productos, herramientas y equipo para el sector ferretero.
                            </p>
                        </article>
                        <article class="bg-ssbajio-red-1 rounded-2xl flex flex-col justify-center py-8 lg:py-16 px-8 lg:px-18">
                            <h2 class="text-lg text-white font-semibold">
                                Distribuidores mayoristas de ferretería para el sector, alimenticio, automotriz, para construcción e industrial
                            </h2>
                        </article>
                    </div>
                    <!-- Fin de las cards informativas de ferretería -->
                <?php endif ?>
            </div>
        </div>
    </section>

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

    <!-- Seccion de productos -->
    <!--
    <section class="products bg-ssbajio-gray-light-3 py-5 min-h-[400px] flex items-center">
        <div class="container">
            <header class="text-center">
                <h2 class="text-3xl font-semibold font-title uppercase">¡Tenemos los productos que tus proyectos necesitan!</h2>
                <p class="mt-2">Contamos con un amplio inventario enfocado a la tornillería para resolver todas tus necesidades industriales.</p>
            </header>
            <div class="grid grid-rows-[repeat(2,minmax(210px,1fr))] grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-5 my-8">
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[250px]">
                    <figure class="inline-block">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    -->
    <!-- Fin seccion de productos -->

    <!-- Seccion de productos variante 2-->
    <!--
    <section class="products bg-ssbajio-gray-light-3 py-5 min-h-[400px] flex items-center">
        <div class="container">
            <header class="text-center">
                <h2 class="text-3xl font-semibold font-title uppercase">Pintura de esmalte</h2>
                <p class="mt-2">Gracias a su alta calidad podrás lograr un acabado mate, satinado o brillante. La pintura de esmalte esta creada principalmente para su uso en baños, cocinas y herrerías, ya sea para interior o exterior.</p>
            </header>
            <div class="grid grid-rows-[repeat(auto-fit,minmax(210px,1fr))] grid-cols-[repeat(auto-fit,minmax(160px,1fr))] gap-5 my-8">
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
                <article class="rounded-xl overflow-hidden max-w-[160px]">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover bg-white">
                        <figcaption class="text-center mt-4 text-ssbajio-dark-1 font-bold text-md">Esmalte Acrílico Base agua</figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    -->
    <!-- Fin seccion de productos variante 2 -->

    <!-- Seccion de caracteristicas -->
    <!--
    <section class="bg-ssbajio-dark-1  min-h-[60vh] text-white flex items-center py-8 my-2">
        <div class="container">
            <h3 class="font-semibold text-center text-lg mb-12">Ventajas de contratar una solución de sujeción con SSB</h3>
            <ul class="flex flex-col items-center md:flex-row mt-6 justify-center gap-8">
                <li class="text-center min-w-[100px] max-w-[250px] md:w-[33%]">
                    <div class="min-h-[60px] inline-flex items-center">
                        <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.70752 33.7153H8.05811V8.11719L3.3999 12.2261L0.938965 9.34766L9.46436 0.470703H13.7051L13.6831 0.514648L13.7051 0.492676V33.7153H18.0337V38H3.70752V33.7153ZM20.9121 11.1934C20.9121 9.55273 21.0586 8.13916 21.3516 6.95264C21.6592 5.75146 22.0547 4.74805 22.5381 3.94238C23.0361 3.12207 23.6074 2.46289 24.252 1.96484C24.8965 1.4668 25.5557 1.08594 26.2295 0.822266C26.918 0.543945 27.5991 0.36084 28.2729 0.272949C28.9614 0.185059 29.5913 0.141113 30.1626 0.141113C30.7046 0.141113 31.3052 0.185059 31.9644 0.272949C32.6382 0.346191 33.312 0.514648 33.9858 0.77832C34.6743 1.02734 35.3335 1.40088 35.9634 1.89893C36.6079 2.38232 37.1719 3.03418 37.6553 3.85449C38.1533 4.6748 38.5488 5.68555 38.8418 6.88672C39.1494 8.08789 39.3032 9.52344 39.3032 11.1934V27.0576C39.3032 28.6982 39.1494 30.1191 38.8418 31.3203C38.5488 32.5068 38.1533 33.5176 37.6553 34.3525C37.1572 35.1875 36.5859 35.8687 35.9414 36.396C35.2969 36.9087 34.6377 37.3115 33.9639 37.6045C33.29 37.8828 32.6162 38.0732 31.9424 38.1758C31.2832 38.2783 30.6899 38.3296 30.1626 38.3296C29.5767 38.3296 28.9395 38.2783 28.251 38.1758C27.5625 38.0732 26.874 37.8828 26.1855 37.6045C25.4971 37.3115 24.8306 36.9087 24.186 36.396C23.5562 35.8833 22.9995 35.2095 22.5161 34.3745C22.0327 33.5396 21.6445 32.5215 21.3516 31.3203C21.0586 30.1191 20.9121 28.6982 20.9121 27.0576V11.1934ZM26.7349 29.4526C26.7349 31.0054 27.0132 32.1333 27.5698 32.8364C28.1411 33.5396 29.0054 33.8911 30.1626 33.8911C31.2905 33.8911 32.1328 33.5396 32.6895 32.8364C33.2461 32.1333 33.5244 31.0054 33.5244 29.4526V9.12793C33.5244 7.4873 33.2461 6.29346 32.6895 5.54639C32.1328 4.79932 31.2905 4.42578 30.1626 4.42578C29.0054 4.42578 28.1411 4.79932 27.5698 5.54639C27.0132 6.29346 26.7349 7.4873 26.7349 9.12793V29.4526Z" fill="#585858"/>
                        </svg>
                    </div>
                    <p>Contamos con más de 10 años de experiencia en el mercado.</p>
                </li>
                <li class="text-center min-w-[100px] max-w-[250px] md:w-[33%]">
                    <div class="min-h-[60px] inline-flex items-center">
                        <svg width="64" height="53" viewBox="0 0 64 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7104 0.65397L35.0483 5.58609H35.0582L40.2392 6.35996C41.1605 6.51473 41.5468 7.70133 40.8732 8.40297L37.1088 12.1794L38.0004 17.5553C38.149 18.5149 37.1881 19.2578 36.3361 18.8141L31.7198 16.2964L27.0738 18.8554C26.2218 19.299 25.2708 18.5561 25.4095 17.5965L26.3011 12.2207L22.5367 8.40297C21.8532 7.69101 22.2494 6.50442 23.1707 6.35996L28.3517 5.58609L30.6896 0.65397C31.1155 -0.233399 32.3241 -0.202444 32.7104 0.65397ZM22.19 29.7205C22.19 27.8941 23.6066 26.4186 25.36 26.4186H38.04C39.7934 26.4186 41.21 27.8941 41.21 29.7205V49.5315C41.21 51.3578 39.7934 52.8333 38.04 52.8333H25.36C23.6066 52.8333 22.19 51.3578 22.19 49.5315V29.7205ZM3.17 33.0223C1.41659 33.0223 0 34.4978 0 36.3241V49.5315C0 51.3578 1.41659 52.8333 3.17 52.8333H15.85C17.6034 52.8333 19.02 51.3578 19.02 49.5315V36.3241C19.02 34.4978 17.6034 33.0223 15.85 33.0223H3.17ZM44.38 49.5315V42.9278C44.38 41.1015 45.7966 39.626 47.55 39.626H60.23C61.9834 39.626 63.4 41.1015 63.4 42.9278V49.5315C63.4 51.3578 61.9834 52.8333 60.23 52.8333H47.55C45.7966 52.8333 44.38 51.3578 44.38 49.5315Z" fill="#585858"/>
                        </svg>
                    </div>
                    <p>Ofrecemos Servicio de gestión y  administración de almacén para tu producto.</p>
                </li>
                <li class="text-center min-w-[100px] max-w-[250px] md:w-[33%]">
                    <div class="min-h-[60px] inline-flex items-center">
                        <svg width="57" height="45" viewBox="0 0 57 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 14.9102V42.8804C0 44.055 0.944998 45 2.11962 45H6.35886C7.53349 45 8.47849 44.055 8.47849 42.8804V19.5645C8.47849 18.0013 9.74143 16.7384 11.3046 16.7384H45.2186C46.7818 16.7384 48.0447 18.0013 48.0447 19.5645V42.8804C48.0447 44.055 48.9897 45 50.1644 45H54.4036C55.5782 45 56.5232 44.055 56.5232 42.8804V14.9102C56.5232 12.6051 55.119 10.5208 52.9729 9.66415L29.3126 0.205338C28.6325 -0.0684461 27.8819 -0.0684461 27.2106 0.205338L3.55037 9.66415C1.40425 10.5208 0 12.5963 0 14.9102ZM13.4243 45H43.099C44.2736 45 45.2186 44.055 45.2186 42.8804V37.9346H11.3046V42.8804C11.3046 44.055 12.2496 45 13.4243 45ZM11.3046 35.1084V29.4561H45.2186V35.1084H11.3046ZM11.3046 19.5645V26.6299H45.2186V19.5645H11.3046Z" fill="#585858"/>
                        </svg>
                    </div>
                    <p>Trabajamos con los principales proveedores y fabricantes de herramientas de Estados Unidos y México.</p>
                </li>
            </ul>
        </div>
    </section>
    -->
    <!-- Fin seccion caracteristicas -->

    <!-- Sección de otras soluciones -->
    <section class="bg-ssbajio-gray-light-3">
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
                            <article class="flex flex-col items-center gap-y-3 lg:gap-y-6 lg:px-4">
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
                            </article>
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
                        <i class="bi bi-chevron-left text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
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
                        <i class="bi bi-chevron-right text-ssbajio-dark-1 text-2xl lg:text-4xl"></i>
                    </span>
                </button>
                <!-- Fin del botón de siguiente -->
            </div>
            <!-- Fin de la sección de soluciones -->
        </div>
    </section>
    <!-- Fin de la sección de otras soluciones -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/siema.js') ?>"></script>
    <script src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>
