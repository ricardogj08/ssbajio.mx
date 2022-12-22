<?= $this->include('website/layouts/whatsapp') ?>

<!-- Pie de página -->
<footer class="bg-ssbajio-dark-1">
    <div class="container">
        <div class="py-7 lg:py-14 flex flex-col lg:flex-row items-center justify-between gap-y-2.5">
            <!-- Derechos de autor -->
            <div class="text-ssbajio-gray-light-2 font-light flex flex-col gap-y-2.5 items-center lg:items-start text-center lg:text-left">
                <p class="text-13">
                    <?= esc(setting()->get('App.general', 'company')) ?>. Todos los derechos reservados
                    <?= CodeIgniter\I18n\Time::now()->getYear() ?>
                </p>
                <p class="flex text-sm lg:text-base">
                    <span class="border-r border-ssbajio-gray-light-2 pr-3 leading-none">
                        Aviso de Privacidad
                    </span>
                    <span class="pl-3 leading-none">
                        Política de cookies
                    </span>
                </p>
                <p class="text-13">
                    Diseño y desarrollo web por: Genotipo&reg;
                </p>
            </div>
            <!-- Fin de los derechos de autor -->

            <!-- Redes sociales -->
            <div class="text-white flex items-center gap-x-3 lg:gap-x-6">
                <div class="text-sm font-semibold">
                    Síguenos:
                </div>
                <i class="bi bi-facebook text-3xl"></i>
            </div>
            <!-- Fin de las redes sociales -->
        </div>
    </div>
</footer>
<!-- Fin del pie de página -->
