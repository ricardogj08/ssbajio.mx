<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de soluciones de ssbajio.
 */
class SolutionSeeder extends Seeder
{
    public function run()
    {
        $solutionModel = model('SolutionModel');

        $solutionModel->ignore()->insertBatch([
            [
                'alias'           => 'tornilleria',
                'slug'            => 'tornilleria',
                'cover'           => '1672164906_779914df33cff207a24d.webp',
                'thumbnail'       => '1672258215_fd09833539d7a029e866.jpg',
                'name'            => 'Tornillería Industrial',
                'excerpt'         => 'Gran variedad de tornillos, tuercas y rondanas.',
                'title'           => 'Venta y Fabricación de tornillería industrial en México',
                'metatitle'       => 'Venta y Fabricación de tornillería industrial en México',
                'metadescription' => 'Somos proveedores y distribuidores en soluciones de herramientas de sujeción. Mayoristas de tornillos, tuercas, rondanas y tornillería especializada.',
                'caption'         => null,
                'subtitle'        => 'Mayoristas de tornillos, tuercas, rondanas y tornillería especializada.',
                'description'     => 'Somos proveedores y distribuidores en soluciones de herramientas de sujeción, contamos con una amplia gama de tornillos y aplicaciones, si no encuentras un elemento a la medida, lo fabricamos para ti.',
            ],
            [
                'alias'           => 'herramientas',
                'slug'            => 'herramientas-industriales',
                'cover'           => '1672164643_268cae6061228e849c2a.webp',
                'thumbnail'       => '1672258117_bb40a22a522f8df4f846.jpg',
                'name'            => 'Herramientas eléctricas y manuales',
                'excerpt'         => 'Encuentra todo tipo de herramientas industriales de las mejores marcas.',
                'title'           => 'Proveedores de Herramientas Industriales',
                'metatitle'       => 'Proveedores de Herramientas Industriales | Soluciones de Sujeción',
                'metadescription' => 'Distribuidores mayoristas de herramientas manuales y eléctricas para el sector, alimenticio, automotriz, para construcción e industrial.',
                'caption'         => 'Venta de herramientas eléctricas y manuales',
                'subtitle'        => 'Distribuidores mayoristas de herramientas para el sector, alimenticio, automotriz, para construcción e industrial.',
                'description'     => 'Contamos con un gran stock de accesorios y materiales industriales de las mejoras marcas ofrecerte una solución integral para tu empresa.',
            ],
            [
                'alias'           => 'pinturas',
                'slug'            => 'pintura-automotriz',
                'cover'           => '1672164840_40cc6625756a60446461.webp',
                'thumbnail'       => '1672258300_5df4edcea856b2e5bf02.jpg',
                'name'            => 'Pintura Automotriz',
                'excerpt'         => 'Contamos con pinturas de esmalte y vinílica, línea Excelo de la marca Sherwin Williams.',
                'title'           => 'Pintura Sherwin Williams',
                'metatitle'       => '▷ Proveedores de Pintura Automotriz en México',
                'metadescription' => 'Somos proveedores autorizados de pintura Sherwin Williams, la cual brinda los mejores acabados para el segmento automotriz. ¡Contáctanos!',
                'caption'         => 'Distribuidores autorizados de pintura Sherwin Williams',
                'subtitle'        => 'Descubre nuestra gran variedad de productos para repintado automotriz.',
                'description'     => 'Trabajamos para proporcionar soluciones de recubrimientos avanzados y un servicio de calidad con productos de línea arquitectónica, línea para estructuras, pisos, sistema contra incendios y especializados para la industria alimenticia, farmacéutica, metalmecánica, automotriz e industrial en general.',
            ],
            [
                'alias'           => 'ferreteria',
                'slug'            => 'productos-ferreteria',
                'cover'           => '1672164436_cb17ac36410dca2d169c.webp',
                'thumbnail'       => '1672257921_5b820b6507562522f2ff.jpg',
                'name'            => 'Productos Ferretería',
                'excerpt'         => 'Ofrecemos equipo de trabajo especializado para las diferentes industrias.',
                'metatitle'       => 'Ferretería - Venta de Productos de Ferretería Industrial en México',
                'metadescription' => 'Distribuidores de productos de ferretería industrial. Soluciones de sujeción: tornillería industrial, herramientas industriales, pintura automotriz y más.',
                'title'           => 'Productos para ferretería por mayoreo',
                'caption'         => null,
                'subtitle'        => 'Gran variedad de accesorios especializados para las diferentes industrias.',
                'description'     => 'En SSB nos especializamos en proveer productos de ferretería para cubrir las necesidades de nuestros clientes, brindando equipos de calidad con las mejores marcas y con los mejores precios del mercado para tu empresa.',
            ],
            [
                'alias'           => 'contingencia',
                'slug'            => 'productos-contigencia',
                'cover'           => '1672164418_050dc22237fefb039e02.webp',
                'thumbnail'       => '1672257757_21e38f4e90dace156121.jpg',
                'name'            => 'Produtos para contingencia',
                'excerpt'         => 'Los mejores equipos para la prevención de COVID-19.',
                'title'           => 'Productos de contingencia COVID 19',
                'metatitle'       => '▷ Productos de contingencia ante COVID-19',
                'metadescription' => 'Conoce todos los productos que tenemos para responder ante la emergencia por COVID-19, y mantente protegido.',
                'caption'         => null,
                'subtitle'        => 'Protégete ante la emergencia sanitaria.',
                'description'     => 'Contamos con la mejor calidad de cubrebocas, gel antibacterial, tapete sanitizantes, guantes, caretas, termómetros y lentes de seguridad, para que estes seguro en todo momento.',
            ],
            [
                'alias'           => 'filtros',
                'slug'            => 'filtros-refacciones',
                'cover'           => '1672164451_408e2f8ef50379991ac0.webp',
                'thumbnail'       => '1672258026_84fe7f44ad070627662b.jpg',
                'name'            => 'Filtros y refacciones',
                'excerpt'         => 'Diferentes tipos de filtros: aire, aceite, cabina, combustible y más.',
                'title'           => 'Filtros y refacciones automotrices',
                'metatitle'       => '▷ Proveedor de filtros y refacciones automotrices en México',
                'metadescription' => 'Contamos con gran variedad de refacciones y filtros de la marca MANN FILTER para todo tipo de equipo, tanto pesado, como ligero. ¡Contáctanos!',
                'caption'         => null,
                'subtitle'        => 'Distribuidor oficial de filtros y refacciones automotrices para equipo pesado y ligero.',
                'description'     => 'En SSB somos distribuidores oficiales de MANN FILTER, contando con una amplia línea de productos tanto para equipo pesado, como para equipo ligero, así como filtros de Aire, Aceite, Cabina y Combustible. Todos los productos con los que contamos son fabricados de acuerdo con las últimas normas internacionales de fabricación y especificaciones de la industria.',
            ],
        ]);
    }
}
