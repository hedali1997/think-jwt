<?php

declare(strict_types=1);

namespace hedali\JWTAuth\Facade;

use think\Facade;

/**
 * @see \hedali\JWTAuth\Service\Jwt
 * @mixin \hedali\JWTAuth\Service\Jwt
 */
class Jwt extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）.
     *
     * @return string
     */
    protected static function getFacadeClass()
    {
        return \hedali\JWTAuth\Service\JwtAuth::class;
    }
}
