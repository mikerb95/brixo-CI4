<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'serviceCategories' => [
                ['title' => 'Remodelaciones', 'description' => 'Renueva apartamentos, casas y locales con expertos certificados.', 'icon' => 'bi-house-gear'],
                ['title' => 'Carpintería', 'description' => 'Diseño y fabricación de muebles, closets y acabados en madera.', 'icon' => 'bi-hammer'],
                ['title' => 'Plomería', 'description' => 'Instalación y mantenimiento de redes hidráulicas y gas.', 'icon' => 'bi-droplet'],
                ['title' => 'Electricidad', 'description' => 'Diagnóstico y soluciones eléctricas confiables y seguras.', 'icon' => 'bi-lightning-charge'],
            ],
            'workflowSteps' => [
                ['title' => 'Explora servicios', 'description' => 'Filtra por categoría, presupuesto y disponibilidad.'],
                ['title' => 'Encuentra al profesional ideal', 'description' => 'Revisa portafolios, calificaciones y garantías.'],
                ['title' => 'Agenda y paga seguro', 'description' => 'Coordina fechas, firma acuerdos y paga con respaldo Brixo.'],
            ],
            'featuredProfessionals' => [
                ['name' => 'María González', 'role' => 'Maestra de obra', 'rating' => 4.9, 'jobs' => 128, 'badge' => 'Top Pro'],
                ['name' => 'Carlos Pérez', 'role' => 'Técnico electricista', 'rating' => 4.8, 'jobs' => 94, 'badge' => 'Garantía Brixo'],
                ['name' => 'Laura Medina', 'role' => 'Especialista en acabados', 'rating' => 5.0, 'jobs' => 72, 'badge' => 'Preferido'],
            ],
            'testimonials' => [
                ['name' => 'Helena R.', 'quote' => 'Coordiné la remodelación de mi cocina en una semana, todo quedó impecable y a tiempo.'],
                ['name' => 'Jorge P.', 'quote' => 'La plataforma nos dio garantías y seguimiento durante la obra. Excelente experiencia.'],
                ['name' => 'Andrea L.', 'quote' => 'Contraté un plomero urgente domingo en la noche. Respuesta inmediata y pago seguro.'],
            ],
        ];

        return view('pages/home', $data);
    }

    public function hire(): string
    {
        $data = [
            'benefits' => [
                'Contratos claros con respaldo digital y seguimiento en tiempo real.',
                'Pagos protegidos con hitos liberados cuando apruebas los avances.',
                'Profesionales verificados con antecedentes y referencias comprobadas.',
                'Atención al cliente especializada en proyectos de construcción y reformas.',
            ],
            'faqs' => [
                ['question' => '¿Cómo inicio un proyecto?', 'answer' => 'Publica tu necesidad con detalles, presupuesto estimado y fecha. Recibirás propuestas personalizadas de profesionales verificados.'],
                ['question' => '¿Qué pasa si el trabajo no se entrega?', 'answer' => 'Retenemos los pagos hasta que apruebes cada hito. Si hay inconvenientes, intervenimos con nuestro equipo de soporte.'],
                ['question' => '¿Puedo contratar servicios de emergencia?', 'answer' => 'Sí, contamos con cobertura 24/7 para urgencias de plomería, electricidad y cerraduras.'],
            ],
        ];

        return view('pages/hire', $data);
    }

    public function professionals(): string
    {
        $data = [
            'perks' => [
                'Recibe clientes listos para contratar y optimiza tu agenda.',
                'Administra contratos, avances y pagos desde un solo panel.',
                'Acceso a capacitaciones, certificaciones y convenios con proveedores.',
                'Soporte legal y comercial para tus proyectos más grandes.',
            ],
            'requirements' => [
                'Documento de identidad y certificaciones técnicas cuando aplique.',
                'Portafolio con fotos y referencias verificables.',
                'Cumplimiento de protocolos de seguridad laboral.',
                'Disponibilidad para reportar avances desde la aplicación móvil.',
            ],
        ];

        return view('pages/professionals', $data);
    }

    public function about(): string
    {
        $data = [
            'mainFeatures' => [
                [
                    'icon' => 'bi-shield-check',
                    'title' => 'Pagos protegidos',
                    'description' => 'Tus pagos se liberan por hitos completados. Si algo sale mal, estamos aquí para ayudarte a resolver la situación con garantías y respaldo.',
                ],
                [
                    'icon' => 'bi-people-fill',
                    'title' => 'Profesionales verificados',
                    'description' => 'Todos nuestros profesionales pasan por verificación de identidad, antecedentes y referencias. Solo trabajas con expertos confiables.',
                ],
                [
                    'icon' => 'bi-file-earmark-text',
                    'title' => 'Contratos digitales',
                    'description' => 'Firma acuerdos claros con alcance, cronograma y presupuesto definidos. Todo queda documentado y protegido legalmente.',
                ],
                [
                    'icon' => 'bi-graph-up',
                    'title' => 'Seguimiento en tiempo real',
                    'description' => 'Monitorea el avance de tu proyecto, valida entregas por hito y comunícate directamente con tu equipo desde la plataforma.',
                ],
                [
                    'icon' => 'bi-clock-history',
                    'title' => 'Soporte 24/7',
                    'description' => 'Equipo especializado en construcción disponible para emergencias, consultas técnicas y mediación en caso de conflictos.',
                ],
                [
                    'icon' => 'bi-star-fill',
                    'title' => 'Calificaciones transparentes',
                    'description' => 'Revisa opiniones reales de clientes anteriores, portafolios de trabajos completados y certificaciones profesionales.',
                ],
            ],
            'useCases' => [
                [
                    'title' => 'Para propietarios',
                    'description' => 'Remodelar tu hogar, hacer reparaciones o construir desde cero con profesionales confiables, pagos seguros y seguimiento total.',
                    'benefits' => [
                        'Propuestas competitivas de múltiples profesionales',
                        'Pagos liberados solo cuando apruebes el trabajo',
                        'Garantía de satisfacción respaldada por Brixo',
                    ],
                ],
                [
                    'title' => 'Para empresas',
                    'description' => 'Gestiona proyectos corporativos, mantenimientos de locales o construcciones comerciales con equipos especializados.',
                    'benefits' => [
                        'Equipos profesionales para proyectos de cualquier escala',
                        'Facturación y documentación fiscal completa',
                        'Coordinación y supervisión de múltiples frentes',
                    ],
                ],
                [
                    'title' => 'Para profesionales',
                    'description' => 'Accede a clientes verificados, administra tus proyectos digitalmente y recibe pagos puntuales con respaldo legal.',
                    'benefits' => [
                        'Agenda optimizada con proyectos listos para ejecutar',
                        'Pagos garantizados al completar hitos acordados',
                        'Acceso a capacitaciones y certificaciones',
                    ],
                ],
            ],
            'howItWorks' => [
                [
                    'step' => '1',
                    'title' => 'Publica tu necesidad',
                    'description' => 'Describe tu proyecto con detalles, presupuesto estimado, ubicación y fechas preferidas.',
                ],
                [
                    'step' => '2',
                    'title' => 'Recibe propuestas',
                    'description' => 'Profesionales verificados envían cotizaciones personalizadas con cronogramas y garantías.',
                ],
                [
                    'step' => '3',
                    'title' => 'Elige y contrata',
                    'description' => 'Compara perfiles, revisa calificaciones y selecciona al mejor candidato para tu proyecto.',
                ],
                [
                    'step' => '4',
                    'title' => 'Firma el contrato',
                    'description' => 'Acuerdo digital con alcance, hitos, cronograma y forma de pago claramente definidos.',
                ],
                [
                    'step' => '5',
                    'title' => 'Ejecuta con seguimiento',
                    'description' => 'Monitorea avances, valida entregas y comunícate con tu equipo desde la plataforma.',
                ],
                [
                    'step' => '6',
                    'title' => 'Paga por hitos',
                    'description' => 'Los pagos se liberan automáticamente cuando apruebes cada fase completada del proyecto.',
                ],
            ],
        ];

        return view('pages/about', $data);
    }
}
