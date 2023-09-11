<?php

return [
    'nav' => [
        'title' => 'VaultaID',
        'settings' => 'Einstellungen',
    ],

    'permission' => 'VaultaID-Einstellungen anzeigen und ändern',

    'scopes' => [
        'email' => 'E-Mail-Adresse',
        'name' => 'Nachname',
        'firstname' => 'Vorname',
        'username' => 'Benutzername',
        'phone' => 'Telefon',
        'organization' => 'Organisation',
        'sync' => 'Daten-Synchronisation',
        'receive_email' => 'E-Mails empfangen (Newsletter)',
        'verified' => 'Verifiziertes Konto',
        'date_created' => 'Erstellungsdatum',
        'date_updated' => 'Aktualisierungsdatum',
        'avatar' => 'Avatar',
    ],

    'settings' => [
        'title' => 'VaultaID-Konfiguration',
        'subtitle' => 'VaultaID ist ein Authentifizierungs- und Kontomanagementdienst. Es ermöglicht Ihnen, sich auf Ihrer Website mit einem VaultaID-Konto anzumelden und Ihre VaultaID-Kontodaten mit Ihrem Konto auf dieser Website zu synchronisieren.',
        'header' => "VaultaID-Einstellungen",
        'info' => "Um VaultaID zu verwenden, müssen Sie Ihre Anwendung registrieren. Diese Überprüfung stellt sicher, dass VaultaID von vertrauenswürdigen Personen verwendet wird und seinen Zweck erfüllt. Diese Überprüfung erfolgt manuell, und Sie erhalten innerhalb von 3 Stunden eine Antwort.",
        'evolution' => 'VaultaID entwickelt sich weiter. Bald werden Sie in der Lage sein, Anwendungen direkt von Ihrem VaultaID-Konto aus zu erstellen. Und das kostenlos!',
        'request' => 'Verifizierung anfordern',
        'client_id' => 'Anwendungsidentifikator',
        'client_id_placeholder' => 'Anwendungsidentifikator',
        'client_secret' => 'Anwendungsgeheimnis',
        'client_secret_placeholder' => 'Anwendungsgeheimnis',
        'redirect_uri' => 'Weiterleitungs-URL (lassen Sie das Feld leer, um die Standardeinstellung zu verwenden)',
        'redirect_uri_placeholder' => 'Weiterleitungs-URL (lassen Sie das Feld leer, um die Standardeinstellung zu verwenden)',
        'scopes' => 'Berechtigungen (Scopes)',
        'enable_vaultaid' => 'VaultaID aktivieren',
        'enable_script' => 'VaultaID-Integration aktivieren',
        'button_class' => 'Benutzerdefinierte Klasse für die Schaltfläche (Nur für VaultaID.js verfügbar)',
        'button_class_placeholder' => 'Passen Sie die Farben und den Stil der Schaltfläche an, indem Sie Ihre eigenen Klassen hinzufügen',
        'social_discord' => 'Treten Sie unserem Discord-Server bei',
    ],

    'flash' => [
        'settings' => [
            'success' => 'Die Einstellungen wurden erfolgreich gespeichert.',
        ]
    ]
];