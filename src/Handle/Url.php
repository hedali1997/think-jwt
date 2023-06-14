<?php

declare(strict_types=1);

namespace hedali\JWTAuth\Handle;

class Url extends RequestToken
{
    public function handle()
    {
        return $this->app->request->get('token');
    }
}
