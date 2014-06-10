<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin('Gjo.' . $_EXTKEY, 'BookPlugin',
    array(
        'BookPlugin' => 'list, show, new, create, edit, update, delete',
    ),
    array(
        'BookPlugin' => 'list, create, update, delete',
    )
);

ExtensionUtility::configurePlugin('Gjo.' . $_EXTKEY, 'AuthorPlugin',
    array(
        'AuthorPlugin' => 'list, show, new, create, edit, update, delete, editBook',
    ),
    array(
        'Author' => 'create, update, delete',
    )
);