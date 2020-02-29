<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class LoginAuthenticator extends AbstractGuardAuthenticator
{
    public function supports(Request $request)
    {
//        dd("AUTH");
        return false;
        // todo: user exist
    }

    public function getCredentials(Request $request)
    {
        dd("CREDENTIALS");

        return [
            'username' => 'admin',
            'password' => 'admin',
        ];
        // todo
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        dd($credentials, $userProvider);
        // todo
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        dd("check_credential");
        // todo
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        dd("auth_fail");
        // todo
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        dd("auth_success");
        // todo
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        dd("auth_start");
        // todo
    }

    public function supportsRememberMe()
    {
        // todo
    }
}
