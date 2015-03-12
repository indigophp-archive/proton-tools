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

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Use this controller as an example in newly created applications
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class ExampleController
{
    /**
     * Index action displaying the main site
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function index(Request $request, Response $response, array $args)
    {
        $response->setContent('<h1>It Works!</h2>');

        return $response;
    }
}
