<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\I18n\Time;

class PublishPosts extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Genotipo';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'publish:posts';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Comprueba y publica artículos programados.';

    /**
     * Actually execute a command.
     */
    public function run(array $params)
    {
        helper('text');

        $postModel = model('PostModel');

        /**
         * Consulta todos los artículos que no han sido autorizados
         * y con fecha de fecha de publicación.
         */
        $posts = $postModel->where('active', false)
            ->where('started_at !=', null)
            ->orderBy('started_at', 'desc')
            ->findAll();

        $thead = ['id', 'title', 'active', 'started_at', 'created_at', 'updated_at'];
        $tbody = [];

        foreach ($posts as $post) {
            // Valida la fecha de publicación.
            if (isset($post->started_at) && Time::now()->isAfter(Time::parse($post->started_at))) {
                // Autoriza el artículo.
                $postModel->update($post->id, [
                    'active' => true,
                ]);
            }

            // Consulta los datos actualizados del artículo.
            $article = $postModel->find($post->id);

            $tbody[] = [
                $article->id,
                excerpt($article->title, false, 64),
                $article->active,
                $article->started_at,
                $article->created_at,
                $article->updated_at,
            ];
        }

        CLI::write('Artículos publicados:', 'black', 'yellow');
        CLI::newLine();
        CLI::table($tbody, $thead);
    }
}
