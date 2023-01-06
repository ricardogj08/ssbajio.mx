<?= $this->extend('templates/website/default') ?>

<?= $this->section('head') ?>
    <title>
        ▷ <?= esc(setting()->get('App.general', 'company')) ?> | Contáctanos
    </title>

    <meta
        name="description"
        content="Nuestro equipo es especialista en el sector de la Tornillería y Herramientas de Fijación. Estamos capacitados para atenderte en todo momento."
    >

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="<?= base_url('js/website/home/index/observe.js') ?>" type="module" defer></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/layouts/header') ?>

    <!-- Sección de contacto -->
    <div
        style="background-image: url('<?= base_url('images/website/prospects/new/hero.webp') ?>');"
        class="bg-cover bg-center bg-no-repeat"
    >
        <!-- Filtro de opacidad -->
        <div class="backdrop-brightness-20">
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
                            <h3 class="tracking-wide">
                                <?= esc(setting()->get('App.general', 'address')) ?>
                            </h3>
                        </div>
                        <div class="flex items-center gap-x-5 lg:gap-x-10">
                            <i class="bi bi-telephone text-2xl lg:text-28"></i>
                            <h3 class="lg:text-22 [word-spacing:0.5rem]">
                                <?= esc(setting()->get('App.general', 'phone')) ?>
                            </h3>
                        </div>
                        <div class="flex items-center gap-x-5 lg:gap-x-10">
                            <i class="bi bi-clock text-2xl lg:text-28"></i>
                            <h3 class="w-36">
                                <?= esc(setting()->get('App.general', 'schedules')) ?>
                            </h3>
                        </div>
                    </div>
                    <!-- Fin de la tarjeta de contacto -->
                </div>

                <div class="hidden lg:flex justify-end absolute bottom-0 right-0 w-full">
                    <img
                        src="<?= base_url('images/website/prospects/new/cuadrado-circulos-white.webp') ?>"
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

                <p class="text-red-600">
                    <small>
                        <?= esc(session()->getFlashdata('error')) ?>
                    </small>
                </p>

                <!-- Formulario de contacto -->
                <?= form_open(url_to('website.prospects.create')) ?>
                    <div class="flex flex-col lg:flex-row lg:gap-7.5 pt-5 lg:pt-10 pb-7 lg:pb-14">
                        <div class="flex flex-col gap-y-3 w-full lg:w-1/3">
                            <!-- Campo del nombre completo -->
                            <div>
                                <input
                                    type="text"
                                    name="name"
                                    required
                                    maxlength="64"
                                    placeholder="Nombre y apellido"
                                    value="<?= esc(set_value('name')) ?>"
                                    class="norm-form-input prospects-form-field prospects-form-input"
                                >
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('name')) ?>
                                    </small>
                                </p>
                            </div>
                            <!-- Fin del campo del nombre completo -->

                            <!-- Campo del número de teléfono -->
                            <div>
                                <input
                                    type="tel"
                                    name="phone"
                                    required
                                    maxlength="15"
                                    placeholder="Teléfono"
                                    value="<?= esc(set_value('phone')) ?>"
                                    class="norm-form-input prospects-form-field prospects-form-input"
                                >
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('phone')) ?>
                                    </small>
                                </p>
                            </div>
                            <!-- Fin del campo del número de teléfono -->

                            <!-- Campo del email -->
                            <div>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    maxlength="256"
                                    placeholder="Email"
                                    value="<?= esc(set_value('email')) ?>"
                                    class="norm-form-input prospects-form-field prospects-form-input"
                                >
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('email')) ?>
                                    </small>
                                </p>
                            </div>
                            <!-- Fin del campo del email -->

                            <!-- Campo de la empresa -->
                            <div>
                                <input
                                    type="text"
                                    name="company"
                                    maxlength="64"
                                    required
                                    placeholder="Empresa"
                                    value="<?= esc(set_value('company')) ?>"
                                    class="norm-form-input prospects-form-field prospects-form-input"
                                >
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('name')) ?>
                                    </small>
                                </p>
                            </div>
                            <!-- Fin del campo de la empresa -->

                            <!-- Campo del interés -->
                            <div>
                                <div class="flex items-center prospects-form-field">
                                    <select name="solution" required class="norm-form-input prospects-form-input">
                                        <option value="" disabled selected>
                                            Interés en:
                                        </option>
                                        <?php foreach ($solutions as $solution): ?>
                                            <option
                                                value="<?= esc($solution->id) ?>"
                                                <?= set_select('solution', $solution->id) ?>
                                            >
                                                <?= esc($solution->name) ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <i class="bi bi-chevron-down text-ssbajio-dark-1"></i>
                                </div>
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('solution')) ?>
                                    </small>
                                </p>
                            </div>
                            <!-- Fin del campo del interés -->

                            <!-- Campo de cómo supiste de nosotros -->
                            <div>
                                <div class="flex items-center prospects-form-field">
                                    <select name="origin" required class="norm-form-input prospects-form-input">
                                        <option value="" disabled selected>
                                            ¿Cómo supiste de nosotros?
                                        </option>
                                        <?php foreach ($origins as $origin): ?>
                                            <option
                                                value="<?= esc($origin->id) ?>"
                                                <?= set_select('origin', $origin->id) ?>
                                            >
                                                <?= esc($origin->description) ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                    <i class="bi bi-chevron-down text-ssbajio-dark-1"></i>
                                </div>
                                <p class="text-red-600">
                                    <small>
                                        <?= esc($validation->getError('origin')) ?>
                                    </small>
                                </p>
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
                                name="message"
                                maxlength="4096"
                                rows="4"
                                cols="50"
                                class="norm-form-input prospects-form-field prospects-form-input prospects-form-textarea"><?= esc(set_value('message')) ?></textarea>
                            <p class="text-red-600">
                                <small>
                                    <?= esc($validation->getError('message')) ?>
                                </small>
                            </p>
                        </div>
                        <!-- Fin del campo del mensaje -->
                    </div>

                    <div class="flex flex-col items-center gap-y-6">
                        <!-- reCAPTCHA v2 -->
                        <div
                            class="g-recaptcha"
                            data-sitekey="<?= esc(setting()->get('App.apps', 'google:Recaptcha') ?? 'your_site_key') ?>"
                        >
                        </div>

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
