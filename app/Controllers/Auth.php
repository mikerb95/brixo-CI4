<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Auth extends BaseController
{
    /**
     * Helpers necesarios para las vistas de autenticacion.
     *
     * @var list<string>
     */
    // Helpers para manejar formularios y redirecciones en vistas de acceso
    protected $helpers = ['url', 'form'];

    /**
     * Lista de usuarios demo. Cambiar por persistencia real y contrasenas cifradas en produccion.
     *
     * @var array<string, array<string, string>>
     */
    // Usuarios de ejemplo mientras se integra un repositorio real
    private array $users = [
        'cliente@brixo.co' => [
            'name'     => 'Cliente Demo',
            'role'     => 'client',
            'password' => 'Cliente123*',
        ],
        'pro@brixo.co' => [
            'name'     => 'Profesional Demo',
            'role'     => 'professional',
            'password' => 'ProConstruye123*',
        ],
    ];

    public function login(): string|RedirectResponse
    {
        // Si ya existe sesion activa redirigimos a la portada
        if ($this->session->get('isLoggedIn')) {
            return redirect()->route('home');
        }

        $data = [
            'errors'           => [],
            'credentialsError' => null,
            'successMessage'   => null,
        ];

        if ($this->request->getMethod() === 'post') {
            // Validaciones basicas del formulario de ingreso
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];

            $messages = [
                'email' => [
                    'required'    => 'Ingresa un correo electrónico.',
                    'valid_email' => 'Revisa el formato del correo.',
                ],
                'password' => [
                    'required'   => 'Ingresa tu contraseña.',
                    'min_length' => 'La contraseña debe tener al menos 6 caracteres.',
                ],
            ];

            if (! $this->validate($rules, $messages)) {
                $data['errors'] = $this->validator->getErrors();
            } else {
                // Buscamos usuario demo y comparamos contrasena de forma segura
                $email    = strtolower((string) $this->request->getPost('email'));
                $password = (string) $this->request->getPost('password');
                $user     = $this->users[$email] ?? null;

                if ($user === null || ! hash_equals($user['password'], $password)) {
                    // Persistimos mensaje para mostrar error generico
                    $this->session->setFlashdata('auth_error', 'Credenciales inválidas. Por favor revisa e intenta nuevamente.');

                    return redirect()->route('login')->withInput();
                }

                // Guardamos datos minimos en sesion para personalizar la UI
                $this->session->set([
                    'isLoggedIn' => true,
                    'user'       => [
                        'email' => $email,
                        'name'  => $user['name'],
                        'role'  => $user['role'],
                    ],
                ]);

                $this->session->setFlashdata('global_success', 'Bienvenido, ' . $user['name'] . '. Tu panel ya está disponible.');

                return redirect()->route('home');
            }
        }

        $data['credentialsError'] = $this->session->getFlashdata('auth_error');
        $data['successMessage']   = $this->session->getFlashdata('auth_success');

        return view('pages/login', $data);
    }

    public function logout(): RedirectResponse
    {
        // Limpiamos datos de sesion y avisamos al usuario
        $this->session->remove(['isLoggedIn', 'user']);
        $this->session->setFlashdata('auth_success', 'Sesión cerrada correctamente.');

        return redirect()->route('login');
    }
}
