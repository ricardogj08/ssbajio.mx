<!-- Botón de WhatsApp -->
<aside class="fixed right-4 bottom-4 lg:right-8 lg:bottom-16 animate-bounce">
    <a
        target="_blank"
        aria-label="Chat de WhatsApp"
        href="https://wa.me/<?= esc(service('settings')->get('App.whatsapp'), 'url') ?>"
    >
        <i class="bi bi-whatsapp text-white text-4xl flex items-center justify-center bg-teal-900 border-4 border-green-400 rounded-full h-18 w-18 transition-colors duration-500 hover:text-emerald-400"></i>
    </a>
</aside>
<!-- Fin del botón de WhatsApp -->
