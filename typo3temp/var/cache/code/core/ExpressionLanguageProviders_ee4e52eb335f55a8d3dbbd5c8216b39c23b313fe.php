<?php
return array (
  'default' => 
  array (
  ),
  'typoscript' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\TypoScriptConditionProvider',
    1 => 'T3SBS\\T3sbootstrap\\ExpressionLanguage\\T3sbConditionProvider',
  ),
  'site' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\SiteConditionProvider',
  ),
  'form' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ExpressionLanguage\\TypoScriptConditionProvider',
    1 => 'TYPO3\\CMS\\Form\\Domain\\Condition\\ConditionProvider',
  ),
);
#