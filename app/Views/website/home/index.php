<?= $this->extend('templates/website/default') ?>

<?= $this->section('content') ?>
    <title>
        <?= esc(service('settings')->get('App.company')) ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<?= $this->include('website/layouts/header') ?>

    <!-- Primera sección -->
    <section class="bg-gradient-to-r from-ssbajio-dark-4 to-ssbajio-gray-dark-5">
        <div class="container">
            <div class="pt-8 sm:pt-15 pb-28 sm:pb-53">
                <!-- Titulo y tornillo con sello -->
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-7.5 pb-14 lg:pb-28">
                    <!-- Titulo -->
                    <div class="sm:col-span-5 z-10 sm:z-auto">
                        <h1 class="uppercase font-title text-5xl lg:text-80 leading-tight">
                            <div class="text-ssbajio-gray-dark-6">
                                Proveeduría
                            </div>
                            <div class="text-white">
                                Industrial
                            </div>
                        </h1>
                        <h2 class="text-white lg:text-lg font-semibold whitespace-pre-line leading-relaxed lg:leading-loose mt-4 lg:mt-7">Soluciones e insumos para
                            cadena de suministro y
                            líneas de producción
                        </h2>
                    </div>
                    <!-- Fin del titulo -->

                    <!-- Tornillo con sello -->
                    <div class="sm:col-start-8 sm:col-end-13 flex justify-end -mt-56 sm:-mt-0">
                        <img src="<?= base_url('images/website/home/index/tornillo-sello.webp') ?>" class="w-3/4 sm:w-auto">
                    </div>
                    <!-- Fin del tornillo con sello -->
                </div>
                <!-- Fin del titulo y tornillo con sello -->

                <!-- Video -->
                <div class="relative">
                    <div class="hidden lg:grid grid-cols-12 gap-7.5 absolute -bottom-14">
                        <div class="col-span-2">
                            <img src="<?= base_url('images/website/home/index/cuadrado-circulos-white.webp') ?>">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-7.5 relative">
                        <div
                            style="background-image: url('https://picsum.photos/1920/1080');"
                            class="lg:col-start-2 lg:col-span-10 bg-cover bg-center bg-no-repeat rounded-xl"
                        >
                            <div class="py-16 lg:py-31 backdrop-brightness-30 rounded-xl">
                                <h2 class="text-white text-center lg:whitespace-pre-line font-title text-xl lg:text-32 leading-normal uppercase">Soluciones integrales de tornillería especializada,
                                    herramientas industriales refacciones de transporte,
                                    ferretería y más...
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin del video -->
            </div>
        </div>
    </section>
    <!-- Fin de la primera sección -->

	<?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
