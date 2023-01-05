<!-- Botón de WhatsApp -->
<div class="fixed z-20 right-4 bottom-4 lg:right-8 lg:bottom-16 animate-bounce">
    <a
        target="_blank"
        aria-label="Chat de WhatsApp"
        href="https://wa.me/<?= esc(setting()->get('App.apps', 'whatsapp')) ?>"
        rel="nofollow"
        class="bg-slate-800 text-white hover:text-emerald-400 border-4 border-green-400 rounded-full flex items-center justify-center w-18 h-18 transition-colors duration-500"
    >
        <i class="bi bi-whatsapp text-4xl"></i>
    </a>
</div>
<!-- Fin del botón de WhatsApp -->
