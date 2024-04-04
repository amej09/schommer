<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Produkts',
        'Prk',
        [
            \Produktsvendor\Produkts\Controller\ProduktController::class => 'index, list, show, new, create, edit, update, delete'
        ],
        // non-cacheable actions
        [
            \Produktsvendor\Produkts\Controller\ProduktController::class => 'create, update, delete'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    prk {
                        iconIdentifier = produkts-plugin-prk
                        title = LLL:EXT:produkts/Resources/Private/Language/locallang_db.xlf:tx_produkts_prk.name
                        description = LLL:EXT:produkts/Resources/Private/Language/locallang_db.xlf:tx_produkts_prk.description
                        tt_content_defValues {
                            CType = list
                            list_type = produkts_prk
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
