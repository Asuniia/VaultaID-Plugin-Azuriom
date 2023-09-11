<?php

return [
    'nav' => [
        'title' => 'VaultaID',
        'settings' => 'Paramètres',
    ],

    'permission' => 'Voir et modifier les paramètres de VaultaID',


    'scopes' => [
        'email' => 'Adresse email',
        'name' => 'Nom de famille',
        'firstname' => 'Prénom',
        'username' => 'Nom d\'utilisateur',
        'phone' => 'Téléphone',
        'organization' => 'Organisation',
        'sync' => 'Synchronisation des données',
        'receive_email' => 'Recevoir des emails (newsletter)',
        'verified' => 'Compte vérifié',
        'date_created' => 'Date de création',
        'date_updated' => 'Date de mise à jour',
        'avatar' => 'Avatar',
    ],

    'settings' => [
        'title' => 'Configuration VaultaID',
        'subtitle' => 'VaultaID est un service d\'authentification et de gestion de comptes. Il permet de se connecter à votre site avec un compte VaultaID, et de synchroniser les données de votre compte VaultaID avec votre compte sur ce site.',
        'header' => "Réglages VaultaID",
        'info' => "Pour utiliser VaultaID, vous devez enregistrer votre application. Cette vérification permet de s'assurer de l'utilisation de VaultaID par des personnes de confiance et de préserver son but. Cette vérification est effectuée manuellement, vous recevrez une réponse dans les 3h.",
        'evolution' => 'VaultaID évolue, vous pourrez prochainement créer des applications directement depuis votre compte VaultaID. Et sans aucun frais !',
        'request' => 'Demander une vérification',
        'client_id' => 'Identifiant de l\'application',
        'client_id_placeholder' => 'Identifiant de l\'application',
        'client_secret' => 'Secret de l\'application',
        'client_secret_placeholder' => 'Secret de l\'application',
        'redirect_uri' => 'URL de redirection (laisser vide pour utiliser celle par défaut)',
        'redirect_uri_placeholder' => 'URL de redirection (laisser vide pour utiliser celle par défaut)',
        'scopes' => 'Permissions (scopes)',
        'enable_vaultaid' => 'Activer VaultaID',
        'enable_script' => 'Activer l\'intégration VaultaID',
        'button_class' => 'Classe personnalisé pour le bouton (Uniquement disponible pour VaultaID.js)',
        'button_class_placeholder' => 'Permet de customiser les couleurs et la forme du bouton en ajoutant vos propres classes',
        'social_discord' => 'Rejoindre notre serveur Discord',
    ],

    'flash' => [
        'settings' => [
            'success' => 'Les paramètres ont bien été enregistrés.',
        ]
    ]
];
