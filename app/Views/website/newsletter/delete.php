<?= $this->extend('templates/website/default') ?>

<?= $this->section('content') ?>
    <title>
        Cancelar suscripción
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="bg-ssbajio-dark-2 flex flex-col justify-center h-screen">
        <div class="container max-w-4xl text-white">
            <h1 class="text-3xl lg:text-4xl font-title text-center lg:text-left uppercase mb-4">
                Cancelar suscripción
            </h1>

            <p class="mb-6 text-center lg:text-left">
                Presiona el botón de confirmar para cancelar tu suscripción al newsletter
                con dirección de correo electrónico:
                <span class="font-semibold underline decoration-wavy underline-offset-4"><?= esc($user->email) ?></span>
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 text-center">
                <!-- Botón para cancelar la suscripción al newsletter -->
                <?= form_open(url_to('website.newsletter.delete', $user->id, $key)) ?>
                    <button
                        type="submit"
                        class="bg-ssbajio-dark-3 ssbajio-btn hover:bg-ssbajio-dark-1 rounded w-full"
                    >
                        Confirmar
                    </button>
                <?= form_close() ?>

                <!-- Botón para cancelar la acción -->
                <a
                    href="<?= url_to('website.home.index') ?>"
                    class="bg-ssbajio-red-1 ssbajio-btn hover:bg-ssbajio-red-2 rounded"
                >
                    Cancelar
                </a>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
