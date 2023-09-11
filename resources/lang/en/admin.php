<?php

return [
    'nav' => [
        'title' => 'VaultaID',
        'settings' => 'Settings',
    ],

    'permission' => 'View and modify VaultaID settings',

    'scopes' => [
        'email' => 'Email Address',
        'name' => 'Last Name',
        'firstname' => 'First Name',
        'username' => 'Username',
        'phone' => 'Phone',
        'organization' => 'Organization',
        'sync' => 'Data Sync',
        'receive_email' => 'Receive Emails (Newsletter)',
        'verified' => 'Verified Account',
        'date_created' => 'Date Created',
        'date_updated' => 'Date Updated',
        'avatar' => 'Avatar',
    ],

    'settings' => [
        'title' => 'VaultaID Configuration',
        'subtitle' => 'VaultaID is an authentication and account management service. It allows you to log in to your website using a VaultaID account and synchronize your VaultaID account data with your account on this website.',
        'header' => "VaultaID Settings",
        'info' => "To use VaultaID, you need to register your application. This verification ensures that VaultaID is used by trusted individuals and serves its purpose. This verification is done manually, and you will receive a response within 3 hours.",
        'evolution' => 'VaultaID is evolving, you will soon be able to create applications directly from your VaultaID account. And at no cost!',
        'request' => 'Request Verification',
        'client_id' => 'Application Identifier',
        'client_id_placeholder' => 'Application Identifier',
        'client_secret' => 'Application Secret',
        'client_secret_placeholder' => 'Application Secret',
        'redirect_uri' => 'Redirection URL (leave blank to use the default)',
        'redirect_uri_placeholder' => 'Redirection URL (leave blank to use the default)',
        'scopes' => 'Permissions (Scopes)',
        'enable_vaultaid' => 'Enable VaultaID',
        'enable_script' => 'Enable VaultaID Integration',
        'button_class' => 'Custom Class for Button (Only available for VaultaID.js)',
        'button_class_placeholder' => 'Customize button colors and style by adding your own classes',
        'social_discord' => 'Join Our Discord Server',
    ],

    'flash' => [
        'settings' => [
            'success' => 'Settings have been successfully saved.',
        ]
    ]
];