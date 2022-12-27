<?= $this->extend('templates/backend/email') ?>

<?= $this->section('head') ?>
    <title>
        Newsletter
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold text-center mb-2">
        Newsletter
    </h1>

    <h2 class="text-sm text-center">
        <?= esc(setting()->get('App.general', 'company')) ?>
    </h2>

    <div class="divider"></div>

    <!-- Lista de artículos -->
    <?php foreach ($posts as $post): ?>
        <!-- Artículo -->
        <a
            href="<?= url_to('website.posts.show', $post->slug) ?>"
            target="_blank"
            class="group"
        >
            <article class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Portada -->
                <div class="sm:col-span-1">
                    <img
                        src="<?= base_url(['uploads/website/posts/covers/', $post->cover]) ?>"
                        alt="Portada <?= esc($post->title) ?>"
                        class="h-40 sm:h-24 w-full object-cover"
                    >
                </div>
                <!-- Fin de la porta -->

                <!-- Título y resumen -->
                <div class="sm:col-span-2">
                    <h2 class="text-lg font-semibold mb-2 group-hover:link">
                        <?= esc($post->title) ?>
                    </h2>
                    <p class="mb-4">
                        <?= esc($post->excerpt) ?>
                    </p>
                    <p class="text-sm">
                        <?= esc(CodeIgniter\I18n\Time::parse($post->started_at ?? $post->created_at))
                            ->toLocalizedString('dd MMMM, YYYY') ?>
                    </p>
                </div>
                <!-- Fin del título y el resumen  -->
            </article>
        </a>
        <!-- Fin del artículo -->

        <div class="divider"></div>
    <?php endforeach ?>
    <!-- Fin de la lista de artículos -->

    <!-- Fin del link de cancelación de suscripción  -->
    <p class="text-sm font-medium text-center sm:text-right">
        <a
            href="<?= url_to('website.newsletter.delete', $user->id, $key) ?>"
            class="link link-hover"
        >
            Cancelar suscripción
        </a>
    </p>
    <!-- Fin del link de cancelación de suscripción -->
<?= $this->endSection() ?>
