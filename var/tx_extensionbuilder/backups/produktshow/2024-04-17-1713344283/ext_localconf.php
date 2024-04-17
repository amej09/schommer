<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Produktshow',
        'Prs',
        [
            \Vendor\Produktshow\Controller\ProduktController::class => 'index, list, show, new, create',
            \Vendor\Produktshow\Controller\KategoryController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Vendor\Produktshow\Controller\ProduktController::class => 'create',
            \Vendor\Produktshow\Controller\KategoryController::class => ''
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