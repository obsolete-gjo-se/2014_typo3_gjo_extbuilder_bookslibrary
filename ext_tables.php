<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility,
    TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// *** ExtensionTS: ***
ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bookslibrary');

// *** Register Plugins ***
ExtensionUtility::registerPlugin($_EXTKEY, 'BookPlugin', 'BookPlugin-Title');
ExtensionUtility::registerPlugin($_EXTKEY, 'AuthorPlugin', 'AuthorPlugin-Title');

// *** Model: Book (Backend) ***
$tx_gjobookslibrary_domain_model_bookplugin = 'tx_gjobookslibrary_domain_model_bookplugin';
ExtensionManagementUtility::addLLrefForTCAdescr($tx_gjobookslibrary_domain_model_bookplugin, 'EXT:gjo_bookslibrary/Resources/Private/Language/locallang_csh_tx_gjobookslibrary_domain_model_bookplugin.xlf');
ExtensionManagementUtility::allowTableOnStandardPages($tx_gjobookslibrary_domain_model_bookplugin);

$TCA[$tx_gjobookslibrary_domain_model_bookplugin] = array(
    'ctrl' => array(
        'dynamicConfigFile' => ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/BookPlugin.php',
        'iconfile' => ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_gjobookslibrary_domain_model_bookplugin.gif'
    ),
);


/// *** Author Backend ***
$tx_gjobookslibrary_domain_model_authorplugin = 'tx_gjobookslibrary_domain_model_authorplugin';
ExtensionManagementUtility::addLLrefForTCAdescr($tx_gjobookslibrary_domain_model_authorplugin, 'EXT:gjo_bookslibrary/Resources/Private/Language/locallang_csh_tx_gjobookslibrary_domain_model_authorplugin.xlf');
ExtensionManagementUtility::allowTableOnStandardPages($tx_gjobookslibrary_domain_model_authorplugin);

$TCA[$tx_gjobookslibrary_domain_model_authorplugin] = array(
    'ctrl' => array(
        'dynamicConfigFile' => ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/AuthorPlugin.php',
        'iconfile' => ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_gjobookslibrary_domain_model_authorplugin.gif'
    ),
);