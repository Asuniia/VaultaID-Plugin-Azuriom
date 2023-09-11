<?php


return [
    'auth' => [
        'login_vaultaid' => 'Continuer avec VaultaID',
    ],

    'flash' => [
        'auth' => [
            'success' => [
                'login' => 'Vous êtes maintenant connecté avec VaultaID.',
            ],
            'error' => [
                'no_code' => 'Impossible de récupérer les informations auprès du prestataire d\'authentification.',
                'declined' => 'Vous avez refusé la connexion avec VaultaID.',
                'server_err' => 'Une erreur est survenue lors de la connexion avec VaultaID.',
                'banned' => 'Vous êtes actuellement restreint. Votre authentification a échoué',
                'maintenance' => 'Le site est actuellement en maintenance. Votre authentification a échoué',
            ]
        ]
    ]


];