<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Code711.' . $_EXTKEY,
    'Feed',
    [
        'Feed' => 'index',
    ],
    [
        'Feed' => 'index',
    ]
);