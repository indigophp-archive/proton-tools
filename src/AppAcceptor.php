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
 * Accepts an application
 *
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
