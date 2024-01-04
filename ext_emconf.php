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

$EM_CONF[$_EXTKEY] = [
    'title' => 'Code711 Mastodon Feed',
    'description' => 'Embed a mastodon feed, configurable for a timeline or a tag from a specific server',
    'category' => 'plugin',
    'author' => 'Patricia Ottmar',
    'author_email' => 'p.ottmar@12bis3.de',
    'author_company' => '12bis3 / Code711',
    'state' => 'stable',
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
