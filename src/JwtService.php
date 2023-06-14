<?php

declare (strict_types = 1);

namespace hedali\JWTAuth;

use hedali\JWTAuth\Service\JwtAuth;
use hedali\JWTAuth\Service\Manager;
use hedali\JWTAuth\Service\Token;
use hedali\JWTAuth\Service\SSO;
use hedali\JWTAuth\Service\User;

class JwtService extends \think\Service
{
    public function register()
    {
        $this->app->bind('jwt', JwtAuth::class);
        $this->app->bind('jwt.manager', Manager::class);
        $this->app->bind('jwt.token', Token::class);
        $this->app->bind('jwt.sso', SSO::class);
        $this->app->bind('jwt.user', User::class);
    }

    public function boot()
    {
        // $this->commands(JwtCommand::class);
    }
}
