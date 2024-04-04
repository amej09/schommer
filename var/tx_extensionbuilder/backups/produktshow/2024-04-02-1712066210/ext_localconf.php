<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Produktshow',
        'Namefront',
        [
            \Vendor\Produktshow\Controller\ProduktController::class => 'list, show',
            \Vendor\Produktshow\Controller\KategoryController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Vendor\Produktshow\Controller\ProduktController::class => '',
            \Vendor\Produktshow\Controller\KategoryController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    namefront {
                        iconIdentifier = produktshow-plugin-namefront
                        title = LLL:EXT:produktshow/Resources/Private/Language/locallang_db.xlf:tx_produktshow_namefront.name
                        description = LLL:EXT:produktshow/Resources/Private/Language/locallang_db.xlf:tx_produktshow_namefront.description
                        tt_content_defValues {
                            CType = list
                            list_type = produktshow_namefront
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
