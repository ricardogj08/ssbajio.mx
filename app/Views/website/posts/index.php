<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        Blog
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<?= $this->include('website/layouts/header') ?>

    <!-- Banner -->
    <div
        style="background-image: url('<?= base_url('images/website/posts/index/banner.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <div class="container">
            <div class="py-16 lg:py-36 text-white text-center">
                <h1 class="text-4xl lg:text-6xl font-title uppercase">
                    Blog
                </h1>
                <h2 class="mt-5 lg:text-lg font-semibold">
                    Artículos y noticias que pueden interesarte
                </h2>
            </div>
        </div>
    </div>
    <!-- Fin del banner -->

    <!-- Sección del newsletter, artículos y paginación -->
    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="pt-12 lg:pt-24 pb-18 lg:pb-38">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                    <!-- Newsletter -->
                    <div class="lg:col-span-3">
                        <?= $this->include('website/layouts/newsletter') ?>
                    </div>
                    <!-- Fin del newsletter -->

                    <!-- Artículos -->
                    <div class="lg:col-start-5 lg:col-end-13">
                        <!-- Artículo -->
                        <article>
                            <a href="<?= url_to('website.posts.show', 'test') ?>" class="group">
                                <!-- Portada -->
                                <div
                                    style="background-image: url('https://picsum.photos/1920/1080')"
                                    class="bg-cover bg-center bg-no-repeat"
                                >
                                    <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                        <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                            <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                08
                                            </div>
                                            <div class="lg:text-xl font-semibold uppercase">
                                                Junio
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de la portada -->

                                <h2 class="mt-4 lg:mt-9 mb-4 text-22 text-ssbajio-red-1 font-bold">
                                    Aquí va el título
                                </h2>
                                <p class="text-ssbajio-gray-dark-4 text-15 font-light leading-relaxed">
                                    Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere.
                                </p>
                            </a>
                        </article>
                        <!-- Fin del Artículo -->

                        <!-- Artículo -->
                        <article class="pt-12 lg:pt-24 pb-9 lg:pb-18">
                            <a href="<?= url_to('website.posts.show', 'test') ?>" class="group">
                                <!-- Portada -->
                                <div
                                    style="background-image: url('https://picsum.photos/1920/1080')"
                                    class="bg-cover bg-center bg-no-repeat"
                                >
                                    <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                        <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                            <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                10
                                            </div>
                                            <div class="lg:text-xl font-semibold uppercase">
                                                Mayo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de la portada -->

                                <h2 class="mt-4 lg:mt-9 mb-4 text-22 text-ssbajio-red-1 font-bold">
                                    Aquí va el título
                                </h2>
                                <p class="text-ssbajio-gray-dark-4 text-15 font-light leading-relaxed">
                                    Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere ad vestibulum fringilla cum egestas suspendisse dignissim bibendum sem est eu mi pretium porta ac vestibulum parturient.
                                </p>
                            </a>
                        </article>
                        <!-- Fin del artículo -->

                        <!-- Artículo -->
                        <article>
                            <a href="<?= url_to('website.posts.show', 'test') ?>" class="group">
                                <!-- Portada -->
                                <div
                                    style="background-image: url('https://picsum.photos/1920/1080')"
                                    class="bg-cover bg-center bg-no-repeat"
                                >
                                    <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                        <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                            <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                08
                                            </div>
                                            <div class="lg:text-xl font-semibold uppercase">
                                                Febrero
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de la portada -->

                                <h2 class="mt-4 lg:mt-9 mb-4 text-22 text-ssbajio-red-1 font-bold">
                                    Aquí va el título
                                </h2>
                                <p class="text-ssbajio-gray-dark-4 text-15 font-light leading-relaxed">
                                    Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere.
                                </p>
                            </a>
                        </article>
                        <!-- Fin del artículo -->

                        <!-- Artículo -->
                        <article class="pt-12 lg:pt-24 pb-9 lg:pb-18">
                            <a href="<?= url_to('website.posts.show', 'test') ?>" class="group">
                                <!-- Portada -->
                                <div
                                    style="background-image: url('https://picsum.photos/1920/1080')"
                                    class="bg-cover bg-center bg-no-repeat"
                                >
                                    <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                        <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                            <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                10
                                            </div>
                                            <div class="lg:text-xl font-semibold uppercase">
                                                Enero
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de la portada -->

                                <h2 class="mt-4 lg:mt-9 mb-4 text-22 text-ssbajio-red-1 font-bold">
                                    Aquí va el título
                                </h2>
                                <p class="text-ssbajio-gray-dark-4 text-15 font-light leading-relaxed">
                                    Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere ad vestibulum fringilla cum egestas suspendisse dignissim bibendum sem est eu mi pretium porta ac vestibulum parturient.
                                </p>
                            </a>
                        </article>
                        <!-- Fin del artículo -->

                        <!-- Artículo -->
                        <article>
                            <a href="<?= url_to('website.posts.show', 'test') ?>" class="group">
                                <!-- Portada -->
                                <div
                                    style="background-image: url('https://picsum.photos/1920/1080')"
                                    class="bg-cover bg-center bg-no-repeat"
                                >
                                    <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                        <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                            <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                10
                                            </div>
                                            <div class="lg:text-xl font-semibold uppercase">
                                                Enero
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin de la portada -->

                                <h2 class="mt-4 lg:mt-9 mb-4 text-22 text-ssbajio-red-1 font-bold">
                                    Aquí va el título
                                </h2>
                                <p class="text-ssbajio-gray-dark-4 text-15 font-light leading-relaxed">
                                    Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere ad vestibulum fringilla cum egestas suspendisse dignissim bibendum sem est eu mi pretium porta ac vestibulum parturient.
                                </p>
                            </a>
                        </article>
                        <!-- Fin del artículo -->
                    </div>
                    <!-- Fin de los artículos -->
                </div>

                <!-- Paginación -->
                <div class="flex justify-end items-center gap-x-8 pt-11 text-sm text-ssbajio-dark-3">
                    <a href="#" class="hover:text-ssbajio-gray-light-1">
                        1
                    </a>
                    <a href="#" class="hover:text-ssbajio-gray-light-1">
                        2
                    </a>
                    <a href="#" class="hover:text-ssbajio-gray-light-1">
                        3
                    </a>
                    <a
                        href="#"
                        class="bg-ssbajio-red-1 text-white rounded-full w-7 h-7 flex justify-center items-center hover:bg-ssbajio-red-2"
                    >
                        4
                    </a>
                    <a href="#" class="hover:text-ssbajio-gray-light-1">
                        5
                    </a>
                    <a href="#" class="hover:text-ssbajio-gray-light-1">
                        6
                    </a>
                </div>
                <!-- Fin de la paginación -->
            </div>
        </div>
    </div>
    <!-- Fin de la sección del newsletter, artículos y paginación -->

	<?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
