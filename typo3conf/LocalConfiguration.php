<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$ZmNqbDJBQlljR21JSWRDMQ$cQjvghRiPaWIZsL27eHWYXopWw8jkltS0LQbthTjn9g',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'schommertypo3',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'amej2000',
                'port' => 3006,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'abdeljalil',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extension_builder' => [
            'backupDir' => 'var/tx_extensionbuilder/backups',
            'backupExtension' => '1',
            'enableRoundtrip' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        't3sbootstrap' => [
            'animateCss' => '0',
            'bootswatch' => 'none',
            'cTypeClass' => '0',
            'codesnippet' => '0',
            'color' => '1',
            'container' => '1',
            'contentconsent' => '0',
            'cookieconsent' => '0',
            'customScss' => '0',
            'customTranslations' => '0',
            'editScss' => '0',
            'expandedContent' => '0',
            'extNews' => '1',
            'extraStyle' => '0',
            'flexformExtend' => '0',
            'flexformModify' => '0',
            'fontawesome' => '1',
            'fontawesomeCss' => '0',
            'fontawesomepagetitle' => '1',
            'imgCopyright' => '0',
            'imgtag' => '0',
            'keepVariables' => '0',
            'lazyLoad' => '0',
            'linkHoverEffect' => '0',
            'navigationColor' => '0',
            'origimage' => '0',
            'preview' => '1',
            'previewClosedCollapsible' => '0',
            'previewCrop' => '1',
            'previewCropMaxCharacters' => '80',
            'ratio' => '0',
            'sectionOrder' => '0',
            'spacing' => '1',
            't3sbconcatenate' => '0',
            't3sbminify' => '0',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'smtp',
        'transport_sendmail_command' => '',
        'transport_smtp_encrypt' => false,
        'transport_smtp_password' => '',
        'transport_smtp_server' => 'localhost:25',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => 'be33d1153dcd765e9a363386fff40f9e55185ff3852fce8e33cd22435a0b9a910abc202db071a5e45455c623f9732f33',
        'exceptionalErrors' => 4096,
        'features' => [
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'schommerProjekt',
        'systemMaintainers' => [
            1,
        ],
    ],
];
