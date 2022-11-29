<!-- Listado de errores -->
<ul class="text-error">
    <?php foreach ($errors as $error): ?>
        <li>
            <small><?= esc($error) ?></small>
        </li>
    <?php endforeach ?>
</ul>
<!-- Fin del listado de errores -->
