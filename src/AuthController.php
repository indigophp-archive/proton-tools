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

use Indigo\Guardian\SessionAuth;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Use this controller as an example in newly created applications
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
abstract class AuthController
{
    /**
     * @var SessionAuth
     */
    protected $sessionAuth;

    /**
     * @param SessionAuth $sessionAuth
     */
    public function __construct(SessionAuth $sessionAuth)
    {
        $this->sessionAuth = $sessionAuth;
    }

    /**
     * Login page
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    abstract public function login(Request $request, Response $response, array $args);

    /**
     * Login handler
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function processLogin(Request $request, Response $response, array $args)
    {
        $subject = [
            'username' => $request->request->get('username'),
            'password' => $request->request->get('password'),
        ];

        $this->sessionAuth->login($subject);

        $returnUri = $request->query->get('uri', $request->attributes->get('stack.url_map.prefix', '/'));

        return new RedirectResponse($returnUri);
    }
}
