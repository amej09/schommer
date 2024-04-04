<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'ExtensionMessage',
    'description' => 'Affiche le message Hello World',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'test',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
