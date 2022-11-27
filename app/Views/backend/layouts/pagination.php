<!-- Número de páginas a mostrar antes y después de la página actual -->
<?php $pager->setSurroundCount(2) ?>

<div class="btn-group">
	<?php if ($pager->hasPrevious()): ?>
		<!-- Botón de la primera página  -->
		<a href="<?= $pager->getFirst() ?>" class="btn">
			<i class="bi bi-chevron-bar-left text-xl"></i>
		</a>

		<!-- Botón de retroceso -->
		<a href="<?= $pager->getPreviousPage() ?>" class="btn">
			<i class="bi bi-chevron-left text-xl"></i>
		</a>
	<?php endif ?>

	<!-- Páginas -->
	<?php foreach ($pager->links() as $link): ?>
		<a href="<?= $link['uri'] ?>" class="btn<?= $link['active'] ? ' btn-active' : '' ?>">
			<?= $link['title'] ?>
		</a>
	<?php endforeach ?>

	<?php if ($pager->hasNext()): ?>
		<!-- Botón de siguiente -->
		<a href="<?= $pager->getNextPage() ?>" class="btn">
			<i class="bi bi-chevron-right text-xl"></i>
		</a>

		<!-- Botón de la última página  -->
		<a href="<?= $pager->getLast() ?>" class="btn">
			<i class="bi bi-chevron-bar-right text-xl"></i>
		</a>
	<?php endif ?>
</div>
