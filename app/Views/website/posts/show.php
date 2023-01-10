<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        <?= esc($post->title) ?>
    </title>

    <meta
        name="description"
        content="<?= esc($post->excerpt) ?>"
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<?= $this->include('website/layouts/header') ?>

    <div class="bg-ssbajio-gray-light-3 pt-9 lg:pt-18 pb-14 lg:pb-26">
        <div class="container lg:px-18">
            <div class="pb-6 lg:pb-12">
                <a
                    href="<?= url_to('website.posts.index') ?>"
                    class="text-ssbajio-red-1 font-bold text-15 hover:text-ssbajio-red-2"
                >
                    Todos los artículos y noticias
                </a>
            </div>
        </div>

        <!-- Sección del newsletter y el cuerpo del artículo -->
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                <!-- Cuerpo del artículo -->
                <div class="lg:col-span-9">
                    <h1 class="text-4xl lg:text-50 font-title text-ssbajio-dark-1 uppercase leading-tight mb-3 lg:mb-6">
                        <?= esc($post->title) ?>
                    </h1>

                    <h2 class="text-lg lg:text-2xl text-ssbajio-gray-dark-3 font-light mb-5 lg:mb-10">
                        Blog y noticias.
                    </h2>

                    <!-- Portada -->
                    <div
                        style="background-image: url('<?= base_url(['uploads/website/posts/covers/', $post->cover]) ?>')"
                        class="bg-cover bg-center bg-no-repeat"
                    >
                        <div class="grid grid-cols-4 lg:grid-cols-9 lg:gap-7.5 pt-32 lg:pt-74">
                            <div class="bg-ssbajio-dark-1 col-span-1 lg:col-span-2 py-5 lg:py-10 text-white text-center">
                                <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                    <?= CodeIgniter\I18n\Time::parse($post->started_at ?? $post->created_at)->toLocalizedString('dd') ?>
                                </div>
                                <div class="text-xs lg:text-xl font-semibold uppercase">
                                    <?= CodeIgniter\I18n\Time::parse($post->started_at ?? $post->created_at)->toLocalizedString('MMMM') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de la portada -->

                    <!-- Contenido del artículo -->
                    <article class="pt-7 lg:pt-14">
                        <?= esc($post->body, 'raw') ?>

                        <h3 class="text-3xl lg:text-45 text-ssbajio-dark-1 font-bold leading-none mb-3.5 lg:mb-7.5">
                            Subtítulo H3
                        </h3>

                        <p class="text-15 text-ssbajio-gray-dark-4 font-light tracking-wide mb-7.5 lg:mb-15">
                            Consectetur dui donec non a adipiscing parturient nibh per hendrerit montes elit nisi tincidunt nascetur fusce parturient curabitur. Scelerisque dignissim blandit a mi vestibulum integer aliquet in posuere ad vestibulum fringilla cum egestas suspendisse dignissim bibendum sem est eu mi pretium porta ac vestibulum parturient.
                        </p>

                        <h4 class="text-2xl lg:text-38 text-ssbajio-red-1 font-bold leading-none mb-2 lg:mb-4.5">
                            Subtítulo H4
                        </h4>

                        <h5 class="text-xl lg:text-28 text-ssbajio-dark-1 font-bold leading-none mb-3.5 lg:mb-7.5">
                            Subtítulo H5
                        </h5>

                        <p class="text-15 text-ssbajio-gray-dark-4 font-light tracking-wide mb-3.5 lg:mb-7.5">
                            Litora dui condimentum commodo nostra nunc duis nunc eu mus a integer a curae ad parturient a pulvinar a ac donec per tincidunt turpis. Nam ut egestas lectus etiam convallis leo a a id id non faucibus euismod blandit fames dolor purus gravida ullamcorper sit a conubia bibendum vestibulum eu vel eget. Hac suspendisse a tristique faucibus hendrerit per habitant inceptos neque adipiscing gravida dis euismod odio imperdiet. Vivamus fringilla parturient vestibulum parturient elementum blandit est a condimentum vestibulum eros adipiscing nostra imperdiet vel molestie parturient suspendisse cursus vestibulum parturient adipiscing vel adipiscing dapibus. Hendrerit amet vel sed ad id a sagittis dui massa adipiscing etiam cum a eros nec proin a dui eu et a.
                        </p>

                        <p class="text-15 text-ssbajio-gray-dark-4 font-light tracking-wide mb-7.5 lg:mb-15">
                            Aliquet quis leo dictum mi potenti adipiscing a vitae vivamus parturient mauris a elementum id posuere aliquam vestibulum condimentum. A nisl iaculis vel nisl a metus fermentum leo id nunc suspendisse.
                        </p>

                        <h6 class="text-lg text-ssbajio-dark-1 font-bold leading-none mb-3.5 lg:mb-7.5">
                            Subtítulo H6
                        </h6>

                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-7.5 pb-3.5 lg:pb-7.5">
                            <img src="https://picsum.photos/1920/1080" alt="" class="h-32 lg:h-65 object-cover">
                            <img src="https://picsum.photos/1920/1080" alt="" class="h-32 lg:h-65 object-cover">
                            <img src="https://picsum.photos/1920/1080" alt="" class="h-32 lg:h-65 object-cover">
                        </div>
                        <!-- Fin del contenido del artículo -->
                    </article>
                </div>
                <!-- Fin del cuerpo del artículos -->

                <div class="lg:col-span-3">
                    <!-- Newsletter -->
                    <div class="pb-8 lg:pb-16">
                        <?= $this->setVar('red', true)->include('website/layouts/newsletter') ?>
                    </div>
                    <!-- Fin del newsletter -->

                    <!-- Sección de compartir el artículos -->
                    <div>
                        <div class="text-ssbajio-dark-1 text-17 font-semibold text-center mb-4 lg:mb-8">
                            Comparte este artículo
                        </div>
                        <div class="flex items-center justify-center justify-evenly">
                            <!-- Compartir en Facebook -->
                            <a href="#" aria-label="Compartir artículo por Facebook">
                                <i class="bi bi-facebook text-xl text-ssbajio-blue-2"></i>
                            </a>

                            <!-- Compartir en Whatsapp -->
                            <a href="#" aria-label="Compartir artículo por Whatsapp">
                                <i class="bi bi-whatsapp text-xl text-ssbajio-green-1"></i>
                            </a>

                            <!-- Compartir en LinkedIn -->
                            <a href="#" aria-label="Compartir artículo por LinkedIn">
                                <i class="bi bi-linkedin text-xl text-ssbajio-blue-3"></i>
                            </a>

                            <!-- Compartir en Facebook Messenger -->
                            <a href="#" aria-label="Compartir artículo por Facebook Messenger">
                                <i class="bi bi-messenger text-xl text-ssbajio-blue-4"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Fin de la sección de compartir artículo -->
                </div>
            </div>
        </div>
        <!-- Fin de la sección del newsletter y el cuerpo del artículo -->
    </div>

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
