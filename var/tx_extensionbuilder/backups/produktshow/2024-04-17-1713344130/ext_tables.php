<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_produktshow_domain_model_produkt', 'EXT:produktshow/Resources/Private/Language/locallang_csh_tx_produktshow_domain_model_produkt.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_produktshow_domain_model_produkt');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_produktshow_domain_model_kategory', 'EXT:produktshow/Resources/Private/Language/locallang_csh_tx_produktshow_domain_model_kategory.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_produktshow_domain_model_kategory');
})();
