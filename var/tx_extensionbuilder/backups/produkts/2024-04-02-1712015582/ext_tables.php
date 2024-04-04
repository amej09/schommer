<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_produkts_domain_model_produkt', 'EXT:produkts/Resources/Private/Language/locallang_csh_tx_produkts_domain_model_produkt.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_produkts_domain_model_produkt');
})();
