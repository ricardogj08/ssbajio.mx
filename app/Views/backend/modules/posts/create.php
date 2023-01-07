<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/trix.css') ?>">

    <script src="<?= base_url('js/trix.js') ?>"></script>
    <script src="<?= base_url('js/backend/modules/posts/create/createAttachment.js') ?>" type="module" defer></script>

    <title>
        Blog | Registro
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-y-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Escribe un nuevo artículo
            </h1>

            <h2 class="text-sm">
                Publica o programa un nuevo artículo.
            </h2>

            <p class="text-error">
                <small>
                    <?= esc(session()->getFlashdata('error')) ?>
                </small>
            </p>
        </div>

        <label for="modal-action" class="btn gap-2">
            <i class="bi bi-arrow-left-circle text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de registro de artículos -->
    <?= form_open_multipart(url_to('backend.modules.posts.create')) ?>
        <input type="hidden" name="host" value="<?= url_to('backend.modules.posts.createAttachment') ?>">

        <div class="flex flex-col gap-y-2">
            <!-- Campo del título -->
            <div class="form-control">
                <label for="title" class="label">
                    <span class="label-text">
                        Título:
                    </span>
                </label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    required
                    maxlength="256"
                    placeholder="Escribe el título del artículo"
                    value="<?= set_value('title') ?>"
                    class="input input-bordered input-primary"
                    autofocus
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('title')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del título -->

            <!-- Campo de la portada -->
            <div class="form-control">
                <label for="cover" class="label">
                    <span class="label-text">
                        Portada:
                    </span>
                </label>
                <input
                    type="file"
                    name="cover"
                    id="cover"
                    required
                    size="2097152"
                    accept="image/*"
                    class="file-input file-input-bordered file-input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('cover')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la portada -->

            <!-- Campo del resumen -->
            <div class="form-control">
                <label for="excerpt" class="label">
                    <span class="label-text">
                        Sinopsis:
                    </span>
                </label>
                <textarea
                    name="excerpt"
                    id="excerpt"
                    required
                    maxlength="512"
                    rows="4"
                    cols="50"
                    placeholder="Escribe el resumen del artículo..."
                    class="textarea textarea-bordered textarea-primary text-justify resize-none h-32"
                ><?= set_value('excerpt') ?></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('excerpt')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del resumen -->

            <!-- Campo de la fecha y hora de publicación -->
            <div class="form-control">
                <label for="started_at" class="label">
                    <span class="label-text">
                        Fecha y hora de publicación (opcional):
                    </span>
                </label>
                <input
                    type="datetime-local"
                    name="started_at"
                    id="started_at"
                    min="<?= esc(CodeIgniter\I18n\Time::now()->toLocalizedString("YYYY-MM-dd'T'HH:mm")) ?>"
                    value="<?= set_value('started_at') ?>"
                    class="input input-bordered input-secondary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('started_at')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la fecha y hora de publicación -->

            <!-- Campos del contenido -->
            <div class="form-control">
                <label for="body" class="label">
                    <span class="label-text">
                       Contenido:
                    </span>
                </label>
                <input
                    type="hidden"
                    name="body"
                    id="body"
                    value="<?= set_value('body') ?>"
                >
                <trix-editor
                    input="body"
                    placeholder="Escribe el contenido del artículo..."
                    aria-label="Editor de texto"
                    class="trix-content"
                ></trix-editor>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('body')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin de los campos del contenido -->

            <div class="flex flex-col lg:flex-row lg:justify-end gap-4">
                <!-- Botón de submit -->
                <input type="submit" value="Guardar" class="btn btn-primary">

                <!-- Botón que abre el modal de acción -->
                <label for="modal-action" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro de artículos -->

    <?= $this->setData([
        'id'      => 'modal-action',
        'method'  => 'backend.modules.posts.index',
        'message' => '¿Deseas cancelar la publicación del nuevo artículo?',
    ])->include('backend/layouts/modal-action') ?>
<?= $this->endSection() ?>
