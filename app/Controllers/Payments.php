<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Payments extends BaseController
{
    /**
     * Helpers needed for the demo checkout flow.
     *
     * @var list<string>
     */
    // Helpers necesarios para renderizar formularios y generar cadenas demo
    protected $helpers = ['url', 'form', 'text'];

    public function demo(): string|RedirectResponse
    {
        // Obtenemos la sesion para leer y guardar mensajes temporales
        $session = session();
        $data    = [
            'errors'        => [],
            'paymentResult' => $session->getFlashdata('paymentResult'),
        ];

        if ($this->request->getMethod() === 'post') {
            // Reglas de validacion basicas para simular pasarela
            $rules = [
                'client_name'   => 'required|min_length[3]',
                'service_type'  => 'required',
                'amount'        => 'required|numeric|greater_than[0]',
                'email'         => 'required|valid_email',
                'phone'         => 'required|min_length[7]',
                'payment_token' => 'required|min_length[6]',
            ];

            $messages = [
                'client_name' => [
                    'required'    => 'Indica el nombre de contacto.',
                    'min_length'  => 'Ingresa al menos 3 caracteres.',
                ],
                'service_type' => [
                    'required' => 'Selecciona el servicio a contratar.',
                ],
                'amount' => [
                    'required'     => 'Define el valor a pagar.',
                    'numeric'      => 'El valor debe ser numérico.',
                    'greater_than' => 'El valor debe ser mayor a cero.',
                ],
                'email' => [
                    'required'    => 'Necesitamos tu correo para enviarte notificaciones.',
                    'valid_email' => 'Ingresa un correo válido.',
                ],
                'phone' => [
                    'required'   => 'Ingresa un teléfono de contacto.',
                    'min_length' => 'El teléfono debe tener al menos 7 dígitos.',
                ],
                'payment_token' => [
                    'required'   => 'Introduce el código temporal de la pasarela.',
                    'min_length' => 'El código debe contener mínimo 6 caracteres.',
                ],
            ];

            if (! $this->validate($rules, $messages)) {
                $data['errors'] = $this->validator->getErrors();
            } else {
                // Generamos referencia aleatoria similar a una transaccion real
                $reference = 'BRX-' . strtoupper(random_string('alnum', 8));

                $session->setFlashdata('paymentResult', [
                    'reference'    => $reference,
                    'clientName'   => $this->request->getPost('client_name'),
                    'serviceType'  => $this->request->getPost('service_type'),
                    'amount'       => number_format((float) $this->request->getPost('amount'), 2, '.', ','),
                    'email'        => $this->request->getPost('email'),
                    'phone'        => $this->request->getPost('phone'),
                    'nextSteps'    => [
                        'Confirma la transferencia con tu entidad aliada.',
                        'Adjunta el comprobante dentro de la orden en Brixo.',
                        'Nuestro equipo verificará y habilitará el inicio del servicio.',
                    ],
                ]);

                // Redirigimos para evitar reenvio de formulario y mostrar resumen
                return redirect()->route('payment-demo')->with('payment_success', true);
            }
        }

        return view('pages/payment_demo', $data);
    }
}
