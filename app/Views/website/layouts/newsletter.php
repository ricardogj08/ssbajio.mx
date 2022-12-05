<?php helper('form') ?>

<!-- Newsletter -->
<div class="text-17 <?= empty($red) ? 'text-ssbajio-dark-1' : 'text-ssbajio-red-1' ?> font-semibold mb-5">
    Suscríbete a nuestro newsletter
</div>

<?= form_open(url_to('website.newsletter.create')) ?>
    <div class="flex flex-col gap-y-4">
        <input
            type="email"
            name="email"
            placeholder="Email"
            class="norm-form-input bg-white px-6 py-3.5 rounded lg:rounded-3xl border border-ssbajio-blue-1 hover:ring-1 focus:ring-1 ring-ssbajio-blue-1 text-15 text-ssbajio-gray-dark-3 placeholder:text-ssbajio-gray-dark-3"
        >

        <input
            type="submit"
            value="Suscribirme"
            class="bg-ssbajio-red-1 ssbajio-btn w-full hover:bg-ssbajio-red-2"
        >
    </div>
<?= form_close() ?>
<!-- Fin del newsletter -->
