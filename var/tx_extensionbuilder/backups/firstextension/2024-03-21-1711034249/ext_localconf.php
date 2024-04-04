<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Firstextension',
        'Helloworld',
        [
            \Amejrar\Firstextension\Controller\HelloWorldController::class => 'schow'
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
                    helloworld {
                        iconIdentifier = firstextension-plugin-helloworld
                        title = LLL:EXT:firstextension/Resources/Private/Language/locallang_db.xlf:tx_firstextension_helloworld.name
                        description = LLL:EXT:firstextension/Resources/Private/Language/locallang_db.xlf:tx_firstextension_helloworld.description
                        tt_content_defValues {
                            CType = list
                            list_type = firstextension_helloworld
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
