<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Filtro o middleware de verificación de reCAPTCHA.
 */
class reCAPTCHA implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $validation = service('validation');

        $token = $request->getPost('g-recaptcha-response');

        $validation->setRules(['reCAPTCHA' => 'required|string']);

        // Valida si existe el token del usuario.
        if (! $validation->run(['reCAPTCHA' => $token])) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', $validation->getError('reCAPTCHA'));
        }

        $client = service('curlrequest');

        // Valida el token del usuario desde la API de Google.
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'query' => [
                'secret'   => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
                'response' => $token,
                'remoteip' => $request->getIPAddress(),
            ],
            'timeout' => 8,
            'debug'   => ENVIRONMENT !== 'production',
        ]);

        $body = json_decode($response->getBody() ?? '{"success": false}');

        if (empty($body->success)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed reCAPTCHA check');
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
