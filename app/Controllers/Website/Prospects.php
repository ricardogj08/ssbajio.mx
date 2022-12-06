<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Prospects extends BaseController
{
    /**
     * Renderiza la vista del formulario de contacto.
     */
    public function new()
    {
        $originModel = model('OriginModel');

        // Consulta todos los orígenes de prospectos.
        $origins = $originModel->orderBy('id', 'asc')->findAll();

        $solutionModel = model('SolutionModel');

        // Consulta todos las soluciones de ssbajio.
        $solutions = $solutionModel->orderBy('description', 'asc')->findAll();

        return view('website/prospects/new', [
            'validation' => service('validation'),
            'solutions'  => $solutions,
            'origins'    => $origins,
        ]);
    }

    /**
     * Registra un nuevo prospecto y
     * renderiza la página de agradecimiento.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if ($this->validate([
            'name'     => 'required|max_length[64]',
            'phone'    => 'required|max_length[15]',
            'email'    => 'required|max_length[256]|valid_email',
            'company'  => 'required|max_length[64]',
            'origin'   => 'required|is_natural_no_zero|is_not_unique[origins.id]',
            'solution' => 'required|is_natural_no_zero|is_not_unique[solutions.id]',
            'message'  => 'if_exist|max_length[4096]',
        ])) {
            $prospectModel = model('ProspectModel');

            $message = trimAll($this->request->getPost('message'));

            if ($message === '') {
                $message = null;
            }

            $id = $prospectModel->insert([
                'name'        => trimAll($this->request->getPost('name')),
                'phone'       => stripAllSpaces($this->request->getPost('phone')),
                'email'       => lowerCase(trim($this->request->getPost('email'))),
                'company'     => trimAll($this->request->getPost('company')),
                'origin_id'   => $this->request->getPost('origin'),
                'solution_id' => $this->request->getPost('solution'),
                'message'     => $message,
            ]);

            // Consulta los datos del prospecto.
            $prospect = $prospectModel->info()->find($id);

            $email = service('email');

            // Define el remitente y el destinatario del email.
            $email->setFrom(config('Email')->SMTPUser, setting()->get('App.siteName'));
            $email->setTo(lowerCase(trim(config('Email')->SMTPUser)));

            // Define el asunto y el cuerpo del mensaje.
            $email->setSubject('Prospecto');
            $email->setMessage(view('backend/emails/prospect', ['prospect' => $prospect]));

            // Envía el mensaje del email.
            if (! $email->send()) {
                // Elimina el registro del prospecto si falla el envío.
                $prospectModel->delete($id);

                return redirect()
                    ->route('website.prospects.new')
                    ->withInput()
                    ->with('error', 'Tuvimos un problema para enviar tu mensaje de correo electrónico, por favor inténtelo de nuevo');
            }

            return view('website/prospects/create');
        }

        return redirect()->route('website.prospects.new')->withInput();
    }
}
