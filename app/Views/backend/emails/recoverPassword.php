<?= $this->extend('templates/backend/email') ?>

<?= $this->section('content') ?>
	<title>
		Recuperación de contraseña
	</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<h1 class="text-2xl font-bold mb-4">
		Recupera tu contraseña
	</h1>

	<p class="text-justify">
		¡Hola <?= esc(word_limiter($user, 1, '')) ?>!,
		presiona el siguiente botón para completar tu solicitud de recuperación de contraseña:
	</p>

	<p class="text-center pt-4 pb-2">
		<a
			href="<?= url_to('backend.resetPassword', $id, $key) ?>"
			class="btn btn-primary btn-block sm:btn-wide"
		>
			Recuperar contraseña
		</a>
	</p>

	<p class="text-center">
		<small>
			Por favor ignora este mensaje si no realizaste esta solicitud.
		</small>
	</p>
<?= $this->endSection() ?>
