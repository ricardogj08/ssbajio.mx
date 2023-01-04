<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        ▷ Servicio de Gestión y Administración de Almacenes
    </title>

    <meta
        name="description"
        content="Ofrecemos soluciones en la gestión y administración almacenes, tanto en propios de SSB, como los de tu empresa, con personal altamente capacitado."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/layouts/header') ?>

    <!-- Banner -->
    <div
        style="background-image: url('<?= base_url('images/website/services/index/banner.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <div class="container">
            <div class="py-12 lg:py-24 text-center">
                <h1 class="font-title text-4xl lg:text-6xl leading-tight text-white uppercase whitespace-pre-line mb-3">Proveedor de servicios
                    de Administración de Almacenes
                </h1>

                <h2 class="lg:text-lg text-white font-semibold">
                    Soluciones integrales en la gestión y administración de almacenes de tornillería especializada
                </h2>
            </div>
        </div>
    </div>
    <!-- Fin del banner -->

    <div class="bg-ssbajio-dark-1">
        <div class="container">
            <div class="pt-12 lg:pt-24 pb-14 lg:pb-27 grid grid-cols-1 lg:grid-cols-12 gap-7.5">
                <p class="lg:col-start-2 lg:col-span-10 text-center text-white text-17 font-light tracking-widesm">
                    En SSb nos enfocamos en poder brindarte soluciones de administración de almacenes, gestión de inventarios, análisis de consumos y todo lo necesario para que nunca detengas tu producción. Tomamos control de tus inventarios de tornillería y herramienta, para organizarlos y administrarlos, reduciendo así la carga de trabajo de tus áreas de compras y almacén.
                </p>
            </div>
        </div>
    </div>

    <!-- Seccion de productos -->
    <section class="products bg-ssbajio-gray-light-3 py-5 min-h-[400px] flex items-center">
        <div class="container">
            <header class="text-center">
                <h2 class="text-3xl font-semibold font-title uppercase">¡Tenemos los productos que tus proyectos necesitan!</h2>
                <p class="mt-2">Contamos con un amplio inventario enfocado a la tornillería para resolver todas tus necesidades industriales.</p>
            </header>
            <div class="grid grid-rows-[repeat(2,minmax(250px,1fr))] grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-5 my-8">
                <article class="rounded-md overflow-hidden">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-md overflow-hidden">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-md overflow-hidden">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article class="rounded-md overflow-hidden">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article>
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article>
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article>
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
                <article>
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Tornilleria hexagonal</figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!-- Fin seccion de productos -->

    <!-- Seccion de productos variante 2-->
    <section class="products bg-ssbajio-gray-light-3 py-5 min-h-[400px] flex items-center">
        <div class="container">
            <header class="text-center">
                <h2 class="text-3xl font-semibold font-title uppercase">Pintura de esmalte</h2>
                <p class="mt-2">Gracias a su alta calidad podrás lograr un acabado mate, satinado o brillante. La pintura de esmalte esta creada principalmente para su uso en baños, cocinas y herrerías, ya sea para interior o exterior.</p>
            </header>
            <div class="grid grid-rows-[repeat(2,minmax(230px,1fr))] grid-cols-[repeat(auto-fit,minmax(160px,1fr))] gap-5 my-8">
                <article class="rounded-md overflow-hidden">
                    <figure class="">
                        <img src="https://www.pngplay.com/wp-content/uploads/2/Screw-Free-PNG.png" alt="" class="w-full h-full object-cover">
                        <figcaption class="text-center">Esmalte Acrílico
Base agua</figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!-- Fin seccion de productos variante 2 -->

    <section class="bg-ssbajio-dark-1  min-h-[60vh] text-white flex items-center py-8">
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

    <!-- Sección de soluciones integrales -->
    <?= $this->setVar('solutions', $solutions)->include('website/layouts/solutions') ?>
    <!-- Fin de la sección de soluciones integrales -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script type="text/javascript" src="<?= base_url('js/siema.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>

