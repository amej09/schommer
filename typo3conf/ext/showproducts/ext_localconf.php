<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Showproducts',
        'Allproduct',
        [
            \All\Showproducts\Controller\ProduktController::class => 'list'
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    allproduct {
                        iconIdentifier = showproducts-plugin-allproduct
                        title = LLL:EXT:showproducts/Resources/Private/Language/locallang_db.xlf:tx_showproducts_allproduct.name
                        description = LLL:EXT:showproducts/Resources/Private/Language/locallang_db.xlf:tx_showproducts_allproduct.description
                        tt_content_defValues {
                            CType = list
                            list_type = showproducts_allproduct
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
