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
                        <?php foreach ($posts as $itr => $post): ?>
                            <!-- Artículo -->
                            <article class="<?= $itr % 2 === 0 ? '' : 'pt-12 lg:pt-24 pb-9 lg:pb-18' ?>">
                                <a href="<?= url_to('website.posts.show', $post->slug) ?>" class="group">
                                    <!-- Portada -->
                                    <div
                                        style="background-image: url('<?= base_url(['uploads/website/posts', $post->cover]) ?>')"
                                        class="bg-cover bg-center bg-no-repeat"
                                    >
                                        <div class="grid grid-cols-4 lg:gap-7.5 pt-32 lg:pt-62 group-hover:backdrop-brightness-75 transition-all">
                                            <div class="bg-ssbajio-dark-1 col-span-1 py-5 lg:py-10 text-white text-center">
                                                <div class="mb-2 text-2xl lg:text-50 font-title leading-none">
                                                    <?= esc(CodeIgniter\I18n\Time::parse($post->started_at ?? $post->created_at))
                                                        ->toLocalizedString('dd') ?>
                                                </div>
                                                <div class="text-xs lg:text-xl font-semibold uppercase">
                                                    <?= esc(CodeIgniter\I18n\Time::parse($post->started_at ?? $post->created_at))
                                                        ->toLocalizedString('MMMM') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fin de la portada -->

                                    <h2 class="mt-4 lg:mt-9 mb-4 text-lg lg:text-22 text-ssbajio-red-1 font-bold">
                                        <?= esc($post->title) ?>
                                    </h2>
                                    <p class="text-ssbajio-gray-dark-4 text-13 lg:text-15 font-light leading-relaxed">
                                        <?= esc($post->excerpt) ?>
                                    </p>
                                </a>
                            </article>
                            <!-- Fin del Artículo -->
                        <?php endforeach ?>
                    </div>
                    <!-- Fin de los artículos -->
                </div>

                <!-- Paginación -->
                <div class="flex justify-end items-center gap-x-8 pt-6 lg:pt-11 text-sm text-ssbajio-dark-3">
                    <?= $pager->links('posts', 'website_posts_pagination') ?>
                </div>
                <!-- Fin de la paginación -->
            </div>
        </div>
    </div>
    <!-- Fin de la sección del newsletter, artículos y paginación -->

	<?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
