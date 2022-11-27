<!-- Formulario de búsqueda -->
<form action="<?= url_to($method) ?>" method="get">
	<div class="form-control">
		<div class="input-group">
			<input type="text" name="q" placeholder="Buscar..." class="input input-bordered w-full">
			<button type="submit" class="btn btn-primary gap-2">
				<i class="bi bi-search text-xl"></i>
				Buscar
			</button>
		</div>
	</div>
</form>
<!-- Fin del formulario de búsqueda -->
