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
interface AppAware
{
    /**
     * Returns the current application
     *
     * @return Application
     *
     * @throws \RuntimeException if application has not been set previously
     */
    public function getApp();

    /**
     * Sets the current application
     *
     * @param Application $app
     */
    public function setApp(Application $app);
}
