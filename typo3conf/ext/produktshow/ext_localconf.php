<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Produktshow',
        'Prs',
        [
            \Vendor\Produktshow\Controller\ProduktController::class => 'list, show,import',
            \Vendor\Produktshow\Controller\KategoryController::class => 'list, show ,import',
            
        ],
        // non-cacheable actions
        [
            \Vendor\Produktshow\Controller\ProduktController::class => 'list, show ,import',
            \Vendor\Produktshow\Controller\KategoryController::class => 'list, show ,import',
            \Vendor\Produktshow\Utility\ProductImportUtility::class => 'import'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    prs {
                        iconIdentifier = produktshow-plugin-prs
                        title = LLL:EXT:produktshow/Resources/Private/Language/locallang_db.xlf:tx_produktshow_prs.name
                        description = LLL:EXT:produktshow/Resources/Private/Language/locallang_db.xlf:tx_produktshow_prs.description
                        tt_content_defValues {
                            CType = list
                            list_type = produktshow_prs
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
