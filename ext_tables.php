<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

$extensionName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Feed',
    'LLL:EXT:mastodon_feed/Resources/Private/Language/locallang.xlf:tt_content.mastodon_feed'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mastodonfeed_feed'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('mastodonfeed_feed', 'FILE:EXT:mastodon_feed/Configuration/FlexForms/Feed.xml');
