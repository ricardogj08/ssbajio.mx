<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Blog | Registro de artículos
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-2">
        Escribe un nuevo artículo
    </h1>

    <h2 class="text-sm">
        Publica o programa un nuevo artículo.
    </h2>

    <p class="text-error mb-4">
        <small>
            <?= session()->getFlashdata('error') ?>
        </small>
    </p>

    <!-- Formulario de registro de artículos -->
    <?= form_open_multipart(url_to('backend.modules.posts.new')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo de título -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Título:
                    </span>
                </label>
                <input
                    type="text"
                    name="title"
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
            <!-- Fin del campo de título -->

            <!-- Campo de la portada -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Portada:
                    </span>
                </label>
                <input
                    type="file"
                    name="cover"
                    size="2048"
                    accept="image/*"
                    required
                    class="file-input file-input-bordered file-input-primary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('cover')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la portada -->

            <!-- Campo de resumen -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Sinopsis:
                    </span>
                </label>
                <textarea
                    name="excerpt"
                    required
                    maxlength="512"
                    placeholder="Escribe el resumen del artículo"
                    class="textarea textarea-bordered textarea-primary resize-none h-32"
                ><?= set_value('excerpt') ?></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('excerpt')) ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de resumen -->

            <!-- Campo de fecha y hora de publicación -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                        Fecha y hora de publicación (opcional):
                    </span>
                </label>
                <input
                    type="datetime-local"
                    name="started_at"
                    value="<?= set_value('started_at') ?>"
                    class="input input-bordered input-secondary"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('started_at')) ?>
                    </span>
                </label>
            </div>
            <!-- Campo de fecha y hora de publicación -->

            <!-- Campos de contenido -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">
                       Contenido:
                    </span>
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= esc($validation->getError('body')) ?>
                    </span>
                </label>
            </div>
            <!-- Campos de contenido -->

            <div class="flex flex-col lg:flex-row lg:justify-end gap-4">
                <!-- Botón de submit -->
                <input type="submit" value="Guardar" class="btn btn-primary">

                <!-- Botón que abre el modal de acción -->
                <label for="modal" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro de artículos -->
<?= $this->endSection() ?>
