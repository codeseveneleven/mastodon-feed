<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 project.
 * (c) 2026 B-Factor GmbH
 *          Sudhaus7
 *          12bis3
 *          Code711.de
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 * The TYPO3 project - inspiring people to share!
 * @copyright https://code711.de/
 *
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

(function () {
    ExtensionUtility::registerPlugin(
        'MastodonFeed',
        'Feed',
        'LLL:EXT:mastodon_feed/Resources/Private/Language/locallang.xlf:plugin.mastodonfeed.title',
        'ext-social-mastodon',
        'plugins',
        'LLL:EXT:mastodon_feed/Resources/Private/Language/locallang.xlf:plugin.mastodonfeed.description'
    );

    ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;Configuration,pi_flexform,', 'mastodonfeed_feed', 'after:subheader');

    ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:mastodon_feed/Configuration/FlexForms/Feed.xml',
        'mastodonfeed_feed'
    );
})();
