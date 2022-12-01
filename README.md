# ssbajio.mx

Soluciones de Sujeción del Bajío

* [Notion](https://ricardogj08.notion.site/ssbajio-mx-Soluciones-de-Sujeci-n-del-Baj-o-4b0be272de7840a6870f672d3f6698d2)

## Dependencias

* [PHP >= 7.4](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [MariaDB >= 5.1](https://mariadb.org/)

## Instalación

Clona el repositorio del proyecto:

	git clone https://ricardogj08@bitbucket.org/genodev/ssbajio.mx.git
	cd ssbajio.mx

Instala las dependencias del proyecto:

* Desarrollo:

`composer install`

* Producción:

`composer install --no-dev -o`

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

Inicia las tablas de la base de datos:

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

## Referencia

* [CodeIgniter4 User Guide](https://codeigniter4.github.io/userguide/)
* [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations)
* [CodeIgniter 4 Settings](https://github.com/codeigniter4/settings)
* [CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard)
* [Tailwind CSS documentation](https://tailwindcss.com/docs/installation)
* [Bootstrap Icons](https://icons.getbootstrap.com/)
* [daisyUI](https://daisyui.com/)
* [Flowbite](https://flowbite.com/)
* [JavaScript Standard Style](https://standardjs.com/)

## Licencia

&copy; 2022 - [Genotipo](https://www.genotipo.com/)
