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
interface ApplicationAware
{
    /**
     * Returns the current application
     *
     * @return Application
     *
     * @throws \RuntimeException if application has not been set previously
     */
    public function getApplication();

    /**
     * Sets the current application
     *
     * @param Application $app
     */
    public function setApplication(Application $app);
}
