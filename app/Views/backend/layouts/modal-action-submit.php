<!-- Modal de acciones con submit -->
<input type="checkbox" id="<?= esc($id) ?>" class="modal-toggle">

<label for="<?= esc($id) ?>" class="modal modal-bottom sm:modal-middle cursor-pointer">
	<div class="modal-box relative">
		<label for="<?= esc($id) ?>" class="btn btn-sm btn-circle absolute right-2 top-2">
			✕
		</label>

		<h3 class="font-bold text-lg">
			¡Confirma tu acción!
		</h3>

		<p class="py-4">
			<?= esc($message) ?>
		</p>

		<div class="modal-action">
			<input type="submit" value="Confirmar" class="btn btn-primary">

			<label for="<?= esc($id) ?>" class="btn btn-secondary">
				Cancelar
			</label>
		</div>
	</div>
</label>
<!-- Fin del modal de acciones con submit -->
