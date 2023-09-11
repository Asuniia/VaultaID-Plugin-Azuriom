<?php

return [
    'nav' => [
        'title' => 'VaultaID',
        'settings' => 'Configuración',
    ],

    'permission' => 'Ver y modificar la configuración de VaultaID',

    'scopes' => [
        'email' => 'Dirección de correo electrónico',
        'name' => 'Apellido',
        'firstname' => 'Nombre',
        'username' => 'Nombre de usuario',
        'phone' => 'Teléfono',
        'organization' => 'Organización',
        'sync' => 'Sincronización de datos',
        'receive_email' => 'Recibir correos electrónicos (Boletín)',
        'verified' => 'Cuenta verificada',
        'date_created' => 'Fecha de creación',
        'date_updated' => 'Fecha de actualización',
        'avatar' => 'Avatar',
    ],

    'settings' => [
        'title' => 'Configuración de VaultaID',
        'subtitle' => 'VaultaID es un servicio de autenticación y gestión de cuentas. Le permite iniciar sesión en su sitio web utilizando una cuenta de VaultaID y sincronizar los datos de su cuenta de VaultaID con su cuenta en este sitio web.',
        'header' => "Configuración de VaultaID",
        'info' => "Para utilizar VaultaID, debe registrar su aplicación. Esta verificación asegura que VaultaID sea utilizado por personas de confianza y cumpla su propósito. Esta verificación se realiza de forma manual y recibirá una respuesta en un plazo de 3 horas.",
        'evolution' => 'VaultaID está evolucionando. Pronto podrá crear aplicaciones directamente desde su cuenta de VaultaID. ¡Y sin costo alguno!',
        'request' => 'Solicitar verificación',
        'client_id' => 'Identificador de la aplicación',
        'client_id_placeholder' => 'Identificador de la aplicación',
        'client_secret' => 'Secreto de la aplicación',
        'client_secret_placeholder' => 'Secreto de la aplicación',
        'redirect_uri' => 'URL de redirección (dejar en blanco para usar la predeterminada)',
        'redirect_uri_placeholder' => 'URL de redirección (dejar en blanco para usar la predeterminada)',
        'scopes' => 'Permisos (Scopes)',
        'enable_vaultaid' => 'Activar VaultaID',
        'enable_script' => 'Activar Integración VaultaID',
        'button_class' => 'Clase personalizada para el botón (Solo disponible para VaultaID.js)',
        'button_class_placeholder' => 'Personalice los colores y el estilo del botón agregando sus propias clases',
        'social_discord' => 'Únase a nuestro servidor de Discord',
    ],

    'flash' => [
        'settings' => [
            'success' => 'La configuración se ha guardado correctamente.',
        ]
    ]
];