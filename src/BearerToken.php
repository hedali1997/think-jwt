<?php

namespace xiaodi;

use think\App;
use xiaodi\Exception\JwtException;

class BearerToken
{
    private $request;

    public function __construct(App $app)
    {
        $this->request = $app->request;
    }

    public function getToken()
    {
        $authorization = $this->request->header('authorization');

        if (strpos($authorization, 'Bearer ') !== 0) {
            throw new JwtException('获取Token失败.');
        }

        return substr($authorization, 7);
    }
}
