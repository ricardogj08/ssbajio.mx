<!-- Formulario de búsqueda -->
<form action="<?= url_to($method) ?>" method="get">
	<div class="form-control">
		<div class="input-group">
			<!-- Campo de búsqueda -->
			<input type="text" name="q" placeholder="Buscar..." class="input input-bordered w-full">

			<!-- Botón de submit -->
			<button type="submit" class="btn btn-primary gap-2">
				<i class="bi bi-search text-xl"></i>
				Buscar
			</button>
		</div>
	</div>
</form>
<!-- Fin del formulario de búsqueda -->
