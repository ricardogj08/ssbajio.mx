# ssbajio.mx

Soluciones de Sujeción del Bajío

* [Notion](https://ricardogj08.notion.site/ssbajio-mx-Soluciones-de-Sujeci-n-del-Baj-o-4b0be272de7840a6870f672d3f6698d2)

## Dependencias

* [PHP >= 7.4](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [MariaDB >= 5.1](https://mariadb.org/)
* [npm](https://www.npmjs.com/)

## Instalación

Clona el repositorio del proyecto:

	git clone https://ricardogj08@bitbucket.org/genodev/ssbajio.mx.git
	cd ssbajio.mx

Instala las dependencias del proyecto:

**Desarrollo**:

	composer install
	npm install

**Producción**:

	composer install --no-dev -o

## Configuración 

Copia el archivo de configuración del proyecto `env` a `.env`:

	cp env .env

## Base de datos

Crea la base de datos de la aplicación:

	CREATE DATABASE IF NOT EXISTS ssbajiomx
	    CHARACTER SET = 'utf8mb4'
	    COLLATE = 'utf8mb4_spanish_ci';


Construye todas tablas de la base de datos:

	php spark migrate --all

Inicializa las tablas de la base de datos:

	php spark db:seed MainSeeder

## Ejecución

	php spark serve

* <http://localhost:8080/>

## Comandos

Estandariza la guía de estilo de todo el código PHP:

	composer run prettier

Estandariza la guía de estilo de todo el código JavaScript:

	npx standard

Compila Tailwind CSS para el sitio web:

	npm run tailwindcss

Compila Tailwind CSS para el backend:

	npm run tailwindcss-backend

Comprueba y publica artículos programados:

	php spark publish:posts

Envía por email los últimos artículos publicados:

	php spark send:newsletter

## Referencias

* [CodeIgniter4 User Guide](https://codeigniter4.github.io/userguide/)
* [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations)
* [CodeIgniter 4 Settings](https://github.com/codeigniter4/settings)
* [CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard)
* [Tailwind CSS documentation](https://tailwindcss.com/docs/installation)
* [Bootstrap Icons](https://icons.getbootstrap.com/)
* [daisyUI](https://daisyui.com/)
* [Flowbite](https://flowbite.com/)
* [JavaScript Standard Style](https://standardjs.com/)
* [Google Tag Manager - Guía de inicio rápido](https://developers.google.com/tag-manager/quickstart?hl=es)
* [Configurar e instalar Tag Manager](https://support.google.com/tagmanager/answer/6103696?hl=es)
* [Servicio de ayuda de WhatsApp - Cómo usar la función de clic para chatear](https://faq.whatsapp.com/5913398998672934/?helpref=uf_share)
* [Google reCAPTCHA v2](https://developers.google.com/recaptcha/docs/display)
* [Google reCAPTCHA - Registra un sitio nuevo](https://www.google.com/recaptcha/admin/create)
* [Google reCAPTCHA - Verifying the user's response](https://developers.google.com/recaptcha/docs/verify)
* [Tinify - API Reference](https://tinypng.com/developers/reference/php)
* [Clippy - CSS clip-path maker](https://bennettfeely.com/clippy/)

## Licencia

&copy; 2022 - [Genotipo](https://www.genotipo.com/)
