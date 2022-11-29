<?php helper('form') ?>

<?= $this->extend('templates/website/default') ?>

<?= $this->section('content') ?>
    <title>
        Contacto
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Sección de contacto -->
    <div
        style="background-image: url('<?= site_url('images/website/prospects/new/hero.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <!-- Filtro de opacidad -->
        <div class="backdrop-brightness-20">
            <?= $this->include('website/layouts/header') ?>
            <div class="container relative">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-7.5 items-baseline pt-13 pb-13 lg:pb-0 text-white">
                    <div>
                        <h1 class="text-4xl lg:text-6xl font-title uppercase mb-6">
                            Contacto
                        </h1>
                        <h2 class="lg:text-lg font-semibold whitespace-pre-line">Ponte en contacto con nosotros.
                            ¡Será un placer ser parte de tus proyectos!
                        </h2>
                    </div>

                    <!-- Tarjeta de contacto -->
                    <div class="bg-gradient-to-br from-ssbajio-red-2 via-ssbajio-red-1 to-ssbajio-orange-1 px-6 lg:px-24 pt-6 lg:pt-24 pb-14 lg:pb-30 rounded-2xl flex flex-col gap-y-7 lg:gap-y-14 font-semibold lg:-mb-16">
                        <div class="flex items-center gap-x-5 lg:gap-x-10">
                            <i class="bi bi-geo-alt text-2xl lg:text-28"></i>
                            <h3 class="lg:whitespace-pre-line">Prol. Zaragoza 99 Int. 43. Col.
                                Jardines de la Hacienda, Querétaro,
                                Qro. CP. 7180
                            </h3>
                        </div>
                        <div class="flex items-center gap-x-5 lg:gap-x-10">
                            <i class="bi bi-telephone text-2xl lg:text-28"></i>
                            <h3 class="lg:text-22 [word-spacing:0.5rem]">
                                442 215 2730
                            </h3>
                        </div>
                        <div class="flex items-center gap-x-5 lg:gap-x-10">
                            <i class="bi bi-clock text-2xl lg:text-28"></i>
                            <h3 class="whitespace-pre-line">Lunes a Viernes
                                8:30 am · 6:30 pm
                            </h3>
                        </div>
                    </div>
                    <!-- Fin de la tarjeta de contacto -->
                </div>

                <div class="hidden lg:flex justify-end absolute bottom-0 right-0">
                    <img
                        src="<?= site_url('images/website/prospects/new/cuadrado-circulos-white.webp') ?>"
                        alt="Cuadrado de circulos blancos"
                        class="w-48 h-auto"
                    >
                </div>
            </div>
        </div>
        <!-- Fin del filtro de opacidad -->
    </div>
    <!-- Fin de la sección de contacto -->

    <!-- Sección del formulario -->
    <div class="bg-ssbajio-gray-light-3">
        <div class="container">
            <div class="py-10 lg:py-40">
                <h2 class="font-title text-35 text-ssbajio-dark-1 uppercase">
                    Escríbenos
                </h2>

                <!-- Formulario de contacto -->
                <?= form_open(url_to('website.prospects.create')) ?>
                    <div class="flex flex-col lg:flex-row lg:gap-7.5 pt-5 lg:pt-10 pb-7 lg:pb-14">
                        <div class="flex flex-col gap-y-3 w-full lg:w-1/3">
                            <!-- Campo del nombre completo -->
                            <input
                                type="text"
                                name="name"
                                placeholder="Nombre y apellido"
                                class="norm-form-input prospects-form-field prospects-form-input"
                            >
                            <!-- Fin del campo del nombre completo -->

                            <!-- Campo del número de teléfono -->
                            <input
                                type="tel"
                                name="phone"
                                placeholder="Teléfono"
                                class="norm-form-input prospects-form-field prospects-form-input"
                            >
                            <!-- Fin del campo del número de teléfono -->

                            <!-- Campo del email -->
                            <input
                                type="email"
                                name="email"
                                placeholder="Email"
                                class="norm-form-input prospects-form-field prospects-form-input"
                            >
                            <!-- Fin del campo del email -->

                            <!-- Campo de la empresa -->
                            <input
                                type="text"
                                name="company"
                                placeholder="Empresa"
                                class="norm-form-input prospects-form-field prospects-form-input"
                            >
                            <!-- Fin del campo de la empresa -->

                            <!-- Campo del interés -->
                            <div class="flex items-center prospects-form-field">
                                <select name="" class="norm-form-input prospects-form-input">
                                    <option selected>
                                        Interés en:
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                </select>
                                <i class="bi bi-chevron-down text-ssbajio-dark-1"></i>
                            </div>
                            <!-- Fin del campo del interés -->

                            <!-- Campo de cómo supiste de nosotros -->
                            <div class="flex items-center prospects-form-field">
                                <select name="" class="norm-form-input prospects-form-input">
                                    <option selected>
                                        ¿Cómo supiste de nosotros?
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                    <option>
                                        Genotipo
                                    </option>
                                </select>
                                <i class="bi bi-chevron-down text-ssbajio-dark-1"></i>
                            </div>
                            <!-- Fin del campo de cómo supiste de nosotros -->
                        </div>

                        <!-- Campo del mensaje -->
                        <div class="w-full lg:w-2/3 flex flex-col">
                            <label for="message" class="text-sm text-ssbajio-gray-dark-1 font-light py-5">
                                Mensaje
                            </label>
                            <textarea
                                id="message"
                                rows="4"
                                cols="50"
                                name="message"
                                class="norm-form-input prospects-form-field prospects-form-input prospects-form-textarea"></textarea>
                        </div>
                        <!-- Fin del campo del mensaje -->
                    </div>

                    <div class="text-center">
                        <!-- Botón de submit -->
                        <input
                            type="submit"
                            value="Enviar"
                            class="bg-ssbajio-red-1 ssbajio-btn px-6 tracking-wide w-full lg:w-auto hover:bg-ssbajio-red-2"
                        >
                    </div>
                <?= form_close() ?>
                <!-- Fin del formulario de contacto -->
            </div>
        </div>
    </div>
    <!-- Fin de la sección del formulario -->

    <?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
