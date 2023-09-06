<?php

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

defined('TYPO3') or die();

(function () {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MastodonFeed',
        'Feed',
        [
            \Code711\MastodonFeed\Controller\FeedController::class => 'index',
        ],
        [
            \Code711\MastodonFeed\Controller\FeedController::class => 'index',
        ]
    );

})();
