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

namespace Code711\MastodonFeed\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\Request;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class FeedController extends ActionController
{
    public function indexAction(): ResponseInterface
    {
        $this->view->assign('data', $this->getDataOfCurrentContentObject());

        return $this->htmlResponse();
    }

    protected function getDataOfCurrentContentObject(): array
    {
        $data = [];

        if (
            ($contentObjectRenderer = $this->getContentObjectRenderer())
            && $contentObjectRenderer instanceof ContentObjectRenderer
        ) {
            $data = $contentObjectRenderer->data;
        }

        return $data;
    }

    protected function getContentObjectRenderer(): ?ContentObjectRenderer
    {
        if ($this->request instanceof Request) {
            return $this->request->getAttribute('currentContentObject');
        } else {
            return $this->configurationManager->getContentObject();
        }
    }
}
