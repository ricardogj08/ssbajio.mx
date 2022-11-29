<?php helper('form') ?>

<!-- Newsletter -->
<h3 class="text-17 text-dark-1 font-semibold mb-5">
    Suscríbete a nuestro newsletter
</h3>

<?= form_open(url_to('website.newsletter.create')) ?>
    <input
        type="email"
        name="email"
        placeholder="Email"
        class="norm-form-input mb-4 bg-white px-6 py-3.5 rounded lg:rounded-3xl border border-ssbajio-blue-1 hover:ring-1 focus:ring-1 ring-ssbajio-blue-1 text-15 text-ssbajio-gray-dark-3 placeholder:text-ssbajio-gray-dark-3"
    >

    <input
        type="submit"
        value="Suscribirme"
        class="bg-ssbajio-red-1 ssbajio-btn w-full hover:bg-ssbajio-red-2"
    >
<?= form_close() ?>
<!-- Fin del newsletter -->
