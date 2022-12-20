<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;

class SendNewsletter extends BaseCommand
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
    protected $name = 'send:newsletter';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Envía por email los últimos artículos publicados.';

    /**
     * Actually execute a command.
     */
    public function run(array $params)
    {
        helper('text');
        helper('setting');

        $postModel = model('PostModel');

        // Consulta los últimos artículos autorizados.
        $posts = $postModel->where('active', true)
            ->orderBy('started_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->findAll(8);

        $email = service('email');

        $newsletterModel = model('NewsletterModel');

        // Consulta todos los usuarios registrados al newsletter.
        $users = $newsletterModel->findAll();

        // Define el asunto del mensaje.
        $email->setFrom(config('Email')->SMTPUser, setting()->get('App.company'));

        // Define el remitente del email.
        $email->setSubject('Newsletter');

        foreach ($users as $user) {
            // Genera una llave aleatoria de cancelación de suscripción.
            $key = random_string('crypto', 32);

            // Define el destinatario del email.
            $email->setTo($user->email);

            // Define el cuerpo del mensaje.
            $email->setMessage(view('backend/emails/newsletter', [
                'posts' => $posts,
                'id'    => $user->id,
                'key'   => $key,
            ]));

            // Actualiza el hash de cancelación de suscripción.
            $newsletterModel->update($user->id, [
                'hash' => hash('sha512', $key),
            ]);

            // Envía el mensaje de email.
            $email->send(false);
        }
    }
}
