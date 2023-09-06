<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MastodonFeed',
    'Feed',
    [
        'Feed' => 'index',
    ],
    [
        'Feed' => 'index',
    ]
);