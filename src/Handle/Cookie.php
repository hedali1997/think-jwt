<?php

declare(strict_types=1);

namespace hedali\JWTAuth\Handle;

class Cookie extends RequestToken
{
    public function handle()
    {
        return $this->app->cookie->get('token');
    }
}
