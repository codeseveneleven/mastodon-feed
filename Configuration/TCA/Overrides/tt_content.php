<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 project.
 * (c) 2022 B-Factor GmbH / 12bis3 / Sudhaus7 / code711.de
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 * The TYPO3 project - inspiring people to share!
 *
 * @copyright 2023 B-Factor GmbH / 12bis3 / Sudhaus7 / https://code711.de/
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(function () {

    ExtensionUtility::registerPlugin(
        'MastodonFeed',
        'Feed',
        'LLL:EXT:mastodon_feed/Resources/Private/Language/locallang.xlf:tt_content.mastodon_feed'
    );
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mastodonfeed_feed'] = 'pi_flexform';
    ExtensionManagementUtility::addPiFlexFormValue('mastodonfeed_feed', 'FILE:EXT:mastodon_feed/Configuration/FlexForms/Feed.xml');

})();
