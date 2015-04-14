<?php

/*
 * This file is part of the Proton Tools package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Proton\Tools;

use Proton\Application;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait AppAcceptor
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * {@inheritdoc}
     */
    public function getApp()
    {
        if (!isset($this->app)) {
            throw new \RuntimeException('Application has not been set');
        }

        return $this->app;
    }

    /**
     * {@inheritdoc}
     */
    public function setApp(Application $app)
    {
        $this->app = $app;
    }
}
