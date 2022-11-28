<!-- Listado de errores -->
<p>
	<small>
		<ul class="text-error">
			<?php foreach ($errors as $error): ?>
				<li><?= esc($error) ?></li>
			<?php endforeach ?>
		</ul>
	</small>
</p>
<!-- Fin del listado de errores -->
