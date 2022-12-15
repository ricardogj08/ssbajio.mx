<!-- Número de páginas a mostrar antes y después de la página actual -->
<?php $pager->setSurroundCount(3) ?>

<!-- Paginación del blog -->
<?php foreach ($pager->links() as $link): ?>
    <a
        href="<?= $link['uri'] ?>"
        class="<?= $link['active']
            ? 'bg-ssbajio-red-1 text-white rounded-full w-7 h-7 flex justify-center items-center hover:bg-ssbajio-red-2'
            : 'hover:text-ssbajio-gray-light-1' ?>"
    >
        <?= $link['title'] ?>
    </a>
<?php endforeach ?>
<!-- Fin de la paginación del blog -->
