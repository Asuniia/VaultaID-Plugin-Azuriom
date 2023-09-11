<?php

return [
    'auth' => [
        'login_vaultaid' => 'Continue with VaultaID',
    ],

    'flash' => [
        'auth' => [
            'success' => [
                'login' => 'You are now logged in with VaultaID.',
            ],
            'error' => [
                'no_code' => 'Unable to retrieve information from the authentication provider.',
                'declined' => 'You declined the connection with VaultaID.',
                'server_err' => 'An error occurred during the connection with VaultaID.',
                'banned' => 'You are currently restricted. Your authentication failed.',
                'maintenance' => 'The site is currently undergoing maintenance. Your authentication failed.',
            ]
        ]
    ]
];