<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Construimos datos para la portada con contenido demo
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
        // Informacion para el flujo de contratacion con beneficios y preguntas frecuentes
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
        // Datos que guian a los profesionales interesados en registrarse
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
}
