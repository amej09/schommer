<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'ExtensionMessage',
        'Helloworld',
        [
            \Vendor\ExtensionMessage\Controller\HelloWorldController::class => 'show'
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
                        iconIdentifier = extension_message-plugin-helloworld
                        title = LLL:EXT:extension_message/Resources/Private/Language/locallang_db.xlf:tx_extension_message_helloworld.name
                        description = LLL:EXT:extension_message/Resources/Private/Language/locallang_db.xlf:tx_extension_message_helloworld.description
                        tt_content_defValues {
                            CType = list
                            list_type = extensionmessage_helloworld
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
