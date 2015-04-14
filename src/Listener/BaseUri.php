<?php

/*
 * This file is part of the Proton Tools package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Proton\Tools\Listener;

use League\Event\AbstractListener;
use League\Event\EventInterface;
use Proton\Tools\ApplicationAcceptor;
use Proton\Tools\ApplicationAware;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class BaseUri extends AbstractListener implements ApplicationAware
{
    use ApplicationAcceptor;

    /**
     * {@inheritdoc}
     */
    public function handle(EventInterface $event, Request $request = null)
    {
        if (is_null($request)) {
            throw new \LogicException('This listener should be subscribed to Proton\'s request.created event');
        }

        $this->getApplication()->setConfig('baseUri', $request->getBaseUrl());
        $this->getApplication()->setConfig(
            'baseUrl',
            sprintf(
                '%s://%s%s',
                $request->getScheme(),
                $request->getHttpHost(),
                $request->getBaseUrl()
            )
        );
    }
}
