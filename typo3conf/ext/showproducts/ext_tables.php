<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_showproducts_domain_model_produkt');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_showproducts_domain_model_kategorie');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_showproducts_domain_model_produkt', 'EXT:showproducts/Resources/Private/Language/locallang_csh_tx_showproducts_domain_model_produkt.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_showproducts_domain_model_kategorie', 'EXT:showproducts/Resources/Private/Language/locallang_csh_tx_showproducts_domain_model_kategorie.xlf');
