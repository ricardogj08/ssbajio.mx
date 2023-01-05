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
    <!-- Fin seccion de productos -->

    <!-- Seccion de sectores donde se ofrece -->
    <section class="bg-ssbajio-gray-light-3 py-5">
        <div class="container">
            <h2 class=" font-title text-2xl font-bold uppercase text-center">Sectores donde ofrecemos soluciones de sujeción</h2>
            <div class="grid md:grid-cols-2 mt-12 gap-x-7 gap-y-12 justify-center">
                <article>
                    <span class="bg-gradient-to-r from-ssbajio-red-2 to-ssbajio-orange-1 p-3 inline-block">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66502 25.4866C1.0119 25.4866 0.48645 24.9647 0.48645 24.316L0.48645 23.5356C0.48645 22.8868 1.0119 22.365 1.66502 22.365H21.3079C21.961 22.365 22.4865 22.8868 22.4865 23.5356V24.316C22.4865 24.9647 21.961 25.4866 21.3079 25.4866H1.66502ZM1.27216 20.8041C0.840022 20.8041 0.48645 20.453 0.48645 20.0237C0.48645 19.5945 0.840022 19.2433 1.27216 19.2433H21.7007C22.1329 19.2433 22.4865 19.5945 22.4865 20.0237C22.4865 20.453 22.1329 20.8041 21.7007 20.8041H1.27216ZM0.48645 16.5119C0.48645 17.1606 1.0119 17.6825 1.66502 17.6825H21.3079C21.961 17.6825 22.4865 17.1606 22.4865 16.5119V15.7315C22.4865 15.0828 21.961 14.5609 21.3079 14.5609L1.66502 14.5609C1.0119 14.5609 0.48645 15.0828 0.48645 15.7315L0.48645 16.5119ZM1.66502 13.0001C1.0119 13.0001 0.48645 12.4782 0.48645 11.8295L0.48645 11.0491C0.48645 10.4004 1.0119 9.87846 1.66502 9.87846L21.3079 9.87846C21.961 9.87846 22.4865 10.4004 22.4865 11.0491V11.8295C22.4865 12.4782 21.961 13.0001 21.3079 13.0001L1.66502 13.0001ZM1.66502 3.63522H21.3079C21.961 3.63522 22.4865 3.11333 22.4865 2.46461V1.68421C22.4865 1.0355 21.961 0.513599 21.3079 0.513599H1.66502C1.0119 0.513599 0.48645 1.0355 0.48645 1.68421L0.48645 2.46461C0.48645 3.11333 1.0119 3.63522 1.66502 3.63522ZM21.7007 6.75684H1.27216C0.840022 6.75684 0.48645 6.40566 0.48645 5.97644C0.48645 5.54721 0.840022 5.19603 1.27216 5.19603H21.7007C22.1329 5.19603 22.4865 5.54721 22.4865 5.97644C22.4865 6.40566 22.1329 6.75684 21.7007 6.75684Z" fill="white"/>
                        </svg>
                    </span>
                    <h3 class="font-bold text-ssbajio-dark-1 mt-6 mb-1">Tornillería Grado Alimenticio</h3>
                    <p class="text-ssbajio-gray-dark-1">Acero inoxidable 18-3 T304 y T316 Tornillería hexagonal, allen, estufa, tuercas, arandelas, pijas, opresores.</p>
                </article>
                <article class="md:text-right">
                    <span class="bg-gradient-to-r from-ssbajio-red-2 to-ssbajio-orange-1 p-3 inline-block">
                        <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.98438 3.44464L2.10938 8.82857C0.87358 9.34286 0 10.5696 0 12V16.2857C0 17.5554 0.687145 18.6643 1.70455 19.2536V22.2857C1.70455 23.2339 2.46626 24 3.40909 24H5.11364C6.05646 24 6.81818 23.2339 6.81818 22.2857V19.7143H20.4545V22.2857C20.4545 23.2339 21.2163 24 22.1591 24H23.8636C24.8065 24 25.5682 23.2339 25.5682 22.2857V19.2536C26.5856 18.6589 27.2727 17.5554 27.2727 16.2857V12C27.2727 10.5696 26.3991 9.34286 25.1634 8.82857L23.2884 3.44464C22.5692 1.38214 20.6357 0 18.4624 0H8.81037C6.63707 0 4.70348 1.38214 3.98438 3.44464ZM8.81037 3.42857H18.4624C19.1868 3.42857 19.8313 3.88929 20.071 4.575L21.4613 8.57143H5.81143L7.2017 4.575C7.44141 3.88929 8.08594 3.42857 8.81037 3.42857ZM16.1932 12.8571H11.0795C10.6108 12.8571 10.2273 13.2429 10.2273 13.7143V15.4286C10.2273 15.9 10.6108 16.2857 11.0795 16.2857H16.1932C16.6619 16.2857 17.0455 15.9 17.0455 15.4286V13.7143C17.0455 13.2429 16.6619 12.8571 16.1932 12.8571ZM2.55682 13.2857C2.55682 12.5732 3.12678 12 3.83523 12H5.53977C6.24822 12 6.81818 12.5732 6.81818 13.2857C6.81818 13.9982 6.24822 14.5714 5.53977 14.5714H3.83523C3.12678 14.5714 2.55682 13.9982 2.55682 13.2857ZM23.4375 12H21.733C21.0245 12 20.4545 12.5732 20.4545 13.2857C20.4545 13.9982 21.0245 14.5714 21.733 14.5714H23.4375C24.146 14.5714 24.7159 13.9982 24.7159 13.2857C24.7159 12.5732 24.146 12 23.4375 12Z" fill="white"/>
                        </svg>

                    </span>
                    <h3 class="font-bold text-ssbajio-dark-1 mt-6 mb-1">Tornillería Automotriz</h3>
                    <p class="text-ssbajio-gray-dark-1">Grado 5, 8, 10.9, 12.9</p>
                    <p class="text-ssbajio-gray-dark-1">Acabados: Pavonado, galvanizado, tropicalizado, cadminizado, geomet. Tornillería hexagonal, flange, tuercas, arandelas.</p>
                </article>
                <article>
                    <span class="bg-gradient-to-r from-ssbajio-red-2 to-ssbajio-orange-1 p-3 inline-block">
                        <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5752 1.64286C11.5752 0.734152 12.3141 0 13.2288 0H16.5359C17.4506 0 18.1895 0.734152 18.1895 1.64286V1.76094V6.87433C18.1895 7.16183 18.4221 7.39286 18.7115 7.39286C18.8975 7.39286 19.0732 7.29531 19.1662 7.13103L21.6466 2.82366C25.4395 4.68214 28.0646 8.54286 28.1111 13.0196V16.4286H1.65359V13.1429C1.65359 8.61473 4.28901 4.69754 8.11812 2.82366L10.5985 7.13103C10.6915 7.29531 10.8672 7.39286 11.0532 7.39286C11.3426 7.39286 11.5752 7.16183 11.5752 6.87433V1.76094V1.64286ZM0 18.9237C0 18.4513 0.382394 18.0714 0.857802 18.0714H28.9069C29.3823 18.0714 29.7647 18.4513 29.7647 18.9237C29.7647 19.165 29.6614 19.3908 29.465 19.5346C28.3436 20.3509 23.9875 23 14.8824 23C5.77725 23 1.42106 20.3509 0.299714 19.5346C0.10335 19.396 0 19.165 0 18.9237Z" fill="white"/>
                        </svg>
                    </span>
                    <h3 class="font-bold text-ssbajio-dark-1 mt-6 mb-1">Tornillería Estructural</h3>
                    <p class="text-ssbajio-gray-dark-1">Acabados: Gic, pavonado, galvanizado, tropicalizado, geomet.</p>
                    <p>Tornillería hexagonal, arandela plana F436, arandela de presión, tuerca hex. grado 2H.</p>
                </article>
                <article class="md:text-right">
                    <span class="bg-gradient-to-r from-ssbajio-red-2 to-ssbajio-orange-1 p-3 inline-block mr-auto">
                        <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.52534 0C0.681635 0 0 0.670313 0 1.5V12.75V15V18.75C0 19.9922 1.02484 21 2.28801 21H22.1174C23.3806 21 24.4054 19.9922 24.4054 18.75V12.75V5.63438C24.4054 4.78125 23.4807 4.24219 22.718 4.64531L15.2534 8.59688V5.63438C15.2534 4.78125 14.3286 4.24219 13.566 4.64531L6.10135 8.59688V1.5C6.10135 0.670313 5.41972 0 4.57601 0H1.52534Z" fill="white"/>
                        </svg>
                    </span>
                    <h3 class="font-bold text-ssbajio-dark-1 mt-6 mb-1">Tornillería Industrial</h3>
                    <p class="text-ssbajio-gray-dark-1">Acabado: Pavonado, galvanizado, tropicalizado.</p>
                    <p>Tornillería hexagonal, allen, estufa, tuercas, arandelas, opresores.</p>
                </article>
            </div>
        </div>
    </section>
    <!-- Fin de sectores donde se ofrece -->

    <!-- Seccion de productos variante 2-->
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
    <!-- Fin seccion de productos variante 2 -->

    <!-- Seccion de double info card -->
    <section class="bg-ssbajio-gray-light-3">
        <div class="container flex gap-5 flex-col md:flex-row">
            <article class="rounded-xl bg-ssbajio-gray-light-5 md:w-1/2 min-h-[250px] text-center px-5 flex flex-col justify-center items-center">
                <h4 class="font-bold text-lg text-ssbajio-dark-1">Ofrecemos soluciones a todas tus herramientas y equipo</h4>
                <p class="text-md text-ssbajio-gray-dark-1 mt-3">Trabajamos con las mejores marcas de productos, herramientas y equipo para el sector ferretero. </p>
            </article>
            <article class="rounded-xl bg-ssbajio-red-1 md:w-1/2 min-h-[250px] text-center px-5 flex flex-col justify-center items-center">
                <h4 class="font-bold text-lg text-ssbajio-dark-1">Distribuidores mayoristas de ferretería para el sector, alimenticio, automotriz, para construcción e industrial</h4>
            </article>
        </div>
    </section>
    <!-- Fin de double info card -->

    <!-- Seccion de caracteristicas -->
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
    <!-- Fin seccion caracteristicas -->

    <!-- Sección de soluciones integrales -->
    <?= $this->setVar('solutions', $solutions)->include('website/layouts/solutions') ?>
    <!-- Fin de la sección de soluciones integrales -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script type="text/javascript" src="<?= base_url('js/siema.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/website/home/index/solutions-carousel.js') ?>"></script>
<?= $this->endSection() ?>

