<!-- Newsletter -->
<div class="text-17 <?= empty($red) ? 'text-ssbajio-dark-1' : 'text-ssbajio-red-1' ?> font-semibold">
    Suscríbete a nuestro newsletter
</div>

<p class="text-green-500">
    <small>
        <?= esc(session()->getFlashdata('success')) ?>
    </small>
</p>

<p class="text-red-600 mb-5">
    <small>
        <?= esc(session()->getFlashdata('error')) ?>
    </small>
</p>

<?= form_open(url_to('website.newsletter.create')) ?>
    <div class="flex flex-col gap-y-4">
        <!-- Campo del email -->
        <input
            type="email"
            name="email"
            required
            maxlength="256"
            placeholder="Email"
            value="<?= esc(set_value('email')) ?>"
            class="norm-form-input bg-white px-6 py-3.5 rounded lg:rounded-3xl border border-ssbajio-blue-1 hover:ring-1 focus:ring-1 ring-ssbajio-blue-1 text-15 text-ssbajio-gray-dark-3 placeholder:text-ssbajio-gray-dark-3"
        >
        <!-- Fin del campo del email -->

        <!-- Botón de submit -->
        <input
            type="submit"
            value="Suscribirme"
            class="bg-ssbajio-red-1 ssbajio-btn w-full hover:bg-ssbajio-red-2"
        >
    </div>
<?= form_close() ?>
<!-- Fin del newsletter -->
