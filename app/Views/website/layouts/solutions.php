<!-- Soluciones integrales -->
<div class="bg-ssbajio-dark-1">
    <div class="container">
        <div class="py-20 lg:pt-39 lg:pb-44 text-white relative">
            <h3 class="font-title text-3xl lg:text-35 text-center uppercase mb-6 lg:mb-12">
                Soluciones Integrales
            </h3>

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

                            <!-- Nombre de la solución -->
                            <h3 class="text-white text-lg font-semibold mb-2.5 lg:mb-5 text-center">
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
                role="button"
                aria-label="Botón de retroceso del carrusel de soluciones"
                class="solutions-carousel-prev absolute top-0 -left-4 lg:-left-10 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            >
                <span class="inline-flex items-center justify-center group-focus:outline-none">
                    <i class="bi bi-chevron-left text-white text-2xl lg:text-4xl"></i>
                </span>
            </button>
            <!-- Fin del botón de retroceso -->

            <!-- Botón de siguiente -->
            <button
                type="button"
                role="button"
                aria-label="Botón de siguiente del carrusel de soluciones"
                class="solutions-carousel-next absolute top-0 -right-4 lg:-right-10 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            >
                <span class="inline-flex items-center justify-center group-focus:outline-none">
                    <i class="bi bi-chevron-right text-white text-2xl lg:text-4xl"></i>
                </span>
            </button>
            <!-- Fin del botón de siguiente -->
        </div>
    </div>
</div>
<!-- Fin de las soluciones integrales -->
