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

use Indigo\Guardian\Service\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Use this controller as an example in newly created applications
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class AuthController
{
    /**
     * @var Login
     */
    protected $loginService;

    /**
     * @param Login  $loginService
     */
    public function __construct(Login $loginService)
    {
        $this->loginService = $loginService;
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

        $this->loginService->login($subject);

        $returnUri = $request->query->get('uri', $request->attributes->get('stack.url_map.prefix', '/'));

        return new RedirectResponse($returnUri);
    }
}
